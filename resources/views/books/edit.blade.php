@extends('layouts.example')
@section('title', 'Edit Book')
@section('content')
<div class="container mt-5">
    <h2 class="text-center text-uppercase text-danger mb-4">Edit Book</h2>
    <form action="{{ route('Sachs.update', $Sach->MaSach) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="MaSach">MaSach:</label>
            <input type="text" class="form-control" id="MaSach" name="MaSach" value="{{ $Sach->MaSach }}" required>
        </div>
        <div class="form-group">
            <label for="TenSach">TenSach:</label>
            <input type="text" class="form-control" id="TenSach" name="TenSach" value="{{ $Sach->TenSach }}" required>
        </div>
        <div class="form-group">
            <label for="TacGia">TacGia:</label>
            <textarea class="form-control" id="TacGia" name="TacGia" required>{{ $Sach->TacGia }}</textarea>
        </div>
        <div class="form-group">
            <label for="NhaXuatBan">NhaXuatBan:</label>
            <textarea class="form-control" id="NhaXuatBan" name="NhaXuatBan" required>{{ $Sach->NhaXuatBan }}</textarea>
        </div>
        <div class="form-group">
            <label for="TheLoai">TheLoai:</label>
            <textarea class="form-control" id="TheLoai" name="TheLoai" required>{{ $Sach->TheLoai }}</textarea>
        </div>
        <div class="form-group">
            <label for="GiaBan">GiaBan:</label>
            <input type="number" class="form-control" id="GiaBan" name="GiaBan" value="{{ $Sach->GiaBan }}" required>
        </div>
        <div class="form-group">
            <label for="SoLuongTonKho">SoLuongTonKho:</label>
            <input type="number" class="form-control" id="SoLuongTonKho" name="SoLuongTonKho" value="{{ $Sach->SoLuongTonKho }}" required>
        </div>
        <div class="form-group">
            <label for="NgayXuatBan">NgayXuatBan:</label>
            <input type="date" class="form-control" id="NgayXuatBan" name="NgayXuatBan" value="{{ $Sach->NgayXuatBan }}" required>
        </div>
        <div class="form-group">
            <label for="MoTa">MoTa:</label>
            <textarea class="form-control" id="MoTa" name="MoTa" required>{{ $Sach->MoTa }}</textarea>
        </div>
        <button type="submit" class="btn btn-danger">Update</button>
    </form>
</div>
@endsection