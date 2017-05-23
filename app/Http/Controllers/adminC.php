<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\userM;
use App\adminM;

class adminC extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
    public function awal(){
        $semuaAdmin = adminM::all();
        return view('admin.awal', compact('semuaAdmin'));
    }
    public function tambah(){
        $admin = new admin;
        return view('admin.tambah', compact('admin'));
    }
    public function simpan(Request $input){
        $admin = new admin($input->only('nama','no_hp','id_user'));
        if($admin->save()){
            $this->informasi = 'admin Berhasil di Simpan';
        }
        return redirect('admin')->with(['informasi'=>$this->informasi]);
    }
    public function edit($id){
        $admin = admin::find($id);
        $admin = new admin;
        return view('admin.edit', compact('admin'));
    }
    public function lihat($id){
        $admin = admin::find($id);
        return view('admin.lihat')->with(array('admin'=>$admin));
    }
    public function update($id, Request $input){
        $admin = admin::find($id);
        $admin->nama = $input->nama;
        $admin->no_hp = $input->no_hp;
        $admin->id_user = $input->id_user;
        $informasi = $admin->save() ? 'Berhasil update Data' : 'Gagal update Data';
        return redirect('admin')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id){
        $admin = admin::find($id);
        $informasi = $admin->delete() ? 'Berhasil Hapus Data' : 'Gagal Hapus Data';
        return redirect('admin')->with(['informasi'=>$this->informasi]);
    }
}
