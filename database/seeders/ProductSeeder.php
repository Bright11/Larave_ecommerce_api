<?php

namespace Database\Seeders;

use App\Models\Models\product;
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
        //
       // product::factory(50)->create();
       \App\Models\Models\product::factory(50)->create();
    }
}
