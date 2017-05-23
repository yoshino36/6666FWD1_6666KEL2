<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\kesenianM;
use App\kebudayaanM;
use App\bantuM;


class bantuC extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
    public function awal(){
        $semuaBantu = bantuM::all();
        return view('bantu.awal', compact('semuaBantu'));
    }
    public function tambah(){
        $kesenian = new kesenianM;
        $kebudayaan = new kebudayaanM;
        return view('bantu.tambah', compact('kesenian','kebudayaan'));
    }
    public function simpan(Request $input){
        $bantu = new bantuM($input->only('id_kesenian','id_kebudayaan'));
        if($bantu->save()){
            $this->informasi = 'bantu Berhasil di Simpan';
        }
        return redirect('bantu')->with(['informasi'=>$this->informasi]);
    }
    public function edit($id){
        $bantu = bantuM::find($id);
        $kesenian = new kesenianM;
        $kebudayaan = new kebudayaanM;
        return view('bantu.edit', compact('kesenian','kebudayaan'));
    }
    public function lihat($id){
        $bantu = bantuM::find($id);
        return view('bantu.lihat')->with(array('bantu'=>$bantu));
    }
    public function update($id, Request $input){
        $bantu = bantuM::find($id);
        $bantu->id_kesenian = $input->id_kesenian;
        $bantu->id_kebudayaan = $input->id_kebudayaan;
        $informasi = $bantu->save() ? 'Berhasil update Data' : 'Gagal update Data';
        return redirect('bantu')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id){
        $bantu = bantuM::find($id);
        $informasi = $bantu->delete() ? 'Berhasil Hapus Data' : 'Gagal Hapus Data';
        return redirect('bantu')->with(['informasi'=>$this->informasi]);
    }
}
