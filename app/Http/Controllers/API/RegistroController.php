<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Metodo;
use App\Registro;
use App\Transference;
use Illuminate\Http\Request;
use App\Http\Resources\RegistroResource;
use Illuminate\Support\Carbon;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $registros = Registro::all();
      return response([ 'registros' => RegistroResource::collection($registros), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $registro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registro $registro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro $registro)
    {
        //
    }

}
