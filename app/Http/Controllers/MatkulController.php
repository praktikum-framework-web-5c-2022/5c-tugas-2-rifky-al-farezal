<?php

//QueryBuilder

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatkulController
{
    public function index()
    {
        $mk = DB::table('_matkuls')
            ->select('*')
            ->get();
        return view('matakuliah.index', ['data' => $mk], ['title' => 'Mata Kuliah']);
    }

    public function insert()
    {
        $mk = DB::table('_matkuls')
            ->insert(
                [
                    'kode_mk' => 'FIK61126',
                    'nama_mk' => 'Pemrograman Mobile'
                ]
            );
        return "<b>Berhasil disimpan!</b> (Silahkan kembali ke /matkul)";
    }

    public function delete()
    {
        $mk = DB::table('_matkuls')
            ->where('id', '1')
            ->delete();
        return "<b>Berhasil dihapus!</b> (Silahkan kembali ke /matkul)";
    }

    public function update()
    {
        $mk = DB::table('_matkuls')
            ->where('id', 1)
            ->update(['nama_mk' => 'Pemrograman Web']);
        return "<b>Berhasil diupdate!</b> (Silahkan kembali ke /matkul)";
    }
}