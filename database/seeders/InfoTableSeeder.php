<?php

namespace Database\Seeders;


use App\Models\info;
use Illuminate\Database\Seeder;
// use Symfony\Polyfill\Intl\Idn\Info;

class InfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        info::create([
            'icon'=>'fas fa-phone',
            'title_one' => 'Give us a call:',
            'title_two' => ' +00 (123) 456 7890',

        ]);

        info::create([
            'icon'=>'fas fa-envelope',
            'title_one' => 'Send us a mail:',
            'title_two' => '  support@domain.com',

        ]);

        info::create([
            'icon'=>'fas fa-clock',
            'title_one' => 'Mon. - Sat.:',
            'title_two' => ' 08.00am - 18.00pm',

        ]);

        info::create([
            'icon'=>'fas fa-map-marker-alt',
            'title_one' => 'Come visit us:',
            'title_two' => ' +00 (123) 456 7890',

        ]);
    }
}
