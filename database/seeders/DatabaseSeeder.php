<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(SettingSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(PostTranslationSeeder::class);
    }
}
