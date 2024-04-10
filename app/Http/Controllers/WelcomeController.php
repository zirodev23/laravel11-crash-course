<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function about() {
        // return "<h1>About page</h1>";
        return view('about');
    }
}
