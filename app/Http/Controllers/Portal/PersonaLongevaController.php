<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonaLongevaController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('portal.longevos', ['classification' => 'Personas longevas']);
    }
}