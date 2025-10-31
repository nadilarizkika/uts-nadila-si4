<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/produk', function () {

    $produk = [
        ["kode" => "BRG001", "nama" => "Pena", "jenis" => "Alat tulis", "harga" => 20000],
        ["kode" => "BRG002", "nama" => "Buku", "jenis" => "Alat tulis", "harga" => 15000],
    ];

    return view('produk', ['produk' => $produk]);
});