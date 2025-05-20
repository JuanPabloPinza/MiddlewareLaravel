<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdultoController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('portal.adultos', ['classification' => 'Adultos']);
    }
}