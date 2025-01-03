<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DH>
 */
class DHFactory extends Factory
{
    protected $model = \App\Models\DH::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {$faker = \Faker\Factory::create('vi_VN');
        return [
            'MaDonHang' => $this->faker->unique()->bothify('DH###'), // Generates a unique MaDonHang like DH001
            'MaKhachHang' => \App\Models\KH::factory(), // Generates a related MaKhachHang
            'MaNhanVien' => \App\Models\NV::factory(), // Generates a related MaNhanVien
            'NgayDatHang' => $this->faker->date, // Generates a random date
            'TongTien' => $this->faker->numberBetween(100000, 1000000), // Generates a random total amount between 100,000 and 1,000,000
            'TrangThai' => $this->faker->randomElement(['Pending', 'Completed', 'Cancelled']), // Generates a random status
        ];
    }
}