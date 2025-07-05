<?php

namespace App\Services\TableEdit;

use Illuminate\Support\Collection;

class TableEditService
{
    protected string $tableName;
    protected Collection $columns;
    protected Collection $data;

    public function __construct(string $tableName)
    {
        $this->tableName = $tableName;
    }

    public function generate() {
        return [
            'name' => $this->tableName,
            'options' => $this->getOptions(),
        ];
    }

    /**
     * @param array|Collection $columns
     */
    public function setColumns(array|Collection $columns): void
    {
        $this->columns = $columns instanceof Collection
            ? $columns
            : collect($columns);
    }

    /**
     * @param array|Collection $data
     */
    public function setData(array|Collection $data): void
    {
        $this->data = $data instanceof Collection
            ? $data
            : collect($data);
    }

    public function getOptions()
    {
        $worksheet = [
            'data' => $this->data->toArray(),
            'columns' => $this->columns->map->toArray(),
        ];

        $options = [
            'worksheets' => [$worksheet],
        ];

        return $options;
    }
}
