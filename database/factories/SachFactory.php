<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sach>
 */
class SachFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('vi_VN');
        $theLoaiList = ['Khoa Học', 'Văn Học', 'Lịch Sử', 'Kinh Tế', 'Tiểu Thuyết'];
        $bookTitles = [
            'Cuộc Sống Tươi Đẹp',
            'Chuyến Đi Bí Ẩn',
            'Mùa Hè Kỳ Lạ',
            'Sự Tích Hoa Mai',
            'Hành Trình Của Những Ước Mơ',
            'Lời Hứa Từ Bầu Trời',
            'Bí Ẩn Phía Sau Cánh Cửa',
            'Cánh Đồng Hoa Mơ',
            'Vương Quốc Tuyết',
            'Ánh Sáng Cuối Cùng',
            'Làng Cỏ Dại',
            'Cuộc Đời Thầm Lặng',
            'Cô Gái Mắt Biếc',
            'Bí Mật Trong Màn Đêm',
            'Tình Yêu Đã Mất',
            'Làn Sóng Cảm Xúc',
            'Dư Âm Tình Yêu',
            'Khi Chúng Ta Vỡ Lẽ',
            'Lãng Quên Trong Mưa',
            'Những Điều Bí Ẩn',
            'Tình Thư Từ Quá Khứ',
            'Hương Hoa Cổ Tích',
            'Cái Chết Của Thời Gian',
            'Những Ngày Bất Tận',
            'Cuộc Chạy Trốn Vĩ Đại',
            'Giấc Mơ Hư Ảo',
            'Bức Tranh Tối Mờ',
            'Những Đoạn Đường Chưa Đi',
            'Hồi Ức Xưa Cũ',
            'Con Đường Tự Do',
            'Hành Trình Qua Những Thời Khắc',
            'Khám Phá Kỳ Quái',
            'Mảnh Ghép Cuộc Sống'
        ];
        
        return [
            'MaSach' => $faker->unique()->bothify('MS###'), // Generates a unique MaSach like MS001
            'TenSach' => $faker->randomElement($bookTitles), // Generates a book title with 3 words
            'TacGia' =>  $faker->name, // Generates a random author name
            'NhaXuatBan' =>  $faker->company, // Generates a random publisher name
            'TheLoai' => $faker->randomElement($theLoaiList), // Chọn thể loại từ mảng có sẵn
            'GiaBan' =>  $faker->numberBetween(10000, 100000), // Generates a random price between 10,000 and 100,000
            'SoLuongTonKho' =>  $faker->numberBetween(1, 100), // Generates a random stock quantity between 1 and 100
            'NgayXuatBan' =>  $faker->date, // Generates a random date
            'MoTa' =>  $faker->paragraph, // Generates a random paragraph for description
        ];
    }
}