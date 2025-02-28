<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class swapController extends Controller
{
    public function swapValues()
    {
        //initlize numeric variables
        $a = 10;
        $b = 20;

        // Values before swapping
        $beforeSwap = [
            'a' => $a,
            'b' => $b,
        ];

        // Swap values using a temporary variables
        $temp = $a;
        $a = $b;
        $b = $temp;

        // Values after swapping
        $afterSwap = [
            'a' => $a,
            'b' => $b,
        ];

        return view('swap', compact('beforeSwap', 'afterSwap'));
    }
}
