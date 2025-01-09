@extends('layouts.example2')
@section('title', 'Orders by Customer')
@section('content')
<div class="container mt-5">
    <h2 class="text-center text-uppercase text-danger mb-4">Order: {{ $maDonHang }}</h2>

    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Order ID</th>
                <th scope="col">Date</th>
                <th scope="col">Customer ID</th>
                <th scope="col">Total Price</th>
                <th scope="col">TrangThai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <td>{{ $order->MaDonHang }}</td>
                <td>{{ $order->NgayDatHang }}</td>
                <td>{{ $order->MaKhachHang}}</td>
                <td>{{ $order->TongTien }}</td>
                <td>
                    <!-- Nút Xem Trạng Thái -->
                    <button class="btn btn-info" onclick="xemTrangThai('{{ $order->MaDonHang }}')">
                        Xem trạng thái
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
      <!-- Modal hiển thị trạng thái -->
      <div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="statusModalLabel">Trạng thái đơn hàng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="statusContent">
                    <!-- Trạng thái sẽ được hiển thị ở đây -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('Sales.index') }}" class="btn btn-secondary mt-3">Back</a>
</div>
<script>
   // Hàm để lấy trạng thái đơn hàng
function xemTrangThai(MaDonHang) {
    fetch('/orders/status/' + MaDonHang)
        .then(response => response.json())  // Đảm bảo nhận được dữ liệu JSON
        .then(data => {
            if (data.TrangThai) {
                alert("Trạng thái đơn hàng: " + data.TrangThai);
            } else {
                alert("Không có trạng thái cho đơn hàng này.");
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert("Đã xảy ra lỗi khi lấy trạng thái đơn hàng.");
        });
}

</script>
@endsection
