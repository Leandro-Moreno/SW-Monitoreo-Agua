<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transference extends Model
{
    protected $table = 'transferences';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'metodo_id','user_id', 'estado', 'celular_id'
    ];
}
