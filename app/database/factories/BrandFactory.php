<?php

namespace App\Database\Factories;

use App\Models\Brand;

class BrandFactory extends Factory
{
	public $model = Brand::class;

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
