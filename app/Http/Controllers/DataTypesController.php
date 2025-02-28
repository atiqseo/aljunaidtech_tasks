<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataTypesController extends Controller
{
    public function showDataTypes()
    {
        $integerVar = 42;
        $stringVar = "Hello World";
        $booleanVar = true;
        $arrayVar = [1, 2, 3, 4, 5];
        $objectVar = (object) ['name' => 'John', 'age' => 30];

        $data = [
            'integerVar' => $integerVar,
            'stringVar' => $stringVar,
            'booleanVar' => $booleanVar,
            'arrayVar' => $arrayVar,
            'objectVar' => $objectVar,
        ];

        $types = [];
        $dump = [];

        foreach ($data as $key => $value) {
            $types[$key] = gettype($value);
            $dump[$key] = $this->captureVarDump($value);
        }

        return view('data-types', compact('types', 'dump'));
    }

    private function captureVarDump($variable)
    {
        ob_start();
        var_dump($variable);
        return ob_get_clean();
    }

}
