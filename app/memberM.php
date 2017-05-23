<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class memberM extends Model
{
    protected $table = 'member1';
    protected $fillable = ['Nama','email','No_hp','id_user1'];
    protected $guarded = ['id'];

    public function user1(){
    	return $this->belongsTo(user1::class);
	}

	public function member1(){
    	return $this->hasMany(member1::class,'id_member1');
	}
}
