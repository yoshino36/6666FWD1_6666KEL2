<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\userM;
use App\memberM;

class memberC extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
    public function awal(){
        $semuaMember = memberM::all();
        return view('member.awal', compact('semuaMember'));
    }
    public function tambah(){
        $member = new member;
        return view('member.tambah', compact('member'));
    }
    public function simpan(Request $input){
        $member = new member($input->only('nama','email','no_hp','id_user'));
        if($member->save()){
            $this->informasi = 'member Berhasil di Simpan';
        }
        return redirect('member')->with(['informasi'=>$this->informasi]);
    }
    public function edit($id){
        $member = member::find($id);
        $member = new member;
        return view('member.edit', compact('member'));
    }
    public function lihat($id){
        $member = member::find($id);
        return view('member.lihat')->with(array('member'=>$member));
    }
    public function update($id, Request $input){
        $member = member::find($id);
        $member->nama = $input->nama;
        $member->email = $input->email;
        $member->no_hp = $input->no_hp;
        $member->id_user = $input->id_user;
        $informasi = $member->save() ? 'Berhasil update Data' : 'Gagal update Data';
        return redirect('member')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id){
        $member = member::find($id);
        $informasi = $member->delete() ? 'Berhasil Hapus Data' : 'Gagal Hapus Data';
        return redirect('member')->with(['informasi'=>$this->informasi]);
    }
}
