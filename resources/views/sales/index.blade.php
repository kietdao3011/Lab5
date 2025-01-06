@extends('layouts.example2')
@section('title', 'Book List')
@section('content')
<div class="container mt-5">
    <h2 class="text-center text-uppercase text-danger mb-4">Book List</h2>
    @if (session('success'))
    <div class="alert alert-success mb-4">{{ session('success') }}</div>
    @endif
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">MaSach</th>
                <th scope="col">TenSach</th>
                <th scope="col">TacGia</th>
                <th scope="col">NhaXuatBan</th>
                <th scope="col">TheLoai</th>
              
            </tr>
        </thead>
        <tbody>
            @foreach ($Sales as $Sale)
            <tr>
                <td>{{ $Sale->MaSach }}</td>
                <td>{{ $Sale->TenSach }}</td>
                <td>{{ $Sale->TacGia }}</td>
                <td>{{ $Sale->NhaXuatBan }}</td>
                <td>{{ $Sale->TheLoai }}</td>
                <td class="text-center" style="white-space:nowrap">
                
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection