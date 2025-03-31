<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
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
            'title' => fake()->name(),
            'slug' => fake()->slug(),
            'description' => fake()->text(),
            'content' => fake()->text(),
            'price' => fake()->randomFloat(2, 1, 1000),
            'sale_price' => fake()->randomFloat(),
            'thumbnail' => fake()->imageUrl(),
            'status' => 1,
            'category_id' => fake()->randomElement(Category::all()->pluck('id')->toArray()),
        ];
    }
}
