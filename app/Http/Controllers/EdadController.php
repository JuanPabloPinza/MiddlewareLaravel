<?php

namespace App\Http\Controllers;

use App\Models\Edad;
use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\Edad;
use Illuminate\Http\Request;

class EdadController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'edad' => 'required|integer|min:0|max:120',
        ]);

        Edad::create(['edad' => $request->edad]);

        return redirect()->route('redirigir.edad', ['edad' => $request->edad]);
    }
}