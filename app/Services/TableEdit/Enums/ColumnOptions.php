<?php

namespace App\Services\TableEdit\Enums;

class ColumnOptions
{
    public const TYPE_TEXT = 'text';
    public const TYPE_NUMERIC = 'numeric';
    public const TYPE_DROPDOWN = 'dropdown';
    public const TYPE_CALENDAR = 'calendar';
    public const TYPE_CHECKBOX = 'checkbox';

    public const ALIGN_LEFT = 'left';
    public const ALIGN_CENTER = 'center';
    public const ALIGN_RIGHT = 'right';

    public const FORMAT_DATE_FR = 'DD/MM/YYYY';
}
