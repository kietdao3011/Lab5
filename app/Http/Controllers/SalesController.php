<?php

namespace App\Http\Controllers;

use App\Models\CTDH;
use App\Models\Sach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function viewSupplier($MaSach)
{
    // Thực hiện truy vấn dữ liệu nguồn gốc từ stored procedure
    $supplierInfo = DB::select('SELECT * FROM dbo.TTSNhaCungCap(?)', [$MaSach]);

    // Trả về JSON để hiển thị bằng JavaScript (hoặc tạo view nếu cần)
    if ($supplierInfo) {
        return response()->json($supplierInfo);
    } else {
        return response()->json(['error' => 'Không tìm thấy thông tin nguồn gốc'], 404);
    }
}

    public function getOrdersByCustomer($maDonHang)
    {
        // Gọi stored procedure
        $orders = DB::select('EXEC dbo.GetDonHangByMaDonHang @MaDonHang = ?', [$maDonHang]);
    
        // Trả về view hiển thị danh sách đơn hàng
        return view('sales.orders_by_customer', compact('orders', 'maDonHang'));
    }    public function index()
    {
        $Sales = Sach::paginate(7);
        
        return view('sales.index', compact('Sales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        return view('sales.confirm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'MaChiTiet' => 'required',
        'MaDonHang' => 'required',
        'MaSach' => 'required',
        'SoLuongSach' => 'required',
        'GiaBan' => 'required',
        'TongGia' => 'required',
            
        ]);
        $SachData = $request->all();
        CTDH::create($SachData);
    
        return redirect()->route('Sales.index')->with('success', 'Borrow successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $MaSach)
    {
        $Sale = Sach::findOrFail($MaSach);
        return view('sales.show', compact(['Sale']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $MaChiTiet)
    {
        $Sales = CTDH::findOrFail($MaChiTiet);
        $Sales->delete();
        return redirect()->route('Sales.index')->with('success','Return Successfully');
    }

   

   
}
