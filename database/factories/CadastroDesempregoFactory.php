<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CadastroDesempregoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'phone' => $this->faker->phoneNumber(),
            'birthdate' => $this->faker->birthdate,
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'region' => $this->faker->region,
            'cep' => $this->faker->cep,
            'education' => $this->faker->education,
            'family_income' => $this->faker->family_income,
            'course' => $this->faker->course,
            'timestamps' => $this->faker->timestamps,
        ];
    }
}
