<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transference extends Model
{
    protected $table = 'transferences';
    protected $primarykey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'metodo_id','user_id', 'estado', 'celular_id' ,'mac'
    ];
    public function metodos()
    {
        return $this->belongsTo('App\Metodo', 'metodo_id');
    }
    public function registros()
    {
        return $this->hasMany('App\Registro', 'transfer_id', 'id');
    }
}
