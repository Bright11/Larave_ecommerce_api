<?php

namespace Database\Seeders;

use App\Models\Models\Review;
use App\Models\Models\product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //\App\Models\Product::factory(50)->create();
       // product::factory(50)->create();
        //Review::factory(300)->create();
        $this->call(ProductSeeder::class);
        $this->call(ReviewSeeder::class);

    }
}
