<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Metodo;
use App\Registro;
use App\Transference;
use Illuminate\Http\Request;
use App\Http\Resources\RegistroResource;
use Illuminate\Support\Carbon;
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
     * Almacena un nuevo registro
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
      $transfer->metodo_id = Metodo::where('id','=',2)->first()->id;
      $transfer->estado = 1;
      $transfer->save();
      $data = $request->all();
      $data['transfer_id'] =  $transfer->id;
      $data['created_at'] =  Carbon::now();
      $data['updated_at'] =  Carbon::now();
      $registro = Registro::create($data);
      // dd($registro);
        return response(['message' => 'Retrieved successfully'], 200);
    }

}
