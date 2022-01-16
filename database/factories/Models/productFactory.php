<?php

namespace Database\Factories\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Models\product;
class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = product::class;
    public function definition()
    {
        return [
            //working with fake data
            'name'=>$this->faker->word,
            'detail'=>$this->faker->paragraph,
            'price'=>$this->faker->numberBetween(100,1000),
            'stock'=>$this->faker->randomDigit,
            'discount'=>$this->faker->numberBetween(2,30)
        ];
    }
}
