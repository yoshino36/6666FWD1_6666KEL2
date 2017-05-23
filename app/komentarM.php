<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class komentarM extends Model
{
    protected $table = 'komentarr1';
    protected $fillable = ['komentar','id_member1','id_kesenian_kebudayaan'];
    protected $guarded = ['id'];

    public function member1(){
    	return $this->belongsTo(member1::class);
	}

	public function kesenian_kebudayaan(){
    	return $this->belongsTo(kesenian_kebudayaan::class);
	}

}
