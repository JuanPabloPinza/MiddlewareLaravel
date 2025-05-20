<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdultoMayorController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('portal.mayores', ['classification' => 'Adultos mayores']);
    }
}