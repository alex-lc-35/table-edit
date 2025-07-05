<?php

namespace App\Http\Controllers;

use App\Services\TableEdit\Enums\ColumnOptions as C;
use App\Services\TableEdit\Models\Column;
use App\Services\TableEdit\TableEditService;

class TableEditController extends Controller
{
    public function show($name)
    {
        $service = new TableEditService($name);

        $service->setData([
            ['TATA', ''],
            ['Purchase price', '19700'],
            ['Down payment', '1000'],
            ['Trade-in value', '500'],
            ['Interest rate', '0.0305'],
        ]);

        $service->setColumns([
            Column::make('Nom')
                ->width(200),

            Column::make('Prix')
                ->type(C::TYPE_NUMERIC)
                ->width(60),
        ]);

        $data = $service->generate();
        return response()->json($data);
    }
}
