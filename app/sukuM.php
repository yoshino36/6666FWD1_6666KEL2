<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sukuM extends Model
{
    
    protected $table = 'suku1';
    protected $fillable = ['nama_suku','file_gambar','id_provinsi'];
    protected $guarded = ['id'];

    public function provinsi(){
    	return $this->belongsTo(provinsi::class);
	}

	public function kesenian(){
    	return $this->hasMany(kesenian::class,'id_suku1');
	}

	public function kebudayaan(){
    	return $this->hasMany(kebudayaan::class,'id_suku');
	}
    
    public function getnamasuku()
    {
        return $this->suku1->id_suku;
    }
    
    public function listsuk()
    {
        $out = [];
        foreach ($this->all() as $suk) {
            $out[$suk->id] = "{$suk->id} ({$suk->nama_suku})";
        }
        return $out;
    }
}
