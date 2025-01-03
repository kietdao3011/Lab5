<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SK>
 */
class SKFactory extends Factory
{
    protected $model = \App\Models\SK::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {$faker = \Faker\Factory::create('vi_VN');
        return [
            'MaSachKho' => $faker->unique()->bothify('SK###'), // Generates a unique MaSachKho like SK001
            'MaKho' => \App\Models\Kho::factory(), // Generates a related MaKho
            'MaSach' => \App\Models\Sach::factory(), // Generates a related MaSach
            'SoLuongTonSachKho' => $faker->numberBetween(1, 1000), // Generates a random total quantity between 1 and 1000
        ];
    }
}