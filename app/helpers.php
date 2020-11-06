<?php

use App\Models\Language;
use App\Models\Setting;

if (!function_exists('get_language_switcher_url')) {
    function get_language_switcher_url($locale)
    {
        $locale_codes = Language::getAvailableLocaleCodes();
        $default_locale = Setting::getSetting('site_default_locale');
        $segments = Request::segments();
        if ($segments && in_array($segments[0], $locale_codes)) {
            unset($segments[0]);
        }
        if ($locale != $default_locale) {
            $segments = Arr::prepend($segments, $locale);
        }
        $url = '/' . implode('/', $segments);
        return $url;
    }
}