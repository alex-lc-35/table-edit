<?php

namespace App\Http\Controllers;

use App\Services\TableEditService;

class TableEditController extends Controller
{
    public function show($name)
    {
        $service = new TableEditService();
        $options = $service->getOptions($name);
        return response()->json($options);
    }
}
