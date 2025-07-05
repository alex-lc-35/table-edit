<?php

namespace App\Services;

class TableEditService
{
    public function __construct()
    {
    }

    public function getOptions($name)
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

        return $options;
    }
}
