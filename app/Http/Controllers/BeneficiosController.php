<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeneficiosController extends Controller
{
    public function index() {
        return view('beneficios');
    }
}
