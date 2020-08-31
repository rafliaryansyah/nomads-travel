<?php

use App\Gallery;
use Illuminate\Database\Seeder;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gallery::create([
            'travel_packages_id' => '1',
            'image' => 'assets/gallery/zEC541pWljLo3A4nMprYlWwVNxMhxB0452NtsrbE.jpeg'
        ]);

        Gallery::create([
            'travel_packages_id' => '2',
            'image' => 'assets/gallery/qXwfuQPg3tEJChA78CW95LNMybI1bLelgquTmzj8.jpeg'
        ]);

        Gallery::create([
            'travel_packages_id' => '3',
            'image' => 'assets/gallery/M04wAOFcyaNdvf5vL5YjPKeHRNFhz8tmnFx8MCOy.jpeg'
        ]);

        Gallery::create([
            'travel_packages_id' => '4',
            'image' => 'assets/gallery/D9WsBswccBsVubuw8mzzTxeM7hjZrHjf0GKNoJcM.jpeg'
        ]);
    }
}
