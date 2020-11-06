<?php

use App\Http\Controllers\PostController;
use App\Models\Language;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

$locale = request()->segment(1);
$locale_codes = Language::getAvailableLocaleCodes();
$default_locale = config('localization.site_default_locale');

if (in_array($locale, $locale_codes) && $locale != $default_locale && config('localization.enable_multi_language_site')) {
    App::setLocale($locale);
} else {
    App::setLocale($default_locale);
    $locale = null;
}

Route::group(array('prefix' => $locale), function () {
    Route::get('/contact-us', function () {
        return view('contact-us');
    })->name('page.contact_us');
    Route::get('/', [PostController::class, 'index'])->name('blog.home');
    Route::get('/{slug}', [PostController::class, 'show'])->name('blog.post');
});