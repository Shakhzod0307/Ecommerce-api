<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Stichoza\GoogleTranslate\GoogleTranslate;
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
            'category_id'=>rand(1,3),
            'name'=>[
                'uz'=> fake()->sentences(3),
                'ru'=>fake()->sentences(3),
            ],
            'price'=>rand(1000,10000),
            'description'=>[
                'uz'=>fake()->sentences(3),
                'ru'=>fake()->sentences(3),
            ],
        ];
    }
}
