<?php

namespace App\Database\Factories;

use App\Models\Client;
use Faker\Provider\es_PE\Company;
use Faker\Provider\es_PE\Person;

class ClientFactory extends Factory
{
	public $model = Client::class;

	/**
	 * Create the blueprint for your factory
	 * @return array
	 */
	public function definition(): array
	{
        $fakerPeru = new Person($this->faker);
        $fakerPeruCompany = new Company($this->faker);
        $documentType = $this->faker->randomElement([1,2]);
        $numberDocument = $documentType == 1 ? $fakerPeru->dni() : $fakerPeruCompany->ruc($this->faker->randomElement([true,false]));
		return [
			'document_type_id' => $documentType,
			'document_number' => $numberDocument,
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->unique()->e164PhoneNumber(),
            'telephone' => $this->faker->unique()->e164PhoneNumber(),
            'address' => $this->faker->streetAddress(),
		];
	}
}
