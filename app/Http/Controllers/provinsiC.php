<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\provinsiM;

class provinsiC extends Controller
{
    protected $informasi = 'Berhasil Melakukan Aksi';
    public function awal(){
        $semuaProvinsi = provinsiM::all();
        return view('provinsi.awal', compact('semuaProvinsi'));
    }
    public function tambah(){
        $provinsi = new provinsiM;
        return view('provinsi.tambah', compact('provinsi'));
    }
    public function simpan(Request $input){
        $provinsi = new provinsiM($input->only('nama_provinsi'));
        if($provinsi->save()){
            $this->informasi = 'provinsi Berhasil di Simpan';
        }
        return redirect('provinsi')->with(['informasi'=>$this->informasi]);
    }
    public function edit($id){
        $provinsi = provinsiM::find($id);
        //$provinsi = new provinsiM;
        return view('provinsi.edit')->with(array('provinsi'=>$provinsi));
    }
    public function lihat($id){
        $provinsi = provinsiM::find($id);
        return view('provinsi.lihat')->with(array('provinsi'=>$provinsi));
    }
    public function update($id, Request $input){
        $provinsi = provinsiM::find($id);
        $provinsi->nama_provinsi = $input->nama_provinsi;
        $informasi = $provinsi->save() ? 'Berhasil update Data' : 'Gagal update Data';
        return redirect('provinsi')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id){
        $provinsi = provinsiM::find($id);
        $informasi = $provinsi->delete() ? 'Berhasil Hapus Data' : 'Gagal Hapus Data';
        return redirect('provinsi')->with(['informasi'=>$this->informasi]);
    }
}
