<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function __invoke(Request $request)
    {
        $mensaje = $request->query('mensaje', 'La edad ingresada no es válida o está fuera de los rangos permitidos.');
        return view('portal.error_edad', ['mensaje' => $mensaje]);
    }
}