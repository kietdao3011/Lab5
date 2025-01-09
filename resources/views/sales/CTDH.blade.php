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
                <th scope="col">TraSach</th>
              
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
                <button type="button" class="btn p-0 text-danger " data-bs-toggle="modal" data-bs-target="#deleteModal" style="border: none; background: none;">
                Return
             </button>
             <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h1 class="modal-title fs-5" id="exampleModalLabel">Return this book</h1>
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                             Are you sure you want to return this book?
                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                             <form action="{{ route('Sales.destroy', $Sale->MaChiTiet) }}" method="POST" class="d-inline">
                                 @csrf
                                 @method('DELETE')
                                 <button type="submit" class="btn btn-primary">Return</button>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
                

                    <!-- Nút View Orders -->
                    <a href="{{ route('Sales.orders_by_customer', $Sale->MaDonHang) }}" class="btn btn-primary ms-2">
                        View Orders
                    </a>
                </td>
            </tr>
            
            @endforeach
            
        </tbody>
        
    </table>
    <a href="{{ route('Sales.index') }}" class="btn btn-secondary">Back</a>

</div>
@endsection