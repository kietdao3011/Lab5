<?php

namespace App\Http\Controllers;

use App\Models\CTDH;
use App\Models\Sach;
use Illuminate\Http\Request;


class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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
