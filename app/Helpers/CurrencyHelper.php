<?php

use App\Models\Currency;

class CurrencyHelper
{
    public static function active()
    {
        return Currency::where('is_default', true)->first();
    }

    public static function convert($price)
    {
        $currency = self::active();

        if (!$currency) return $price;

        return $price * $currency->value;
    }

    public static function format($price)
    {
        $currency = self::active();

        if (!$currency) return $price;

        $converted = $price * $currency->value;

        return $currency->position === 'before'
            ? $currency->symbol . number_format($converted, 2)
            : number_format($converted, 2) . $currency->symbol;
    }
}
