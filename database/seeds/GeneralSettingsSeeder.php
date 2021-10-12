<?php

use Illuminate\Database\Seeder;

use App\GeneralSettings;
class GeneralSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GeneralSettings::create([
            'logo' => 'front/logo.png',
            'image' => 'front/img/slides/slide_2.jpg',
            'h1' => 'Réservez nimporte quel service',
            'h2' => 'Mr. Bricolage Guadeloupe'
        ]);
    }
}
