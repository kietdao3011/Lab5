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
        background: linear-gradient(to bottom, #d9a7c7, #fffcdc); /* Gradient cho toàn trang */
        background-repeat: no-repeat;
        background-attachment: fixed; /* Nền cố định khi cuộn */
        background-size: cover; /* Phủ kín toàn bộ trang */
        font-family: Arial, sans-serif; /* Font chữ nhẹ nhàng */
        color: #333; /* Màu chữ mặc định */
    }

    footer {
        background: linear-gradient(45deg, #6a11cb, #2575fc); /* Gradient cho footer */
        color: #ffffff;
        height: 100px; /* Chiều cao cố định */
        text-align: center;
        width: 100%;
        position: fixed; /* Cố định footer */
        bottom: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0;
        box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.2);
    }

    footer .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        max-width: 1200px;
        padding: 0 15px;
    }

    footer h6, footer p, footer a {
        margin: 0;
        font-size: 0.875rem;
    }

    footer a {
        color: #ffc107;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    footer a:hover {
        color: #ffffff;
        text-decoration: underline;
    }
</style>



</head>

<body>
    <header>
        <nav class="navbar bg-primary" data-bs-theme="dark">
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
                            <a class="nav-link" href="/Sachs/create">Add Book</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">Search</button>
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