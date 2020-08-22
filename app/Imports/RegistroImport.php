<?php

namespace App\Imports;

use App\Region;
use App\Registro;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RegistroImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Registro([
            'longitud' => $row['longitude'],
            'latitud' => $row['latitude'],
            'hg' => $row['hg'],
            'temperatura' => $row['temp'],
            'conduct' => $row['conduct'],
            'od' => $row['od'],
            'ph' => $row['ph'],
            'region_id' => $row['region'],
            'estado' => 1,
            'created_at' => $row['createdat'],
            'updated_at' => $row['updatedat'],
        ]);
    }
    public function columnFormats(): array
    {
        return [
            'region' => NumberFormat::TYPE_NUMERIC,
            'longitude' => NumberFormat::TYPE_NUMERIC,
            'latitude' => NumberFormat::TYPE_NUMERIC,
        ];
    }
}
/***
"timestamp" => 43190.563900463
  "longitude" => -701327717
  "latitude" => -40084371
  "hg" => 0
  "temp" => 28.5
  "conduct" => 9.48
  "od" => 7.61
  "ph" => 7
  "region" => 3
  "createdat" => "2018-06-27 15:20:53.688+00"
  "updatedat" => "2018-06-27 15:20:53.688+00"
  "id_celular" => 1
**/
