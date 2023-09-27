<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComoSeAssociarController extends Controller
{
    public function index() {
        return view('como-se-associar');
    }

    public function sendmail() {
        return view('sendmail');
    }
}
