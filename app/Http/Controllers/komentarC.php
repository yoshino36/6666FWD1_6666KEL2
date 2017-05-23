<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\bantuM;
use App\komentarM;

class komentarC extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
    public function awal(){
        $semuaKomentar = komentarM::all();
        return view('komentar.awal', compact('semuaKomentar'));
    }
    public function tambah(){
        $komentar = new komentar;
        return view('komentar.tambah', compact('komentar'));
    }
    public function simpan(Request $input){
        $komentar = new komentar($input->only('komentar','id_member','id_kesenian_kebudayaan'));
        if($komentar->save()){
            $this->informasi = 'komentar Berhasil di Simpan';
        }
        return redirect('komentar')->with(['informasi'=>$this->informasi]);
    }
    public function edit($id){
        $komentar = komentar::find($id);
        $komentar = new komentar;
        return view('komentar.edit', compact('komentar'));
    }
    public function lihat($id){
        $komentar = komentar::find($id);
        return view('komentar.lihat')->with(array('komentar'=>$komentar));
    }
    public function update($id, Request $input){
        $komentar = komentar::find($id);
        $komentar->komentar = $input->komentar;
        $komentar->id_member = $input->id_member;
        $komentar->id_kesenian_kebudayaan = $input->id_kesenian_kebudayaan;
        $informasi = $komentar->save() ? 'Berhasil update Data' : 'Gagal update Data';
        return redirect('komentar')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id){
        $komentar = komentar::find($id);
        $informasi = $komentar->delete() ? 'Berhasil Hapus Data' : 'Gagal Hapus Data';
        return redirect('komentar')->with(['informasi'=>$this->informasi]);
    }
}
