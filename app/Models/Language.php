<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Language extends Model
{
    use HasFactory;

    public static function getAvailableLanguages()
    {
        return self::select('name', 'locale')->get();
    }

    public static function getAvailableLocaleCodes()
    {
        $locale_codes = Language::select('locale')->get();
        return Arr::pluck($locale_codes, 'locale');
    }
}