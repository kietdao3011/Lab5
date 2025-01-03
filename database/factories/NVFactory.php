<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NV>
 */
class NVFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    { $faker = \Faker\Factory::create('vi_VN');
        return [
            'MaNhanVien' => $faker->unique()->bothify('NV###'), // Generates a unique MaNhanVien like NV001
            'HoTen' => $faker->name, // Generates a random name
            'NgaySinh' => $faker->date, // Generates a random date of birth
            'GioiTinh' => $faker->randomElement(['Nam', 'Nu']), // Generates a random gender
            'ChucVu' => $faker->jobTitle, // Generates a random job title
            'SDT' => $faker->numerify('0########'), // Generates a random 10-digit phone number
            'Email' => $faker->unique()->safeEmail, // Generates a unique email address
            'LichLamViec' => $faker->sentence(3), // Generates a random work schedule
        ];
    }
}