<?php

namespace App\Modules\TableEdit\Tables;

use App\Models\Product;
use App\Modules\TableEdit\AbstractTable;
use App\Modules\TableEdit\Models\Column;
use App\Modules\TableEdit\Enums\ColumnOptions as C;

class ProductTableEdit extends AbstractTable
{
    public function tableName(): string
    {
        return 'product';
    }

    public function columns(): array
    {
        return [
            Column::make('name')->width(200),
            Column::make('price')
                ->type(C::TYPE_NUMERIC)
                ->width(80)
                ->align(C::ALIGN_RIGHT),
        ];
    }

    public function data(): array
    {
        return Product::query()->select(['name', 'price'])->get()->toArray();
    }
}
