<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farmacia;
use PDF;

class PDFController extends Controller
{
    public function gerarFarmaciaPDF()
    {
        $farmacias = Farmacia::orderBy('medicamento')->get();
//dd($farmacias);
        $data = [
            'title' => 'Lista de Medicamentos',
            'date' => date('d/m/Y'),
            'farmacias' => $farmacias,
        ];
        $pdf = PDF::loadView('FarmaciaPDF', $data);

        return $pdf->download('FarmáciaCAPS.pdf');
    }
}
