<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kebudayaanM extends Model
{
    protected $table = 'kebudayaan1';
    protected $fillable = ['nama_kebudayaan','file_gambar','keterangan','id_suku'];
    protected $guarded = ['id'];

    public function kebudayaan1(){
    	return $this->hasMany(kebudayaan1::class,'id_kebudayaan');
	}

	public function suku1(){
    	return $this->belongsTo(suku::class);
	}

	public function getnamakeb()
    {
        return $this->suku1->id_suku;
    }
    
    public function listkeb()
    {
        $out = [];
        foreach ($this->all() as $keb) {
            $out[$keb->id] = "{$keb->id} ({$keb->nama_kebudayaan})";
        }
        return $out;
    }
}
