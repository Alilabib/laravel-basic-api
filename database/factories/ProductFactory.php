<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name'=>$this->faker->word(),
            'category_id'=> Category::inRandomOrder()->first()->id,
            'desc'=>$this->faker->paragraph,
            'price'=>rand(1000,9999)
        ];
    }
}
