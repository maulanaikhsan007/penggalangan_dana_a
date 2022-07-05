<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = Setting::create([
            'email' => 'support@maul.com',
            'phone' => '089633755424',
            'owner_name' => 'administrator',
            'company_name' => 'W2 Charity',
            'short_description' => '',
            'keyword' => '',
            'about' => '',
            'address' => '',
            'postal_code' => '',
            'city'=> '',
            'province' => '',
            'path_image' => '',
            'path_image_header' => '',
            'path_image_footer' => '',
        ]);
    }
}
