<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\kesenianM;
use App\sukuM;

class kesenianC extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
    public function awal(){
        $semuaKesenian = kesenianM::all();
        return view('kesenian.awal', compact('semuaKesenian'));
    }
    public function tambah(){
        $suku = new sukuM;
        return view('kesenian.tambah', compact('suku'));
    }
    public function simpan(Request $input){
        $kesenian = new kesenianM($input->only('nama_kesenian','file_gambar','keterangan','id_suku1'));
        if($kesenian->save()){
            $this->informasi = 'kesenian Berhasil di Simpan';
        }
        return redirect('kesenian')->with(['informasi'=>$this->informasi]);
    }
    public function edit($id){
        $kesenian = kesenianM::find($id);
        $suku = new sukuM;
        return view('kesenian.edit', compact('suku'));
    }
    public function lihat($id){
        $kesenian = kesenianM::find($id);
        return view('kesenian.lihat')->with(array('kesenian'=>$kesenian));
    }
    public function update($id, Request $input){
        $kesenian = kesenianM::find($id);
        $kesenian->nama_kesenian = $input->nama_kesenian;
        $kesenian->file_gambar = $input->file_gambar;
        $kesenian->keterangan = $input->keterangan;
        $kesenian->id_suku = $input->id_suku;
        $informasi = $kesenian->save() ? 'Berhasil update Data' : 'Gagal update Data';
        return redirect('kesenian')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id){
        $kesenian = kesenianM::find($id);
        $informasi = $kesenian->delete() ? 'Berhasil Hapus Data' : 'Gagal Hapus Data';
        return redirect('kesenian')->with(['informasi'=>$this->informasi]);
    }
}
