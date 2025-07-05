<?php

namespace App\Modules\TableEdit\Models;

use App\Modules\TableEdit\Enums\ColumnOptions;

class Column
{
    protected array $attributes = [];

    public function __construct(string $title, ?string $name = null)
    {
        $this->attributes['title'] = $title;
        $this->attributes['name'] = $name ?? $this->slugify($title);
        $this->attributes['width'] = '100px';
        $this->attributes['align'] = ColumnOptions::ALIGN_LEFT;
        $this->attributes['type'] = ColumnOptions::TYPE_TEXT;
    }

    public static function make(string $title, ?string $name = null): self
    {
        return new self($title, $name);
    }

    public function width(int|string $width): self
    {
        $this->attributes['width'] = is_numeric($width) ? "{$width}px" : $width;
        return $this;
    }

    public function align(string $align): self
    {
        $this->attributes['align'] = $align;
        return $this;
    }

    public function type(string $type): self
    {
        $this->attributes['type'] = $type;
        return $this;
    }

    public function source(array $values): self
    {
        $this->attributes['source'] = $values;
        return $this;
    }

    public function format(string $format): self
    {
        $this->attributes['format'] = $format;
        return $this;
    }

    public function name(string $name): self
    {
        $this->attributes['name'] = $name;
        return $this;
    }

    public function toArray(): array
    {
        return $this->attributes;
    }

    protected function slugify(string $text): string
    {
        return strtolower(preg_replace('/[^a-z0-9]+/', '_', $text));
    }
}
