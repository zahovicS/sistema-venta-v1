<?php

namespace App\Database\Factories;

use App\Models\Category;

class CategoryFactory extends Factory
{
	public $model = Category::class;

	/**
	 * Create the blueprint for your factory
	 * @return array
	 */
	public function definition(): array
	{
		return [
			'name' => $this->faker->unique()->word(),
		];
	}
}
