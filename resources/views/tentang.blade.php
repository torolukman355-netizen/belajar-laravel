<x-layout judul="Halaman Profil">
    <x-slot:heading>
        Halaman Profil
    </x-slot:heading>

   <ul>
    @foreach($roles as $role)
        <li>
            <strong>{{ $role['posisi'] }}:</strong> bertugas {{ $role['tugas'] }}
        </li>
    @endforeach
   </ul>
</x-layout>