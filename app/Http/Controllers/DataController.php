<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    //


    public function store(Request $request){
        $request->validate([
            'imie_nazwisko' => 'required',
            'email' => 'required',
            'ulicanr' => 'required',
            'miasto' => 'required',
            'kodpocztowy' => 'required',
            'model' => 'required',
            'ilosc' => 'required',
            'wprowadzanie' => 'required',
            'suma' => 'required',
            'sposob' => 'required',
            'date' => 'required',
            'podpis' => 'required',
            
        ]);
    }
}
