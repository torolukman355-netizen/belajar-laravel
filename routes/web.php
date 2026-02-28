<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda',[
        "salam" => "<b>Selamat Pagi </b>",
        "nama" => "Daffa"
    ]);
});

Route::get('/profil', function () {
    return view('tentang', [
        'roles'=>[
            [
                'posisi'=> 'CEO',
                'tugas'=> 'Memimpin Perusahaan'
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
        ['id' => 1, 'nama' => 'Laptop', 'harga' => 8000000],
        ['id' => 2, 'nama' => 'HP', 'harga' => 3000000],
        ['id' => 3, 'nama' => 'Tablet', 'harga' => 5000000],
    ];

    return view('produk', compact('products'));
});

Route::get('/produk/{id}', function ($id) {

    $products = [
        ['id' => 1, 'nama' => 'Laptop', 'harga' => 8000000],
        ['id' => 2, 'nama' => 'HP', 'harga' => 3000000],
        ['id' => 3, 'nama' => 'Tablet', 'harga' => 5000000],
    ];

    $product = collect($products)->firstWhere('id', $id);

    if (!$product) {
        abort(404);
    }

    return view('detail-produk', compact('product'));
});