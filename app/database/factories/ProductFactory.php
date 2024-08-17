<?php

namespace App\Database\Factories;

use App\Models\Product;

class ProductFactory extends Factory
{
	public $model = Product::class;

	/**
	 * Create the blueprint for your factory
	 * @return array
	 */
	public function definition(): array
	{
		return [
            'category_id' => $this->faker->numberBetween(1, 30),
            'brand_id' => $this->faker->numberBetween(1, 20),
            'code' => $this->faker->unique()->ean13(),
            'description' => $this->faker->unique()->word(),
		];
	}
}
