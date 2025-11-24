<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organization>
 */
class OrganizationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cnpj' => fake()->numerify(),
            'nome' => fake()->name(),
            'cep' => fake()->postcode(),
            'endereco' => fake()->streetName(),
            'cidade' => fake()->city(),
            'estado' => fake()->state(),
            'contato' => fake()->phoneNumber(),
        ];
    }
}
