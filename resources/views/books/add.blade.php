@extends('layouts.example')
@section('title', 'Add Book')
@section('content')
<div class="container">
    <h1>Add Book</h1>
    <form action="{{ route('Sachs.store') }}" method="POST">
        @csrf
        <div class="form-group">
    <label for="MaSach">MaSach:</label>
    <input type="text" class="form-control" id="MaSach" name="MaSach" required>
</div>
<div class="form-group">
    <label for="TenSach">TenSach:</label>
    <input type="text" class="form-control" id="TenSach" name="TenSach" required>
</div>
<div class="form-group">
    <label for="TacGia">TacGia:</label>
    <textarea class="form-control" id="TacGia" name="TacGia" required></textarea>
</div>
<div class="form-group">
    <label for="NhaXuatBan">NhaXuatBan:</label>
    <input type="text" class="form-control" id="NhaXuatBan" name="NhaXuatBan" required>
</div>
<div class="form-group">
    <label for="TheLoai">TheLoai:</label>
    <textarea class="form-control" id="TheLoai" name="TheLoai" required></textarea>
</div>
<div class="form-group">
    <label for="GiaBan">GiaBan:</label>
    <input type="number" class="form-control" id="GiaBan" name="GiaBan" required>
</div>
<div class="form-group">
    <label for="SoLuongTonKho">SoLuongTonKho:</label>
    <input type="number" class="form-control" id="SoLuongTonKho" name="SoLuongTonKho" required>
</div>
<div class="form-group">
    <label for="NgayXuatBan">NgayXuatBan:</label>
    <input type="date" class="form-control" id="NgayXuatBan" name="NgayXuatBan" required>
</div>
<div class="form-group">
    <label for="MoTa">MoTa:</label>
    <textarea class="form-control" id="MoTa" name="MoTa" required></textarea>
</div>
        <button type="submit" class="btn btn-danger">Add</button>
    </form>
</div>

@endsection