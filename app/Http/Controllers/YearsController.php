<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Year;

class YearsController extends Controller
{
  public function history(){

    $years = Year::all()->sortBy('year');
    // dd($years);

    return view('history', compact('years'));
  }
}
