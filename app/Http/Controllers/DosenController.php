<?php

//Eloquent

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = Dosen::all();
        return view('dosen.index', ['data' => $dosen], ['title' => 'dosen']);
    }

    public function insert()
    {
        $dosen = [
            'nidn'=>'20212223',
            'nama'=> 'Naruto Uzumaki',
            'jenis_kelamin'=>'Laki - laki',
            'alamat'=>'Konoha',
            'tempat_lahir'=>'Konoha',
            'tanggal_lahir'=>'1982-11-04',
            'photo'=>'NarutoUzumaki.png',
        ];
        $dosenInsert = Dosen::create($dosen);
        dump($dosen);
        return "<b>Berhasil disimpan!</b> (Silahkan kembali ke /dosen)";
    }

    //mengakses collection
    public function delete()
    {
        $dosen = Dosen::find(2);
        $dosen->delete();
        return "<b>Berhasil dihapus!</b> (Silahkan kembali ke /dosen)";
    }
    public function update()
    {
        $dosen = Dosen::find(2);
        $dosen->nama = 'Sasuke Uzumaki';
        $dosen->nidn = '20191817';
        $dosen->save();
        return "<b>Berhasil diupdate!</b> (Silahkan kembali ke /dosen)";
    }
}