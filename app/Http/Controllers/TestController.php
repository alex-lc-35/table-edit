<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Hello World!'
        ]);
    }

    public function table($name)
    {
        $worksheet = [
            'data' => [
                ['TOTO', ''],
                ['Purchase price', '19700'],
                ['Down payment', '1000'],
                ['Trade-in value', '500'],
                ['Interest rate', '0.0305'],
            ],
            'columns' => [
                ['width' => '300px'],
                ['width' => '200px'],
            ],
            'rows' => [
                0 => ['height' => '200px'],
            ],
        ];

        $options = [
            'table-name' => $name,
            'worksheets' => [$worksheet],
        ];

        return response()->json($options);
    }
}
