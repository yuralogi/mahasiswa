<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Mahasiswa extends Controller
{
    public function getDataMahasiswa(){
        $mhs = DB::table('mahasiswa')->get();

        return view('v_home', ['mahasiswa' => $mhs]);
    }

    public function showTambahDataMahasiswa(){
        return view('v_tambah');
    }

    public function addDataMahasiswa(Request $request){
        $nama = $request->input('inputNama');
        $jurusan = $request->input('inputJurusan');
        $tgl_lahir = $request->input('inputTanggalLahir');

        $data=array('nama'=>$nama,"jurusan"=>$jurusan,"tanggal_lahir"=>$tgl_lahir);
        DB::table('mahasiswa')->insert($data);

        return redirect('/home');

    }

    public function deleteDataMahasiswa(Request $request){
        DB::table('mahasiswa')->where('id', $request->id)->delete();
        return redirect('/home');
    }

    public function showEditDataMahasiswa(Request $request){
        $mhs = DB::table('mahasiswa')->where('id', $request->id)->get();
        return view('v_edit', ['mahasiswa' => $mhs]);
    }

    public function editDataMahasiswa(Request $request){

    }
}
