<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adminM extends Model
{
    protected $table = 'admin1';
    protected $fillable = ['Nama','No_hp','id_user1'];
    protected $guarded = ['id'];

    public function user1(){
    	return $this->belongsTo(user1::class);
	}
}
