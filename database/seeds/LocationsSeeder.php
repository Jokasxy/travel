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
        DB::table('locations')->insert([
            'name' => 'Paris',
            'country' => 'France',
            'description' => 'Paris is the capital city of France, the capital of love and one of the principal tourist centers in modern Europe. The city is located in the region known as Île-de-France which can be found in the north-central part of the country. For many centuries Paris has been considered to be a cultural and fashion capital of the continent, with a large number of fashion designers, makeup and beauty specialists, artists, cinema and music related specialists living and working in the city.',
            'latitude' => 48.864716,
            'longitude' => 2.349014,
        ]);
        DB::table('locations')->insert([
            'name' => 'New York',
            'country' => 'NY, United States of America',
            'description' => 'New York City is one of the most known cities-symbols of the USA located in the northwestern part of the country, on the Atlantic coast. It is known as a global business capital city and one of the most populous, developed, innovative, and bustling cities of the world. New York is a true wonder of the US, and it can open its secrets and beautiful atmosphere to anyone who comes to visit it. It is located on the mouth of the Hudson River and is a destination for all kinds of tourists and guests, from business people to various tourists seeking some rest and new adventures.',
            'latitude' => 40.730610,
            'longitude' => -73.935242,
        ]);
        DB::table('locations')->insert([
            'name' => 'London',
            'country' => 'England, United Kingdom',
            'description' => 'London is a political, historical, cultural, and tourist center of the United Kingdom, an important city and commercial spot in Western Europe, as well as one of the largest European cities, located on the southeastern part of the British Island. London is a heart of European tourism, with annual spending of over16 billion pounds for maintaining and renovating its attractions, adding new amazing entertainment and cultural objects and establishments. There are a few districts in the city, including its business heart Soho, governmental district of Westminster, industrial East End, etc.',
            'latitude' => 51.509865,
            'longitude' => -0.118092,
        ]);
        DB::table('locations')->insert([
            'name' => 'Bali',
            'country' => 'Indonesia',
            'description' => 'An island and a province in Indonesia, Bali is one of the most known luxury resorts and a developed tourist area in the Far East. Bali is located to the east of the island of Java and is connected with the large island by a frequent ferry line. For many decades Bali has been among the most popular seaside vacation destinations for people from all around the world and every year millions of tourists and travelers visit the island which offers amazing opportunities for all kinds of vacation types, for all tastes and budgets. There are a few million people living currently in Bali, and most of those work on the field of services, including accommodation, catering, recreation, health care, and so on. It is quite easy to reach the island by air and the local airport connects the island with many countries of the planet.',
            'latitude' => -8.409518,
            'longitude' => 115.188919,
        ]);
        DB::table('locations')->insert([
            'name' => 'Rio de Janeiro',
            'country' => 'Brasil',
            'description' => 'Rio de Janeiro is a large coastal city and one of the most popular tourist destinations, as well as the capital of Rio de Janeiro State, in south eastern Brazil. With the population of this metropolitan area close to 12 million people, it is the second largest settlement of the country after Sao Paulo. Rio de Janeiro is a principal center of cultural and business life of the country, but especially a tourist spot, with millions and millions of people visiting the city year round, but especially during the season of traditional Brazilian carnivals. The main attractions of the city are very well known and include the Christ the Redeemer, Copacabana Beach, Pedra da Gávea mountain, Sugarloaf Mount, numerous beaches, markets, and shopping areas, as well as Marakana Stadium and other facilities for sports.',
            'latitude' => -22.908333,
            'longitude' => -43.196388,
        ]);
        DB::table('locations')->insert([
            'name' => 'Istanbul',
            'country' => 'Turkey',
            'description' => 'Though sometimes it is erroneously named as the capital of Turkey, Istanbul is the main cultural and geopolitical center, at that is one of the largest and most populous cities of the Middle East. It is located in the northwestern part of the country, on the Strait of Bosporus, right between the Black Sea and the Marmara Sea. Istanbul, with its amount of historic monuments and cultural events, is a dream city for those who like traveling, learning new cultures and old historic traditions. The history of the city starts in the post-Roman Empire times, and the city used to play a key role as the capital of the Byzantine Empire, known as Constantinople. It used to be the final point of the so-called Silk Road stretching from the city of Shanghai to modern Istanbul.',
            'latitude' => 41.015137,
            'longitude' => 28.979530,
        ]);
    }
}
