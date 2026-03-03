<x-layout judul="Halaman Produk">
    <x-slot:heading>
        Halaman Produk
    </x-slot:heading>
<ul>
        @foreach($products as $p)
            <li>
                <a href="/produk/{{ $p['id'] }}">
                    {{ $p['nama'] }} - Rp {{ number_format($p['harga']) }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>                             