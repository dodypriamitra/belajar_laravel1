<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    // Method untuk menampilkan semua data pegawai
    public function index()
    {
        $pegawai = DB::table('pegawai')->paginate(10);
        return view('index', ['pegawai' => $pegawai]);
    }

    // Method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
        return view('tambah');
    }

    // Method untuk menyimpan data pegawai yang baru
    public function store(Request $request)
    {
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);

        return redirect('/pegawai');
    }

    // Method untuk menampilkan form edit pegawai
    public function edit($id)
    {
        $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();
        return view('edit', ['pegawai' => $pegawai]);
    }

    // Method untuk update data pegawai
    public function update(Request $request)
    {
        DB::table('pegawai')->where('pegawai_id', $request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);

        return redirect('/pegawai');
    }

    // Method untuk menghapus data pegawai
    public function hapus($id)
    {
        DB::table('pegawai')->where('pegawai_id', $id)->delete();
        return redirect('/pegawai');
    }

    // Method untuk melakukan pencarian data pegawai
    public function cari(Request $request)
    {
        $cari = $request->cari;

        $pegawai = DB::table('pegawai')
                    ->where('pegawai_nama', 'like', "%".$cari."%")
                    ->paginate();

        return view('index', ['pegawai' => $pegawai]);
    
    }

}
