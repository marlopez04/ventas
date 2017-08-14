<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

    protected $table = "categorias";
    protected $fillable = ['nombre','img','user_id'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function productos()
    {
        return $this->hasMany('App\Producto');
    }

}
