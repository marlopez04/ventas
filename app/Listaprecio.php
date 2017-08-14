<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listaprecio extends Model
{

    protected $table = "listaprecios";
    protected $fillable = ['periodo','periodo','fecha_ini','fecha_fin','user_id'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function productos()
    {
        return $this->hasMany('App\Producto');
    }

}
