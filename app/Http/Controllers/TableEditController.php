<?php

namespace App\Http\Controllers;

use App\Modules\TableEdit\Tables\Loan;

class TableEditController extends Controller
{
    public function show()
    {
        $tableEdit = new Loan();
        $data = $tableEdit->render();
        return response()->json($data);
    }
}
