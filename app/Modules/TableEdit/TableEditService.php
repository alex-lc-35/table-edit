<?php

namespace App\Modules\TableEdit;

use Illuminate\Support\Collection;

class TableEditService
{
    protected string $tableName;
    protected Collection $columns;
    protected Collection $data;

    public function __construct(string $tableName)
    {
        $this->tableName = $tableName;
        $this->columns = collect();
        $this->data = collect();
    }

    public static function make(string $tableName): self
    {
        return new self($tableName);
    }

    public function setColumns(array|Collection $columns): self
    {
        $this->columns = $columns instanceof Collection ? $columns : collect($columns);
        return $this;
    }

    public function setData(array|Collection $data): self
    {
        $this->data = $data instanceof Collection ? $data : collect($data);
        return $this;
    }

    public function edit($row, $data)
    {
        return true;
    }

    public function generate(): array
    {
        return [
            'name' => $this->tableName,
            'options' => [
                'worksheets' => [
                    [
                        'data' => $this->data->toArray(),
                        'columns' => $this->columns->map->toArray()->all(),
                    ],
                ],
            ],
        ];
    }
}
