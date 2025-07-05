<?php

namespace App\Modules\TableEdit\Tables;

use App\Modules\TableEdit\AbstractTable;
use App\Modules\TableEdit\Models\Column;
use App\Modules\TableEdit\Enums\ColumnOptions as C;

class Loan extends AbstractTable
{
    public function tableName(): string
    {
        return 'loan';
    }

    public function columns(): array
    {
        return [
            Column::make('Nom')->width(200),
            Column::make('Montant')->type(C::TYPE_NUMERIC)->width(80)->align(C::ALIGN_RIGHT),
        ];
    }

    public function data(): array
    {
        return [
            ['Alex', '19700'],
            ['Toto', '1000'],
            ['Tata', '500'],
        ];
    }
}
