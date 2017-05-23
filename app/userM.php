<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;

class userM extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $table = 'user1';
    protected $fillable = ['userename','password','level'];
    protected $guarded = ['id'];

    public function admin1(){
    	return $this->hasOne(admin1::class,'id_user1');
	}
	public function member1(){
    	return $this->hasOne(member1::class,'id_user1');
	}

}
