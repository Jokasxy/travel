<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageUrlsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('image_urls')->insert([
            'imageURL' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Plitvice_lakes.JPG/800px-Plitvice_lakes.JPG',
            'location_id' => '1',
        ]);
        DB::table('image_urls')->insert([
            'imageURL' => 'https://www.arcgis.com/sharing/rest/content/items/d02e2cd2e46a40aeae3661b2044a3b0a/resources/1589545644386.jpeg?w=1600',
            'location_id' => '1',
        ]);
        DB::table('image_urls')->insert([
            'imageURL' => 'https://www.planetware.com/wpimages/2019/06/czech-republic-prague-itineraries-for-travelers-one-day-itinerary-old-town-square.jpg',
            'location_id' => '2',
        ]);
        DB::table('image_urls')->insert([
            'imageURL' => 'https://www.telegraph.co.uk/content/dam/Travel/Destinations/Europe/Czech%20Republic/Prague/prague-main-image.jpg',
            'location_id' => '2',
        ]);
    }
}
