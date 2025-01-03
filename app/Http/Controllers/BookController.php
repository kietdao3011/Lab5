<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sach;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
       $Sachs = Sach::all();
        return view('books.index', compact('Sachs'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { $request->validate([
        'MaSach' => 'required',
        'TenSach' => 'required',
        'TacGia' => 'required',
        'NhaXuatBan' => 'required',
        'TheLoai' => 'required',
        'GiaBan' => 'required',
        'SoLuongTonKho'=> 'required',
        'NgayXuatBan' => 'required',
        'MoTa'=> 'required'
        
    ]);
    $SachData = $request->all();
    Sach::create($SachData);

    return redirect()->route('Sachs.index')->with('success', 'Book created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $MaSach)
    {
        $Sach = Sach::findOrFail($MaSach);
        return view('books.show', compact(['Sach']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $MaSach)
    {
        $Sach = Sach::findOrFail($MaSach);
        return view('books.edit', compact(['Sach']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $MaSach)
    {
        $request->validate([
           'MaSach' => 'required',
        'TenSach' => 'required',
        'TacGia' => 'required',
        'NhaXuatBan' => 'required',
        'TheLoai' => 'required',
        'GiaBan' => 'required',
        'SoLuongTonKho'=> 'required',
        'NgayXuatBan' => 'required',
        'MoTa'=> 'required'

        ]);  
        $SachData = $request->all();
        $Sach = Sach::findOrFail($MaSach);
        $Sach->update($SachData);

        return redirect()->route('Sachs.index')->with('success', 'Task updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $MaSach)
    {
        $Sachs = Sach::findOrFail($MaSach);
        $Sachs->delete();
        return redirect()->route('books.index')->with('success','Deleted Successfully');
    }
}