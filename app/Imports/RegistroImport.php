<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Region;
use App\Registro;
use App\Transference;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RegistroImport implements ToModel, WithHeadingRow
{
    private $transfer=null;
    public function __construct(Transference $transfer)
    {
        $this->transfer=$transfer;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
      if( ! is_null($row['longitude'])){
        $fecha = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['timestamp'])->format('d/m/Y H:i');
        return new Registro([
          'longitud' => $row['longitude'],
          'latitud' => $row['latitude'],
          'hg' => $row['hg'],
          'temperatura' => $row['temp'],
          'conduct' => $row['conduct'],
          'od' => $row['od'],
          'ph' => $row['ph'],
          'transfer_id' => $this->transfer->id,
          'region_id' => $row['region'],
          'created_at' => Carbon::createFromFormat('d/m/Y H:i', $fecha, 'America/Bogota'),
          'updated_at' => now(),
        ]);
      }
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
