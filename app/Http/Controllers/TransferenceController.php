<?php

namespace App\Http\Controllers;

use App\Transference;
use Illuminate\Http\Request;

class TransferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $transferencias = Transference::with('metodos')->withCount('registros')->get();
      // dd($transferencias);
      $transferencias = $transferencias->filter(function( $value  ){
        return $value->registros_count > 0;
      });
        return view('transferencia.index', ['transferencias' => $transferencias]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Transference  $transference
     * @return \Illuminate\Http\Response
     */
    public function show(Transference $transferencia)
    {
        return view('transferencia.show', ['transferencia' => $transferencia]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transference  $transference
     * @return \Illuminate\Http\Response
     */
    public function edit(Transference $transferencia)
    {
      return view('transferencia.edit', ['transferencia' => $transferencia]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transference  $transference
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transference $transferencia)
    {
        $datos = $request->all();
        $transferencia->update($datos);
        return redirect()->route('transferencia.show',$transferencia)->withStatus(__('Transferencia actualizada con éxito.'));
    }
}
