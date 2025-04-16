<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ConfigSeeder extends Seeder
{
    public function run()
    {
        if (!DB::table('configs')->count()) {
            DB::table('configs')->insert([
                'company_name' => 'Eternal Defender',
                'logo' => 'uploads/config/logo-img-955.png',
                'secondary_logo' => null,
                'favicon' => null,
                'all_rights_reserved_text' => '© 2025 Eternal Defenders. All Rights Reserved.',
                'address_line_1' => 'USA',
                'address_line_2' => '',
                'district' => null,
                'local_government' => null,
                'state' => null,
                'postal_code' => null,
                'country' => null,
                'primary_phone_number' => '+1 (641) 233-9179',
                'secondary_phone_number' => '',
                'email' => 'info@eternaldefenders.com',
                'website' => null,
                'description' => null,
                'sub_title' => null,
                'mobile_number' => null,
                'twitter_url' => null,
                'facebook_url' => null,
                'instagram_url' => null,
                'linkedin_url' => null,
                'youtube_url' => null,
                'map_url' => null,
                'video_url' => null,
                'canonical_url' => null,
                'keywords' => null,
                'bank_name' => null,
                'bank_account_number' => null,
                'bank_account_name' => null,
                'bank_qr' => null,
                'menu_json' => json_encode([
                    [
                        "text" => "Home",
                        "href" => "http://home.com",
                        "icon" => "fas fa-home",
                        "target" => "_top",
                        "title" => "Home Sample"
                    ],
                    [
                        "text" => "About Us",
                        "href" => "#about",
                        "icon" => "fas fa-chart-bar",
                        "target" => "_self",
                        "title" => ""
                    ],
                    [
                        "text" => "Services",
                        "href" => "#service",
                        "icon" => "fas fa-bell",
                        "target" => "_self",
                        "title" => ""
                    ],
                    [
                        "text" => "Blog",
                        "href" => "#blog",
                        "icon" => "",
                        "target" => "_self",
                        "title" => ""
                    ],
                ]),
                'footer_json' => null,
                'created_at' => Carbon::parse('2025-03-17 05:40:11'),
                'updated_at' => Carbon::parse('2025-04-15 23:16:23'),
            ]);
        }
    }
}
