<?php

namespace App\Http\Controllers;

use App\Modules\TableEdit\Tables\Loan;

class TestController extends Controller
{
    public function index()
    {
        $tableEdit = new Loan();
        $data = $tableEdit->render();

        return response()->json([
            'message' => $data
        ]);
    }
}
