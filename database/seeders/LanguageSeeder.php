<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LanguageSeeder extends Seeder
{
    public function run()
    {
        DB::table('languages')->truncate();
        DB::table('languages')->insert([
            [
                'name' => 'English',
                'locale' => 'en',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Spanish',
                'locale' => 'es',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Portuguese',
                'locale' => 'pt',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}