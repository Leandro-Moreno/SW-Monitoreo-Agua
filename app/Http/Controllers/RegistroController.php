<?php

namespace App\Http\Controllers;

use Auth;
use App\Metodo;
use App\Registro;
use App\Transference;
use Illuminate\Http\Request;

use App\Imports\RegistroImport;
use Maatwebsite\Excel\Facades\Excel;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Registro $registros)
    {
        $registros = Registro::orderBy('id', 'DESC')->paginate(80);
        return view('registros.index', ['registros' => $registros]);
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
     * @param  \App\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $registro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro $registro)
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
    public function importCreate(){
      $transfer = new Transference();
      $transfer->user_id = Auth::id();
      $transfer->metodo_id = Metodo::where('id','=',1)->first()->id;
      $transfer->estado = 1;
      $transfer->save();
      Excel::import(new RegistroImport($transfer), request()->file('file'));
      return redirect('/')->with('success', 'Salio Bien');

    }
    public function import(){
      return view('registros.import');
    }
}
