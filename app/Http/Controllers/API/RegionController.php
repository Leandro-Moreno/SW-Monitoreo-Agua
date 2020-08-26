<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Region;
use App\Registro;
use Illuminate\Http\Request;
use App\Http\Resources\RegionResource;
use App\Http\Resources\RegistroResource;
use Illuminate\Support\Carbon;
/**
 *
 * @group Regiones
 * APIs para administrar los Datos de las Regiones
 */
class RegionController extends \App\Http\Controllers\Controller
{
    /**
     * Muestra el listado de todas las regiones
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $regiones = Region::all();
      return response([ 'regiones' => RegionResource::collection($regiones), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Muestra los registros de una region en Especifico
     * @urlParam region required requerido para seleccionar la region. Example: 2
     *
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function show(Region $region)
    {
      // dd($region);
      $registros = Registro::where('region_id', '=', $region->id)->orderBy('id', 'DESC')->paginate(80);
      return response(['registros' => RegistroResource::collection( $registros), 'message' => 'Retrieved successfully'], 200);
    }
    /**
     * Muestra el listado de registros de una region en unas fechas determinadas.
     * @urlParam  region required requerido para seleccionar la region. Example: 3
     * @urlParam  fechaIni required requerido para filtrar la fecha de inicio de la busqueda. Example: 12-04-2018
     * @urlParam  fechaFin required requerido para filtrar la fecha final de la busqueda, 20-04-2020 para seleccionar el 20 de Abril de 2020. Example: 20-04-2020
     *
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function porfecha(Region $region, $fechaIni = null, $fechaFin = null)
    {
      $fechaInicial = Carbon::createFromDate($fechaIni);
      $fechaFinal = Carbon::createFromDate($fechaFin);
      $registros = Registro::whereYear('created_at','>',$fechaInicial)
                            ->whereYear('created_at','<',$fechaFinal)
                            ->where('region_id', '=', $region->id)
                            ->get();
      return response(['registros' => RegistroResource::collection( $registros), 'message' => 'Retrieved successfully'], 200);
    }
}
