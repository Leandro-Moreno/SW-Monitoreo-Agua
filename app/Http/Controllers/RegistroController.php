<?php

namespace App\Http\Controllers;

use Auth;
use App\Metodo;
use App\Transference;
use App\Registro;
use Illuminate\Http\Request;

use App\Imports\RegistroImport;
use App\Exports\RegistroExport;
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
      $registros = Registro::whereHas('transferencia', function($query){
        $query->where('estado',1);
      })->orderByDesc('id')->paginate(80);
        return view('registros.index', ['registros' => $registros]);
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

    public function importCreate(){
      $transfer = new Transference();
      $transfer->user_id = Auth::id();
      $transfer->metodo_id = Metodo::where('id','=',2)->first()->id;
      $transfer->estado = 1;
      $transfer->save();
      Excel::import(new RegistroImport($transfer), request()->file('file'));
      return redirect('/')->with('success', 'Salio Bien');

    }
    public function import(){
      return view('registros.import');
    }

    public function export()
    {
      return Excel::download(new RegistroExport, 'registro'.now().'.xlsx');
    }
}
