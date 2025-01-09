<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sach;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Hiển thị trạng thái của đơn hàng
     */
    
    public function showOrderStatus($MaDonHang)
    {
        // Truy vấn trạng thái của đơn hàng
        $trangThai = DB::select('SELECT dbo.TrangThaiDonHang(?) AS TrangThai', [$MaDonHang]);

         // Kiểm tra xem trạng thái có tồn tại không và trả về response dạng JSON
    if ($trangThai) {
        return response()->json(['TrangThai' => $trangThai[0]->TrangThai]);
    } else {
        return response()->json(['error' => 'Không tìm thấy trạng thái'], 404);
    }
    }
    public function getOrderStatus($MaDonHang)
{
    // Truy vấn trạng thái đơn hàng
    $trangThai = DB::select('SELECT dbo.TrangThaiDonHang(?) AS TrangThai', [$MaDonHang]);

    // Trả về trạng thái dưới dạng JSON
    return response()->json($trangThai[0]);
}

}


