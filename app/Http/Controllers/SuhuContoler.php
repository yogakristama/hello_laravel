<?php

namespace App\Http\Controllers;

use Illuminate\http\Request;

class SuhuController extends Controller {
    function suhu (Request $request){

    $celcius = $request->input('celcius');
    $fahrenheit = $celcius * 9/5 + 32;

    $suhu = [
        'celcius'=> $celcius,
        'fahrenheit'=> $fahrenheit,
    ];
        return view('product/suhu', $suhu);
    }
}