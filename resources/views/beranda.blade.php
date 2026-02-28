<x-layout judul="Halaman Beranda">
    <x-slot:heading>
        Halaman Beranda
    </x-slot:heading>
    <h1>{!! $salam!!}, Ini Adalah Halaman Beranda</h1>
    @if($nama == 'admin')
    Anda seorang Administrator.
@else
    Anda user dengan nama {{ $nama }}.
@endif
</x-layout>