<?php

use App\TravelPackage;
use Illuminate\Database\Seeder;

class TravelPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TravelPackage::create([
            'title' => 'Gunung Bromo',
            'slug' => \Str::slug('Gunung Bromo'),
            'location_category_id' => '1',
            'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, voluptatem.',
            'featured_event' => 'Trip With Jeep',
            'language' => 'Indonesia',
            'foods' => 'Fast Food',
            'depatured_date' => '2021-10-31 12:12:21',
            'duration' => '3D 2N',
            'type' => 'Open Trip',
            'price' => '90'
        ]);

        TravelPackage::create([
            'title' => 'Danau Toba',
            'slug' => \Str::slug('Danau Toba'),
            'location_category_id' => '2',
            'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, voluptatem.',
            'featured_event' => 'Trip With Boat',
            'language' => 'Indonesia',
            'foods' => 'Traditional Food',
            'depatured_date' => '2021-10-31 12:12:21',
            'duration' => '3D 2N',
            'type' => 'Open Trip',
            'price' => '90'
        ]);
        
        TravelPackage::create([
            'title' => 'Gunung Rinjani',
            'slug' => \Str::slug('Gunung Rinjani'),
            'location_category_id' => '3',
            'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, voluptatem.',
            'featured_event' => 'Trip With Shoes',
            'language' => 'Indonesia',
            'foods' => 'Instant Food',
            'depatured_date' => '2021-10-31 12:12:21',
            'duration' => '3D 2N',
            'type' => 'Open Trip',
            'price' => '90'
        ]);

        TravelPackage::create([
            'title' => 'Pulau Biak',
            'slug' => \Str::slug('Pulau Biak'),
            'location_category_id' => '4',
            'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, voluptatem.',
            'featured_event' => 'Trip With Boat',
            'language' => 'Indonesia',
            'foods' => 'Traditional Food',
            'depatured_date' => '2021-10-31 12:12:21',
            'duration' => '3D 2N',
            'type' => 'Open Trip',
            'price' => '90'
        ]);
    }
}
