<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kho>
 */
class KhoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    { $faker = \Faker\Factory::create('vi_VN');
        return [
            'MaKho' => $faker->unique()->bothify('KHO###'), // Generates a unique MaKho like KHO001
            'ViTriKho' => $faker->address, // Generates a random address for ViTriKho
            'SoLuongTong' => $faker->numberBetween(1, 1000), // Generates a random total quantity between 1 and 1000
        ];
    }
}