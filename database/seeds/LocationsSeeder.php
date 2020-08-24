<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            'name' => 'Plitvice lakes',
            'country' => 'Croatia',
            'description' => 'Plitvice Lakes National Park is one of the oldest and largest national parks in Croatia. In 1979, Plitvice Lakes National Park was added to the UNESCO World Heritage register. The national park was founded in 1949 and is in the mountainous karst area of central Croatia, at the border to Bosnia and Herzegovina. The important north–south road that passes through the national park area connects the Croatian inland with the Adriatic coastal region. The protected area extends over 296.85 square kilometres (73,350 acres). About 90% of this area is part of Lika-Senj County, while the remaining 10% is part of Karlovac County. Each year, more than 1 million visitors are recorded.  Entrance is subject to variable charges, up to 250 kuna or around €34 per adult per day in summer 2018.',
            'latitude' => 44.88126,
            'longitude' => 15.62275,
        ]);
        DB::table('locations')->insert([
            'name' => 'Prague',
            'country' => 'Czech Republic',
            'description' => 'Prague is the capital and largest city in the Czech Republic, the 13th largest city in the European Union and the historical capital of Bohemia. Situated on the Vltava river, Prague is home to about 1.3 million people, while its metropolitan area is estimated to have a population of 2.7 million. The city has a temperate oceanic climate, with relatively warm summers and chilly winters.',
            'latitude' => 50.08804,
            'longitude' => 14.42076,
        ]);
    }
}
