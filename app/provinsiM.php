<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class provinsiM extends Model
{
    protected $table = 'provinsi1';
    protected $fillable = ['nama_provinsi'];
    protected $guarded = ['id'];

    public function suku(){
    	return $this->hasOne(suku::class,'id_provinsi');
	}

	public function getnamapro()
    {
        return $this->provinsi1->id_provinsi;
    }
    
    public function listpro()
    {
        $out = [];
        foreach ($this->all() as $pro) {
            $out[$pro->id] = "{$pro->id} ({$pro->nama_provinsi})";
        }
        return $out;
    }

}
