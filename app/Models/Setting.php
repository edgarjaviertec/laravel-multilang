<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public static function getSetting($key)
    {
        $setting = self::whereOption($key)->first();
        return !empty($setting->value) ? $setting->value : null;
    }
}
