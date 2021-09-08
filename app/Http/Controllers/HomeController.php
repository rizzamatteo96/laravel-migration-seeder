<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage() {
        return view('homepage');
    }

    public function history() {
        return view('history');
    }

    public function contacts() {
        return view('contacts');
    }
}
