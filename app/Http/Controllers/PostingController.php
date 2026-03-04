<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostingController extends Controller
{
    public $Posting = [];

    public function __construct()
    {
        for($i=1; $i<=10; $i++){
            $this->Posting[] = [
                'Judul' => 'Judul '.$i,
                'Isi' => 'Isi '.$i,
                'kategori' => 'Kategori '.$i
            ];
        }
    }
// index untuk menampilkan semua postingan
    public function index()
    {
        return $this->Posting;
    }
// show untuk menampilkan postingan berdasarkan id
    public function show($id)
    {
        return $this->Posting[$id];
    }
// store untuk menyimpan postingan baru
    public function store()
    {
        $this->Posting[] = [
            'Judul' => request('Judul'),
            'Isi' => request('Isi'),
            'Kategori' => request('Kategori'),
        ];
        return $this->Posting;
    }
}
