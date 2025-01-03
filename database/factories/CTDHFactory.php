<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CTDH>
 */
class CTDHFactory extends Factory
{
    protected $model = \App\Models\CTDH::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {$faker = \Faker\Factory::create('vi_VN');
        return [
            'MaChiTiet' => $faker->unique()->bothify('CTDH###'), // Generates a unique MaChiTiet like CTDH001
            'MaDonHang' => \App\Models\DH::factory(), // Generates a related MaDonHang
            'MaSach' => \App\Models\Sach::factory(), // Generates a related MaSach
            'SoLuongSach' => $faker->numberBetween(1, 100), // Generates a random quantity between 1 and 100
            'GiaBan' => $faker->numberBetween(10000, 100000), // Generates a random price between 10,000 and 100,000
        ];
    }
}