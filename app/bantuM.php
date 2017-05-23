<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bantuM extends Model
{
    protected $table = 'bantu1';
    protected $fillable = ['id_kesenian2','id_kebudayaan2'];
    protected $guarded = ['id'];

	public function kesenian1(){
    	return $this->belongsTo(kesenian1::class);
	}    

    public function kebudayaan1(){
    	return $this->belongsTo(kebudayaan1::class);
	}

	public function kesenian_kebudayaan(){
    	return $this->hasMany(kesenian_kebudayaan::class,'id_kesenian_kebudayaan');
	}
}
