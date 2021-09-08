<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;


class TravelsController extends Controller
{
    public function travelspage() {
        // read data from DB
        $travels = Travel::paginate(6);
        // dd($travels[0]);

        return view('travels',compact('travels'));
    }

    public function details($key) {
        // read data from DB
        $travels = Travel::where('id', $key)->first();
        // dd($travels);

        return view('travelDetails',compact('travels'));
    }
}
