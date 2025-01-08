<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    background: linear-gradient(to bottom, #f4e4c1, #d5c3a1, #8b7e74); /* Gradient tông gỗ và giấy cũ */
    background-repeat: no-repeat;
    background-attachment: fixed; /* Nền cố định khi cuộn */
    background-size: cover; /* Phủ kín toàn bộ trang */
    font-family: "Georgia", "Times New Roman", serif; /* Font chữ cổ điển */
    color: #4b3832; /* Màu nâu đậm cho chữ */
}



    footer {
        background-color: #343a40; /* Màu nền */
        color: #ffffff; /* Màu chữ */
        height: 100px; /* Chiều cao cố định */
        text-align: center;
        width: 100%;
        position: fixed; /* Cố định footer */
        bottom: 0;
        left: 0;
        display: flex;
        align-items: center; /* Canh giữa nội dung theo chiều dọc */
        justify-content: center; /* Canh giữa nội dung theo chiều ngang */
        padding: 0; /* Loại bỏ khoảng cách padding */
    }
    footer .container {
        display: flex;
        justify-content: space-between; /* Chia đều khoảng cách giữa các cột */
        align-items: center; /* Canh giữa nội dung trong mỗi cột */
        width: 100%;
        max-width: 1200px;
        padding: 0 15px;
    }
    footer .container .row {
        flex-wrap: nowrap; /* Không cho các cột xuống dòng */
    }
    footer h6, footer p, footer a {
        margin: 0;
        font-size: 0.875rem; /* Giảm kích thước chữ */
    }
    footer a {
        color: #ffc107; /* Màu liên kết */
        text-decoration: none;
    }
    footer a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>
    <header>
        <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/dashboard/">My Library</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/dashboard/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('Sales.create') }}">Borrow</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/CTDH">Row List</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main class="container mt-4">
        @yield('content')
    </main>
    <footer>
    <div class="container">
        <!-- Thông tin liên hệ -->
        <div class="col-md-4 text-start">
            <h6>Liên hệ</h6>
            <p>Email: <a href="mailto:contact@example.com">daokiet3011@gmail.com</a></p>
            <p>Phone: <a href="tel:+84329105659">+84329105659</a></p>
        </div>
        <!-- Địa chỉ -->
        <div class="col-md-4 text-center">
            <h6>Địa chỉ</h6>
            <p>175 Tây Sơn, Đống Đa, Hà Nội</p>
        </div>
        <!-- Mạng xã hội -->
        <div class="col-md-4 text-end">
            <h6>Kết nối</h6>
            <a href="#" class="me-2"><i class="bi bi-facebook"></i></a>
            <a href="#" class="me-2"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
        </div>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>