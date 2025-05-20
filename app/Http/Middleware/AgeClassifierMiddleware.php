<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\AgeLog;
use App\Services\AgeRouterService; 
use Symfony\Component\HttpFoundation\Response;

class AgeClassifierMiddleware
{
    protected AgeRouterService $ageRouterService;

    public function __construct(AgeRouterService $ageRouterService)
    {
        $this->ageRouterService = $ageRouterService;
    }

    public function handle(Request $request, Closure $next): Response
    {
        $validator = Validator::make($request->all(), [
            'age' => 'required|numeric|min:0|max:120',
        ], [
            'age.required' => 'Por favor, ingresa tu edad.',
            'age.numeric' => 'La edad debe ser un número.',
            'age.min' => 'La edad mínima permitida es 0 años.',
            'age.max' => 'La edad máxima permitida es 120 años.',
        ]);

        if ($validator->fails()) {
            return redirect()->route('portal.error.edadInvalida', ['mensaje' => $validator->errors()->first()]);
        }

        $age = (int) $request->input('age');

        try {
            AgeLog::create(['age_entered' => $age]);
        } catch (\Exception $e) {
        }

        $routeName = $this->ageRouterService->getRouteNameByAge($age);

        if ($routeName) {
            return redirect()->route($routeName);
        }

        return redirect()->route('portal.error.edadInvalida', ['mensaje' => 'No se pudo clasificar la edad ingresada.']);
    }
}