<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NCC>
 */
class NCCFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    { $faker = \Faker\Factory::create('vi_VN');
        return [
            'MaNhaCungCap' => $faker->unique()->bothify('NCC###'), // Generates a unique MaNhaCungCap like NCC001
            'TenNhaCungCap' => $faker->company, // Generates a random company name
            'SDT' => $faker->numerify('03#####'), // Generates a random 10-digit phone number
            'Email' => $faker->unique()->safeEmail, // Generates a unique email address
            'DiaChi' => $faker->address, // Generates a random address
        ];
    }
}