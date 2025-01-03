@extends('layouts.example')
@section('title', 'Specific Book')
@section('content')
    <div class="container">
        <h1>Specific Book</h1>
        <p><strong>MaSach:</strong> {{ $Sach->MaSach}}</p>
        <p><strong>TenSach:</strong> {{ $Sach->TenSach }}</p>
        <p><strong>TacGia:</strong> {{ $Sach->TacGia }}</p>
        <p><strong>NhaXuatBan:</strong> {{ $Sach->NhaXuatBan}}</p>
        <p><strong>TheLoai:</strong> {{ $Sach->TheLoai }}</p>
        <p><strong>GiaBan:</strong> {{ $Sach->GiaBan }}</p>
        <p><strong>SoLuongTonKho:</strong> {{ $Sach->SoLuongTonKho}}</p>
        <p><strong>NgayXuatBan:</strong> {{$Sach->NgayXuatBan }}</p>
        <p><strong>MoTa:</strong> {{ $Sach->MoTa }}</p>
        <a href="{{ route('Sachs.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection