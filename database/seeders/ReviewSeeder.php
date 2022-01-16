<?php

namespace Database\Seeders;

use App\Models\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Review::factory(300)->create();
    }
}
