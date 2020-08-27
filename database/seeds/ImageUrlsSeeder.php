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

        DB::table('image_urls')->insert([
            'imageURL' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4b/La_Tour_Eiffel_vue_de_la_Tour_Saint-Jacques%2C_Paris_ao%C3%BBt_2014_%282%29.jpg/1920px-La_Tour_Eiffel_vue_de_la_Tour_Saint-Jacques%2C_Paris_ao%C3%BBt_2014_%282%29.jpg',
            'location_id' => '3',
        ]);
        DB::table('image_urls')->insert([
            'imageURL' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/Louvre_Museum_Wikimedia_Commons.jpg/1920px-Louvre_Museum_Wikimedia_Commons.jpg',
            'location_id' => '3',
        ]);
        DB::table('image_urls')->insert([
            'imageURL' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Conseil_d%27Etat_Paris_WA.jpg/1920px-Conseil_d%27Etat_Paris_WA.jpg',
            'location_id' => '3',
        ]);
        DB::table('image_urls')->insert([
            'imageURL' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/97/Rue_de_Rivoli_at_night%2C_Paris_August_2013.jpg/1280px-Rue_de_Rivoli_at_night%2C_Paris_August_2013.jpg',
            'location_id' => '3',
        ]);

        DB::table('image_urls')->insert([
            'imageURL' => 'https://i.insider.com/5d0150e06fc9200b5a05f042?width=1136&format=jpeg',
            'location_id' => '4',
        ]);
        DB::table('image_urls')->insert([
            'imageURL' => 'https://www.gannett-cdn.com/media/2018/12/15/USATODAY/usatsports/MotleyFool-TMOT-657f0436-21e9af86.jpg?quality=50',
            'location_id' => '4',
        ]);
        DB::table('image_urls')->insert([
            'imageURL' => 'https://cdn.getyourguide.com/img/location/5c04f6f20650d.jpeg/148.jpg',
            'location_id' => '4',
        ]);
        DB::table('image_urls')->insert([
            'imageURL' => 'https://cdn.vox-cdn.com/thumbor/l7KiYMM-47Ktsd7zRd3jffBilCo=/0x0:6000x4000/1200x800/filters:focal(2520x1520:3480x2480)/cdn.vox-cdn.com/uploads/chorus_image/image/66907018/shutterstock_1701722863.0.jpg',
            'location_id' => '4',
        ]);

        DB::table('image_urls')->insert([
            'imageURL' => 'https://www.history.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cfl_progressive%2Cq_auto:good%2Cw_1200/MTYyNDg1MjE3MTI1Mjc5Mzk4/topic-london-gettyimages-760251843-promo.jpg',
            'location_id' => '5',
        ]);
        DB::table('image_urls')->insert([
            'imageURL' => 'https://www.cityam.com/wp-content/uploads/2020/02/London_Tower_Bridge_City.jpg',
            'location_id' => '5',
        ]);
        DB::table('image_urls')->insert([
            'imageURL' => 'https://www.telegraph.co.uk/content/dam/Travel/Destinations/Europe/United%20Kingdom/London/london-aerial-thames-guide-xlarge.jpg',
            'location_id' => '5',
        ]);

        DB::table('image_urls')->insert([
            'imageURL' => 'https://media.timeout.com/images/105240189/630/472/image.jpg',
            'location_id' => '6',
        ]);
        DB::table('image_urls')->insert([
            'imageURL' => 'https://gotravel.hr/wp-content/uploads/2019/01/tirta-gangga.png',
            'location_id' => '6',
        ]);
        DB::table('image_urls')->insert([
            'imageURL' => 'https://www.popustplus.hr/upload/groupbuydeal/92116/otok-bali-10-dana-popustplus0_5ac38d68898ab.jpg',
            'location_id' => '6',
        ]);
        DB::table('image_urls')->insert([
            'imageURL' => 'https://www.integral-zagreb.hr/sites/default/files/styles/1920_auto_/public/uploads/products/gallery/2019-11/bali-putovanje-3.jpg?itok=qcAVezhd',
            'location_id' => '6',
        ]);

        DB::table('image_urls')->insert([
            'imageURL' => 'https://gotravel.hr/wp-content/uploads/2017/06/Rio-de-Janeiro-an-amazing-part-in-brazil.jpg',
            'location_id' => '7',
        ]);
        DB::table('image_urls')->insert([
            'imageURL' => 'https://www.wish.hr/wp-content/uploads/2012/01/rio-janeiro.jpg',
            'location_id' => '7',
        ]);
        DB::table('image_urls')->insert([
            'imageURL' => 'https://www.mondotravel.hr/assets/images/0d/0d8a2c_Brazil---Copacabana-and-Ipanema-beaches-in-Rio-De-Janeiro..jpg',
            'location_id' => '7',
        ]);
        DB::table('image_urls')->insert([
            'imageURL' => 'https://images.vinko.me/eyJidWNrZXQiOiJ0cmF2ZWwtYWR2aXNvci1pbWFnZXMiLCJrZXkiOiJ1cGxvYWRzLzIwMTgvMTAvcmlvMy1lMTU0MDQ5ODkzMjY0Ni5qcGcifQ==',
            'location_id' => '7',
        ]);

        DB::table('image_urls')->insert([
            'imageURL' => 'https://d2bgjx2gb489de.cloudfront.net/gbb-blogs/wp-content/uploads/2018/03/06190153/Istanbul-1.jpg',
            'location_id' => '8',
        ]);
        DB::table('image_urls')->insert([
            'imageURL' => 'https://cdn.getyourguide.com/img/tour/5c5c25ee018b0.jpeg/146.jpg',
            'location_id' => '8',
        ]);
        DB::table('image_urls')->insert([
            'imageURL' => 'https://image.dnevnik.hr/media/images/567x350/Feb2020/61837059-istanbul-turska.jpg',
            'location_id' => '8',
        ]);
    }
}
