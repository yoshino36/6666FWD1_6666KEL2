<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\kebudayaanM;
use App\sukuM;

class kebudayaanC extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
    public function awal(){
        $semuaKebudayaan = kebudayaanM::all();
        return view('kebudayaan.awal', compact('semuaKebudayaan'));
    }
    public function tambah(){
        $suku = new sukuM;
        return view('kebudayaan.tambah', compact('suku'));
    }
    public function simpan(Request $input){
        $kebudayaan = new kebudayaanM($input->only('nama_kebudayaan','file_gambar','keterangan','id_suku'));
        if($kebudayaan->save()){
            $this->informasi = 'kebudayaan Berhasil di Simpan';
        }
        return redirect('kebudayaan')->with(['informasi'=>$this->informasi]);
    }
    public function edit($id){
        $kebudayaan = kebudayaanM::find($id);
        $suku = new sukuM;
        return view('kebudayaan.edit', compact('suku'));
    }
    public function lihat($id){
        $kebudayaan = kebudayaanM::find($id);
        return view('kebudayaan.lihat')->with(array('kebudayaan'=>$kebudayaan));
    }
    public function update($id, Request $input){
        $kebudayaan = kebudayaanM::find($id);
        $kebudayaan->nama_kebudayaan = $input->nama_kebudayaan;
        $kebudayaan->file_gambar = $input->file_gambar;
        $kebudayaan->keterangan = $input->keterangan;
        $kebudayaan->id_suku = $input->id_suku;
        $informasi = $kebudayaan->save() ? 'Berhasil update Data' : 'Gagal update Data';
        return redirect('kebudayaan')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id){
        $kebudayaan = kebudayaanM::find($id);
        $informasi = $kebudayaan->delete() ? 'Berhasil Hapus Data' : 'Gagal Hapus Data';
        return redirect('kebudayaan')->with(['informasi'=>$this->informasi]);
    }
}
