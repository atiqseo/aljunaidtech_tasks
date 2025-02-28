<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogicalOperatorsController extends Controller
{
    public function showLogicalOperators()
    {
        $a = true;
        $b = false;

        $andResult = $a && $b; 
        $orResult = $a || $b;  
        $notResultB = !$b;      
        $notResultA = !$a;      

        $results = [
            'a' => $a,
            'b' => $b,
            'andResult' => $andResult,
            'orResult' => $orResult,
            'notResultA' => $notResultA,
            'notResultB' => $notResultB,
        ];

        return view('logicaloperators', compact('results'));
    }
}
