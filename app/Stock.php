<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{

    protected $table = "stocks";
    protected $fillable = ['precio','costototal','user_id'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function stockproducto()
    {
        return $this->hasMany('App\Stockproducto');
    }

}
