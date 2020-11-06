<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    public function run()
    {
        $settings = [
            [
                'group' => "general",
                'option' => 'site_default_locale',
                'value' => 'es',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'group' => "general",
                'option' => 'enable_multi_language_site',
                'value' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ];
        DB::table('settings')->truncate();
        DB::table('settings')->insert($settings);
    }
}