<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
  protected $fillable = [
      'nombre'
  ];
  public function registros()
  {
      return $this->hasMany('App\Registro','region_id', 'id');
  }
}
