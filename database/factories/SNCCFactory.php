<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SNCC>
 */
class SNCCFactory extends Factory
{
    protected $model = \App\Models\SNCC::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {$faker = \Faker\Factory::create('vi_VN');
        return [
            'MaSachNhaCungCap' => $faker->unique()->bothify('SNCC###'), // Generates a unique MaSachNhaCungCap like SNCC001
            'MaNhaCungCap' => \App\Models\NCC::factory(), // Generates a related MaNhaCungCap
            'MaSach' => \App\Models\Sach::factory(), // Generates a related MaSach
            'GiaCungCap' => $faker->numberBetween(10000, 100000), // Generates a random price between 10,000 and 100,000
        ];
    }
}