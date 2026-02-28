<x-layout judul="Halaman Detail Produk">
    <x-slot:heading>
        Halaman Detail Produk
    </x-slot:heading>
<h1>Detail Produk</h1>

    <p>ID: {{ $product['id'] }}</p>
    <p>Nama: {{ $product['nama'] }}</p>
    <p>Harga: Rp {{ number_format($product['harga']) }}</p>

    <a href="/produk">Kembali</a>
</x-layout>