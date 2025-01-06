@extends('layouts.example2')
@section('title', 'Confirm Borrow')
@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Confirm Borrow</h1>
        <form action="{{ route('Sales.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="MaChiTiet">MaChiTiet:</label>
                <input type="text" class="form-control" id="MaChiTiet" name="MaChiTiet" required>
            </div>
            <div class="form-group">
                <label for="MaDonHang">MaDonHang:</label>
                <input type="text" class="form-control" id="MaDonHang" name="MaDonHang" required>
            </div>
            <div class="form-group">
                <label for="MaSach">MaSach:</label>
                <input type="text" class="form-control" id="MaSach" name="MaSach"  required>
            </div>
            <div class="form-group">
                <label for="GiaBan">GiaBan:</label>
                <input type="number" class="form-control" id="GiaBan" name="GiaBan"  required>
            </div>
            <div class="form-group">
                <label for="SoLuongSach">SoLuongSach:</label>
                <input type="number" class="form-control" id="SoLuongSach" name="SoLuongSach" min="1" required>
            </div>
            <div class="form-group">
                <label for="TongGia">TongGia:</label>
                <input type="text" class="form-control" id="TongGia" name="TongGia" value="0" readonly>
            </div>
            <button type="submit" class="btn btn-primary">Confirm Borrow</button>
            <a href="{{ route('Sales.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    <script>
        document.getElementById('SoLuongSach').addEventListener('input', function() {
            var soLuong = this.value;
            var giaBan = document.getElementById('GiaBan').value;
            var tongGia = soLuong * giaBan;
            document.getElementById('TongGia').value = tongGia;
        });
    </script>
@endsection