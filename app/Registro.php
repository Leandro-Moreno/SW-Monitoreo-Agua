<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
  protected $table = 'registros';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'longitud', 'latitud', 'temperatura', 'hg', 'conduct', 'od', 'ph',
      'region_id', 'transfer_id' , 'created_at', 'updated_at'
  ];
  /**
     * @return Region
     */
    public function region()
    {
        return $this->belongsTo('App\Region', 'region_id');
    }
    public function transferencia()
    {
      return $this->belongsTo('App\Transference', 'transfer_id');
    }
}
