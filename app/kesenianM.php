<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kesenianM extends Model
{
    protected $table = 'kesenian1';
    protected $fillable = ['nama_kesenian','file_gambar','keterangan','id_suku1'];
    protected $guarded = ['id'];

    public function kesenian1(){
    	return $this->hasMany(kesenian1::class,'id_kesenian');
	}

	public function suku1(){
    	return $this->belongsTo(suku::class);
	}

	public function getnamakes()
    {
        return $this->suku1->id_suku;
    }
    
    public function listkes()
    {
        $out = [];
        foreach ($this->all() as $kes) {
            $out[$kes->id] = "{$kes->id} ({$kes->nama_kesenian})";
        }
        return $out;
    }
}
