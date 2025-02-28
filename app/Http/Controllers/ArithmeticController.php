<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArithmeticController extends Controller
{
    public function showArithmeticOperations()
    {
        $a = 20;
        $b = 10;

        $addition = $a + $b;
        $subtraction = $a - $b;
        $multiplication = $a * $b;
        $division = $a / $b;
        $modulo = $a % $b;

        $results = [
            'a' => $a,
            'b' => $b,
            'addition' => $addition,
            'subtraction' => $subtraction,
            'multiplication' => $multiplication,
            'division' => $division,
            'modulo' => $modulo,
        ];

        return view('arithmetic', compact('results'));
    }
}
