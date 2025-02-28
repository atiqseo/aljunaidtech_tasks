<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssignmentOperatorsController extends Controller
{
    public function showAssignmentOperators()
    {
        $value = 10;

        $initialValue = $value;

        $value += 5;  
        $additionResult = $value;

        $value -= 3;  
        $subtractionResult = $value;

        $value *= 2;  
        $multiplicationResult = $value;

        $value /= 4;  
        $divisionResult = $value;

        $value %= 3;  
        $moduloResult = $value;

        $results = [
            'initialValue' => $initialValue,
            'additionResult' => $additionResult,
            'subtractionResult' => $subtractionResult,
            'multiplicationResult' => $multiplicationResult,
            'divisionResult' => $divisionResult,
            'moduloResult' => $moduloResult,
        ];

        return view('assignmentoperators', compact('results'));
    }
}
