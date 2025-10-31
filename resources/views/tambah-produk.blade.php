<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Produk</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid d-flex justify-content-between">
            <span class="navbar-brand mb-0 h1">UTS Laravel</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sideBarCanvas">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="sideBarCanvas">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">UTS Laravel</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>

        <div class="offcanvas-body">
            <a href="/" class="d-block text-decoration-none text-dark mb-2">Home</a>
            <a href="/produk" class="d-block text-decoration-none text-dark">Produk</a>

            <form class="d-flex mt-3">
                <input class="form-control me-2" type="search" placeholder="Search">
                <button class="btn btn-outline-success" type="button">Search</button>
            </form>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="container">
        <div style="max-width: 1020px; margin: 0 auto;">
            <h2 class="mb-2">Form Tambah Produk</h2>

            <form action="/produk/store" method="POST">
                @csrf

                <div class="row mb-0">
                    <div class="col-md-4">
                        <label class="form-label mb-0">Kode Produk</label>
                        <input type="text" name="kode" class="form-control" placeholder="Input Kode Produk" required>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label mb-0">Nama Produk</label>
                        <input type="text" name="nama" class="form-control" placeholder="Input Nama Produk" required>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label mb-0">Jenis Produk</label>
                        <input type="text" name="jenis" class="form-control" placeholder="Input Jenis Produk" required>
                    </div>
                </div>

                <div class="row align-items-end">
                    <div class="col-md-8 mb-0">
                        <label class="form-label mb-0">Harga</label>
                        <input type="number" name="harga" class="form-control" placeholder="Input Harga" required>
                    </div>

                    <div class="col-md-4 mb-0">
                        <button type="submit" class="btn btn-success w-100 mt-2">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
