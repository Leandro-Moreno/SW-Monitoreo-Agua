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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transference  $transference
     * @return \Illuminate\Http\Response
     */
    public function show(Transference $transference)
    {
      dd($transference);
        return view('transferencia.show', ['transferencia' => $transference]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transference  $transference
     * @return \Illuminate\Http\Response
     */
    public function edit(Transference $transference)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transference  $transference
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transference $transference)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transference  $transference
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transference $transference)
    {
        //
    }
}
