<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda',[
        "salam" => "<b>Selamat Datang </b>",
        "nama" => "Lukman"
    ]);
});

Route::get('/profil', function () {
    return view('tentang', [
        'roles'=>[
            [
                'posisi'=> 'CEO',
                'tugas'=> 'Mengelola Perusahaan'
            ],
            [
                'posisi'=> 'CTO',
                'tugas'=> 'Mengembangkan Aplikasi'
            ]
        ]
    ]);
});

Route::get('/hubungi', function () {
    return view('kontak');
});

Route::get('/produk', function () {

    $products = [
        ['id' => 1, 'nama' => 'nasi goreng', 'harga' => 15000],
        ['id' => 2, 'nama' => 'bakso', 'harga' => 20000],
        ['id' => 3, 'nama' => 'mie ayam', 'harga' => 16000],
        ['id' => 4, 'nama' => 'sate', 'harga' => 25000],
    ];

    return view('produk', compact('products'));
});

Route::get('/produk/{id}', function ($id) {

    $products = [
        ['id' => 1, 'nama' => 'nasi goreng', 'harga' => 15000],
        ['id' => 2, 'nama' => 'bakso', 'harga' => 20000],
        ['id' => 3, 'nama' => 'mie ayam', 'harga' => 16000],
        ['id' => 4, 'nama' => 'sate', 'harga' => 25000],
    ];

    $product = collect($products)->firstWhere('id', $id);

    if (!$product) {
        abort(404);
    }

    return view('detail-produk', compact('product'));
});