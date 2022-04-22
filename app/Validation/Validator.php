<?php

namespace App\Validation;

class Validator
{
    public static function isNumber($value): bool
    {
        if (is_numeric($value)) {
            return true;
        }
        return false;
    }

    public static function treatInput($value)
    {
        $value = trim($value);
        return $value;
    }

    public static function isString($value): bool
    {
        if (is_string($value) && (int)$value == 0) {
            return true;
        }
        return false;
    }
}
