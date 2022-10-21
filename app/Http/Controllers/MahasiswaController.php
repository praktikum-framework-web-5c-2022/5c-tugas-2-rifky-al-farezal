<?php

//RawQuery

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController
{
    public function index()
    {
        $mahasiswa = DB::select('select * from _mahasiswas');
        return view('mahasiswa.index', ['data' => $mahasiswa, 'title' => 'Mahasiswa']);
    }
    public function insert()
    {
        $mahasiswa = DB::insert("insert into _mahasiswas(
            npm,
            nama,
            jenis_kelamin,
            alamat,
            tempat_lahir,
            tanggal_lahir,
            photo)
        values(
            '2010631170029',
            'Rifky Al Farezal',
            'Laki - laki',
            'Karawang',
            'Tasikmalaya',
            '2011-11-11',
            'RifkyAlFarezal.png'
            )");
        return "<b>Berhasil disimpan!</b> (Silahkan kembali ke /mahasiswa)";
    }
    public function delete()
    {
        $mahasiswa = DB::delete('delete from _mahasiswas where id= 3');
        return "<b>Berhasil dihapus!</b> (Silahkan kembali ke /mahasiswa)";
    }
    public function update()
    {
        $mahasiswa = DB::update("update _mahasiswas set nama='Rifky' where id = 4");
        return "<b>Berhasil diupdate!</b> (Silahkan kembali ke /mahasiswa)";
    }
}

// Raw SQL