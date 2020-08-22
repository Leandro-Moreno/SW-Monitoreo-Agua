<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Region;
use App\Registro;
use Illuminate\Http\Request;
use App\Http\Resources\RegionResource;
use App\Http\Resources\RegistroResource;
use Illuminate\Support\Carbon;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $regiones = Region::all();
      return response([ 'regiones' => RegionResource::collection($regiones), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        return response([ 'regiones' => RegionResource::collection($request), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Display the specified resource.
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Region $region)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy(Region $region)
    {
        //
    }
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
