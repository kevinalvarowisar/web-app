<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama' => fake('id_ID')->name(),
            'alamat' => fake('id_ID')->city(),
            'gender' => fake()->randomElement(['L', 'P']),
            'gaji' => fake()->randomElement([100000, 80000, 250000]),
        ];
    }
}