<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Produk</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid d-flex justify-content-between">

            <span class="navbar-brand mb-0 h1">UTS Laravel</span>

            <button class="navbar-toggler border rounded" type="button"
                data-bs-toggle="offcanvas" data-bs-target="#sideBarCanvas">
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
            <a href="/" class="d-block text-decoration-none text-secondary">Home</a>
            <a href="/produk" class="d-block text-decoration-none text-secondary">Produk</a>

            <form class="d-flex mt-3">
                <input class="form-control me-2" type="search" placeholder="Search">
                <button class="btn btn-outline-success" type="button">Search</button>
            </form>
        </div>
    </div>

    <!-- Content -->
    <div class="container">

        <!-- JUDUL + TOMBOL -->
        <div class="d-flex justify-content-between align-items-center" style="max-width: 1020px; margin: 0 auto;">
            <h1 class="mb-0">Halaman Produk</h1>
            <a href="/tambah-produk" class="btn btn-primary">Tambah Produk</a>
        </div>

        <!-- TABEL -->
        <div class="table-responsive">
            <table class="table table-striped table-primary table-sm mt-2"
                   style="max-width: 1020px; margin: 0 auto;">
                <thead>
                    <tr>
                        <th>Kode Produk</th>
                        <th>Nama Produk</th>
                        <th>Jenis Produk</th>
                        <th>Harga</th>
                    </tr>
                </thead>

                <tbody>
                    @for ($i = 0; $i < count($produk); $i++)
                        <tr>
                            <td>{{ $produk[$i]['kode'] }}</td>
                            <td>{{ $produk[$i]['nama'] }}</td>
                            <td>{{ $produk[$i]['jenis'] }}</td>
                            <td>{{ $produk[$i]['harga'] }}</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
