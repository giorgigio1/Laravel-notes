<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeGiorgi extends Controller
{
    public function welcomeGiorgi() {
        return view("welcome");
    }
}
