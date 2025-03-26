<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class belajar extends Controller
{
    public function index()
    {
        return view('belajar');
    }

    public function addition()
    {
        $total = 0;
        return view('addition', compact('total'));
    }

    public function subtraction()
    {
        return view('subtraction');
    }
    public function division()
    {
        return view('division');
    }
    public function multiply()
    {
        return view('multiply');
    }

    public function actionAddition(Request $request)
    {
        $number1 = $request->number1;
        $number2 = $request->number2;
        $total = $number1 + $number2;
        return "The sum are :" . $total;
    }
}
