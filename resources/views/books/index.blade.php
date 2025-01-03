
@extends('layouts.example')
@section('title', 'Book list')
@section('content')
<h2 class="text-center text-uppercase text-danger">Book List</h2>
@if (session('success'))
<div class="text-success mb-2">{{session('success')}}</div>
@endif
<table class="table">
    <thead>
        <tr>
       
            <th scope="col">MaSach</th>
            <th scope="col">TenSach</th>
            <th scope="col">TacGia</th>
            <th scope="col">NhaXuatBan</th>
            <th scope="col">TheLoai</th>
            <th scope="col">HanhDong</th>
        </tr>
    </thead>
    <tbody>
  

        @foreach ($Sachs as $Sach)
        <tr>
        
            <td>{{$Sach->MaSach}}</td>
            <td>{{$Sach->TenSach}}</td>
            <td>{{$Sach->TacGia}}</td>
            <td>{{$Sach->NhaXuatBan}}</td>
            <td>{{$Sach->TheLoai}}</td>
            <td class="" style="white-space:nowrap">
                <a class="d-inline" href="/Sachs/{{$Sach->MaSach}}"><i class="bi bi-eye-fill me-1"></i></a>
                <a class="d-inline" href="/Sachs/{{$Sach->MaSach}}/edit"><i class="bi bi-pencil-fill me-1"></i></a>

                <button type="button" class="btn p-0 text-danger " data-bs-toggle="modal" data-bs-target="#deleteModal" style="border: none; background: none;">
                <i class="bi bi-trash-fill"></i>
             </button>
             <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h1 class="modal-title fs-5" id="exampleModalLabel">Delete this book</h1>
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                             Are you sure you want to delete this book?
                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                             <form action="{{ route('Sachs.destroy', $Sach->MaSach) }}" method="POST" class="d-inline">
                                 @csrf
                                 @method('DELETE')
                                 <button type="submit" class="btn btn-primary">Delete</button>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>

         </td>
     </tr>
        @endforeach
    </tbody>
</table>


@endsection