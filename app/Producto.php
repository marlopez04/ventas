<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    protected $table = "productos";
    protected $fillable = ['nombre','precio','costo','user_id','categoria_id', 'imagen'];

    public function listaprecio()
    {
        return $this->belongsTo('App\Listaprecio', 'lista_precio_id', 'id');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function categoria()
    {
    	return $this->belongsTo('App\Categoria');
    }

    public function ventaproductos()
    {
        return $this->hasMany('App\Ventaproducto');
    }

}
