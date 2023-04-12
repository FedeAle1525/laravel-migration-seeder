<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // Metodo che ritorna la Vista "Welcome"
    public function homepage()
    {
        return view('welcome');
    }
}
