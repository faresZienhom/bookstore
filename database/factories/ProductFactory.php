<?php

namespace Database\Factories;

use App\Models\categories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'title'=>fake()->title(),
            'descreption'=>fake()->name(),
            'image' => 'front/assets/images/carousel-' . rand(1,3) . '.png',
            'author'=>fake()->name(),
            'page_number'=>fake()->numerify(),
            'price'=>fake()->numerify(),
            'discount'=>fake()->numerify(),
            'quantity'=>fake()->numerify(),
            "product_code" => fake()->numerify(),
            "categories_id" => categories::inRandomOrder()->first()?->id

        ];
    }
}
