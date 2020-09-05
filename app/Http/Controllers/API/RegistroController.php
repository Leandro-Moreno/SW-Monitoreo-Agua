<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Metodo;
use App\Registro;
use App\Transference;
use Illuminate\Http\Request;
use App\Http\Resources\RegistroResource;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
/**
 *
 * @group Registros
 * APIs para administrar los Datos de las Registros
 */
class RegistroController extends Controller
{
    /**
     * Muestra el listado de todos los registros.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $registros = Registro::all();
      return response([ 'registros' => RegistroResource::collection($registros), 'message' => 'Retrieved successfully'], 200);
    }
    /**
     * Muestra el listado de todos los registros.
     *
     * @return \Illuminate\Http\Response
     */
    public function ultimos100(Request $request)
    {
      $registros = Registro::orderBy('created_at', 'DESC')->paginate(100);
      return response([ 'registros' => RegistroResource::collection($registros), 'message' => 'Retrieved successfully'], 200);
    }
    public function ultimosDinamico($cantidad = 20)
    {
      $registros = Registro::orderBy('created_at', 'DESC')->paginate($cantidad);
      return response([ 'registros' => RegistroResource::collection($registros), 'message' => 'Retrieved successfully'], 200);
    }
    public function ubicacion($latitud,$longitud,$radio)
    {
      $all = $this->distance($latitud, $longitud, 0, $radio);
      // dd($all);
      return response([ 'registros' => RegistroResource::collection($all), 'message' => 'Retrieved successfully'], 200);
    }
    /*
    $table->id();
    $table->double('longitud');
    $table->double('latitud');
    $table->double('temperatura');
    $table->double('hg');
    $table->double('conduct');
    $table->double('od');
    $table->double('ph');
    $table->biginteger('region_id')->unsigned();
    $table->foreign('region_id')->references('id')->on('regions')->onUpdate('cascade')->onDelete('cascade');
    $table->foreignId('transfer_id')->references('id')->onUpdate('cascade')->on('transferences');
    $table->datetime('created_at');
    $table->datetime('updated_at');
    */
    public function distance( float $latitude = 0, float $longitude = 0, $inner_radius, $outer_radius)
    {
        $latName = "latitud";
        $lonName = "longitud";
        // $sql = "((ACOS(SIN(? * PI() / 180) * SIN(" . $latName . " * PI() / 180) + COS(? * PI() / 180) * COS(" .
        //     $latName . " * PI() / 180) * COS((? - " . $lonName . ") * PI() / 180)) * 180 / PI()) * 60 * ?) as distance";

       $sql = "6371 *acos(
         cos( radians(?))*
         cos(radians(".$latName."))*
         cos(radians(".$lonName.") - radians(?))
         + sin (radians(?))*
         sin(radians(".$latName."))
         ) AS distance";

      $query = Registro::select('id', 'hg', 'region_id', 'longitud', 'latitud', 'conduct', 'ph','temperatura','od', 'created_at')->selectRaw($sql, [$latitude, $longitude, $latitude])
      ->havingRaw('distance BETWEEN '.$inner_radius.' AND '.$outer_radius)
      ->orderBy('distance', 'ASC')
      ->limit(80)
      ->get();
        return $query;
    }
/*
(
    6373 * acos (
        cos ( radians( PASSED_IN_LATITUDE ) )
        * cos( radians( X(location) ) )
        * cos( radians( Y(location) ) - radians( PASSED_IN_LONGITUDE ) )
        + sin ( radians( PASSED_IN_LATITUDE ) )
        * sin( radians( X(location) )
    )
) AS distance
*/

    /**
     * Almacena un nuevo registro
     * @bodyParam data["longitud"] array required Longitud de la ubicación. Example: 4.12
     *
     * @bodyParam longitud float required Longitud de la ubicación. Example: 4.12
     * @bodyParam latitud float required Latitud de la ubicación. Example: -74.105001
     * @bodyParam temperatura double required PH del agua. Example: 15.2
     * @bodyParam hg double required PH del agua. Example: 0
     * @bodyParam conduct double required PH del agua. Example: 4.5
     * @bodyParam od double required PH del agua. Example: 6
     * @bodyParam ph double required PH del agua. Example: 4.5
     * @bodyParam region_id int required PH del agua. Example: 2
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $transfer = new Transference();
      $transfer->metodo_id = Metodo::where('id','=',3)->first()->id;
      $transfer->estado = 1;
      $transfer->save();
      $data = $request->all();
      $data['transfer_id'] =  $transfer->id;
      // $data['created_at'] =  Carbon::now();
      // $data['updated_at'] =  Carbon::now();
      // dd($data);
      // $registro = Registro::create($data);
      // dd($registro);
      return response([ 'registros' => RegistroResource::collection([$request]), 'message' => 'Retrieved successfully'], 200);
    }

}
