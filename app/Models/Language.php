<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;

class Language extends Model
{
    use HasFactory;

    public static function getAvailableLanguages()
    {
        $value = Cache::rememberForever('languages', function () {
            return self::select('name', 'locale')->get();
        });
        return $value;
    }

    public static function getAvailableLocaleCodes()
    {
        $value = Cache::rememberForever('locale_codes', function () {
            $locale_codes = self::select('locale')->get();
            return Arr::pluck($locale_codes, 'locale');
        });
        return $value;
    }
}