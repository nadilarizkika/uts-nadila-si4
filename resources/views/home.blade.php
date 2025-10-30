<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid d-flex justify-content-between">

            <!-- kiri -->
            <span class="navbar-brand mb-0 h1">UTS Laravel</span>

            <!-- kanan (tombol sidebar) -->
            <button class="navbar-toggler border rounded" type="button"
                data-bs-toggle="offcanvas" data-bs-target="#sideBarCanvas">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Sidebar Offcanvas (kosong) -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="sideBarCanvas">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">UTS Laravel</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>

        <div class="offcanvas-body">
            <!-- Menu -->
            <p>Home</p>
            <p>Produk</p>

            <!-- Search -->
            <form class="d-flex mt-3">
                <input class="form-control me-2" type="search" placeholder="Search">
                <button class="btn btn-outline-success" type="button">Search</button>
            </form>
        </div>
    </div>

    <!-- Konten -->
    <div class="container-fluid bg-light py-0">
        <h1 style="margin-left: 120px; margin-top: 0px">Halaman Home</h1>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
