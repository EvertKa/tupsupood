<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $data = collect([
        [
            'name' => 'Pablo',
            'image' => '/storage/app/public/palbo',
            'description' => 'Kange 30mg tups',
            'price' => 5,
        ],
        [
            'name' => 'Grant',
            'image' => '',
            'description' => 'Kange 20mg tups',
            'price' => 4.50,
        ],
        [
            'name' => 'Tups',
            'image' => '',
            'description' => 'Kange 25mg tups',
            'price' => 5.50,
        ],
        [
            'name' => 'Fox',
            'image' => '',
            'description' => 'Kange 30mg tups',
            'price' => 5,
        ],
        [
            'name' => 'Rämmar',
            'image' => '',
            'description' => 'Kange 30mg tups',
            'price' => 5,
        ],
        [
            'name' => 'Ace',
            'image' => '',
            'description' => 'Kange 30mg tups',
            'price' => 5,
        ],
        [
            'name' => 'Killa',
            'image' => '',
            'description' => 'Kange 30mg tups',
            'price' => 5,
        ],
        [
            'name' => 'Supreme',
            'image' => '',
            'description' => 'Kange 30mg tups',
            'price' => 5,
        ],
        [
            'name' => 'R42',
            'image' => '',
            'description' => 'Kange 30mg tups',
            'price' => 5,
        ],
        [
            'name' => 'Siber',
            'image' => '',
            'description' => 'Kange 45mg tups',
            'price' => 5,
        ],
    ]);

    $data->each(function($entry){
        Product::create($entry);
    });
    }
}
