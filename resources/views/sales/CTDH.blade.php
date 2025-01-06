@extends('layouts.example2')
@section('title', 'Book List')
@section('content')
<div class="container mt-5">
    <h2 class="text-center text-uppercase text-danger mb-4">Row List</h2>
    @if (session('success'))
    <div class="alert alert-success mb-4">{{ session('success') }}</div>
    @endif
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">MaChiTiet</th>
                <th scope="col">MaDonHang</th>
                <th scope="col">MaSach</th>
                <th scope="col">SoLuong</th>
                <th scope="col">GiaBan</th>
                <th scope="col">TongGia</th>
              
            </tr>
        </thead>
        <tbody>
            @foreach ($Sales as $Sale)
            <tr>
                <td>{{ $Sale->MaChiTiet }}</td>
                <td>{{ $Sale->MaDonHang }}</td>
                <td>{{ $Sale->MaSach }}</td>
                <td>{{ $Sale->SoLuongSach }}</td>
                <td>{{ $Sale->GiaBan }}</td>
                <td>{{ $Sale->TongGia }}</td>
                <td class="text-center" style="white-space:nowrap">
                
                </td>
            </tr>
            
            @endforeach
            
        </tbody>
        
    </table>
    <a href="{{ route('Sales.index') }}" class="btn btn-secondary">Back</a>

</div>
@endsection