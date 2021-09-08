<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;


class TravelsController extends Controller
{
    public function travelspage() {
        // read data from DB
        $travels = Travel::all();
        // dd($travels[0]);

        return view('travels',compact('travels'));
    }
}
