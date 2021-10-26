<?php

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
        Setting::create([
            'name' => 'Wisata Pidie',
            'description' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia',
            'address' => 'Kota Sigli, Kabupaten Pidie Provinsi Aceh',
            'phone_number' => '082166032606',
            'email' => 'wisatapidie@gmail.com',
            'twitter_link' => 'https://twitter.com',
            'facebook_link' => 'https://facebook.com',
            'instagram_link' => 'https://instagram.com',
            'map' => '!1m18!1m12!1m3!1d100177.61163877352!2d107.57311620523868!3d-6.903273916162036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e1!3m2!1sid!2sid!4v1635266198171!5m2!1sid!2sid',
            'logo' => NULL
        ]);
    }
}
