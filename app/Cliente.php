<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clientes";
    protected $fillable = ['nombre','direccion','telefonos','cuit','user_id'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function ventas()
    {
        return $this->hasMany('App\Venta');
    }
}
