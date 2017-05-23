<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\provinsiM;
use App\sukuM;

class sukuC extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
    public function awal(){
        $semuaSuku = sukuM::all();
        return view('suku.awal', compact('semuaSuku'));
    }
    public function tambah(){
        $provinsi = new provinsiM;
        return view('suku.tambah', compact('provinsi'));
    }
    public function simpan(Request $input){
        $suku = new sukuM($input->only('nama_suku','file_gambar','id_provinsi'));
        if($suku->save()){
            $this->informasi = 'Suku Berhasil di Simpan';
        }
        return redirect('suku')->with(['informasi'=>$this->informasi]);
    }
    public function edit($id){
        $suku = sukuM::find($id);
        $provinsi = new provinsiM;
        return view('suku.edit', compact('provinsi','suku'));
    }
    public function lihat($id){
        $suku = sukuM::find($id);
        return view('suku.lihat')->with(array('suku'=>$suku));
    }
    public function update($id, Request $input){
        $suku = sukuM::find($id);
        $suku->nama_suku = $input->nama_suku;
        $suku->file_gambar = $input->file_gambar; 
        $suku->id_provinsi = $input->id_provinsi;
        $informasi = $suku->save() ? 'Berhasil update Data' : 'Gagal update Data';
        return redirect('suku')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id){
        $suku = sukuM::find($id);
        $informasi = $suku->delete() ? 'Berhasil Hapus Data' : 'Gagal Hapus Data';
        return redirect('suku')->with(['informasi'=>$this->informasi]);
    }
}
