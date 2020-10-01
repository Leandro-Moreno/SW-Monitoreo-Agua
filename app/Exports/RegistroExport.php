<?php

namespace App\Exports;

use App\Registro;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class RegistroExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view() : View
    {
      return view('exports.registro', [
          'registros' => Registro::all()
      ]);
    }

    // public function styles(Worksheet $sheet)
    // {
    //     return [
    //         1    => ['font' => ['bold' => true]],
    //     ];
    //     $sheet->getStyle('B2')->getFont()->setBold(true);
    // }
}
