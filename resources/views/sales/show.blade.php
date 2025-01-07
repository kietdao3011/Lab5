@extends('layouts.example2')
@section('title', 'Specific Book')
@section('content')
    <div class="container">
        <h1>Specific Book</h1>
        <p><strong>MaSach:</strong> {{ $Sale->MaSach}}</p>
        <p><strong>TenSach:</strong> {{ $Sale->TenSach }}</p>
        <p><strong>TacGia:</strong> {{ $Sale->TacGia }}</p>
        <p><strong>NhaXuatBan:</strong> {{ $Sale->NhaXuatBan}}</p>
        <p><strong>TheLoai:</strong> {{ $Sale->TheLoai }}</p>
        <p><strong>GiaBan:</strong> {{ $Sale->GiaBan }}</p>
        <p><strong>SoLuongTonKho:</strong> {{ $Sale->SoLuongTonKho}}</p>
        <p><strong>NgayXuatBan:</strong> {{$Sale->NgayXuatBan }}</p>
        <p><strong>MoTa:</strong> {{ $Sale->MoTa }}</p>
        <a href="{{ route('Sales.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection