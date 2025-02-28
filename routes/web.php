<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\swapController;
use App\Http\Controllers\DataTypesController;
use App\Http\Controllers\ArithmeticController;
use App\Http\Controllers\LogicalOperatorsController;
use App\Http\Controllers\AssignmentOperatorsController;

Route::get('/personalinfo', function () {
    
    $perinfo = [
        'name' => 'Atiq Khalil',
        'gender' => 'Male',
        'age' => 23,
        'address' => 'Sarai Sidhu',
        'degree' => 'BSCS',
        'dob' => '2-9-2001',
    ];
    
    return view('persoanlinfo',compact('perinfo'));
});

Route::get('/swap', [swapController::class, 'swapValues']);

Route::get('/data-types', [DataTypesController::class, 'showDataTypes']);

Route::get('/arithmetic', [ArithmeticController::class, 'showArithmeticOperations']);

Route::get('/assignmentoperators', [AssignmentOperatorsController::class, 'showAssignmentOperators']);

Route::get('/logicaloperators', [LogicalOperatorsController::class, 'showLogicalOperators']);

