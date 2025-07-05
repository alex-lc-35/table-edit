<?php

namespace App\Http\Controllers;

use App\Services\TableEdit\Models\Column;
use App\Services\TableEdit\Enums\ColumnOptions as C;

class TestController extends Controller
{
    public function index()
    {
        $columns = [
            Column::make('Nom')
                ->width(200)
                ->type(C::TYPE_TEXT)
                ->align(C::ALIGN_LEFT),

            Column::make('Date')
                ->type(C::TYPE_CALENDAR)
                ->format(C::FORMAT_DATE_FR)
                ->align(C::ALIGN_CENTER),

            Column::make('Statut')
                ->type(C::TYPE_DROPDOWN)
                ->source(['Actif', 'Inactif'])
                ->align(C::ALIGN_CENTER),
        ];


        return response()->json([
            'message' => collect($columns)->map->toArray()
        ]);

        $columns = collect([
            (new Column('Nom', 'name'))->align('center')
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
