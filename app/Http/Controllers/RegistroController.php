<?php

namespace App\Http\Controllers;

use Auth;
use App\Metodo;
use App\Transference;
use App\Registro;
use App\Region;
use Illuminate\Http\Request;

use App\Imports\RegistroImport;
use App\Exports\RegistroExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\RegistroRequest;


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
      // dd($registro);

        return view('registros.edit', ['registro' => $registro]);
    }

    public function show(Registro $registro)
    {
        return view('registros.show', ['registro' => $registro]);
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
        $datos = $request->all();
        $registro->update($datos);
        return redirect()->route('registro.index')->withStatus(__('Registro Actualizado con éxito.'));
    }
    public function destroy(Registro $registro){
      $registro->delete();
      return redirect()->route('registro.index')->with('success', 'Registro eliminado con exito');
    }
    public function create(){
      $regiones = Region::all();
      return view('registros.create',['regiones' => $regiones]);
    }
    public function store(RegistroRequest $request, Registro $registro){
      $datos = $request->all();
      $transfer = new Transference();
      $transfer->metodo_id = Metodo::where('id','=',4)->first()->id;
      $transfer->estado = 1;
      $transfer->ip = $request->ip();
      $transfer->save();
      $registro = new Registro;
      $registro->transfer_id = $transfer->id;
      $registro->fill($datos);
      $registro->save();
      return redirect()->route('registro.index')->withStatus(__('Registro Actualizado con éxito.'));
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
