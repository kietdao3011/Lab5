<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KH>
 */
class KHFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    { $faker = \Faker\Factory::create('vi_VN');
        return [
            'MaKhachHang' => $faker->unique()->bothify('KH###'), // Generates a unique MaKhachHang like KH001
            'HoTen' => $faker->name, // Generates a random name
            'NgaySinh' => $faker->date, // Generates a random date of birth
            'GioiTinh' => $faker->randomElement(['Nam', 'Nu']), // Generates a random gender
            'SDT' => $faker->numerify('09######'), // Generates a random 10-digit phone number
            'DiaChi' => $faker->address, // Generates a random address
            'Email' => $faker->unique()->safeEmail, // Generates a unique email address
        ];
    }
}