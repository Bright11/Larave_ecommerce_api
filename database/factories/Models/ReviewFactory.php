<?php

namespace Database\Factories\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Models\product;
use App\Models\Models\Review;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model =Review::class;
    public function definition()
    {
        return [
            //
           'product_id'=> function(){
               return product::all()->random();
           },
           'customer'=>$this->faker->name,
           'review'=>$this->faker->paragraph,
           'star'=>$this->faker->numberBetween(1,5)
        ];
    }
}
