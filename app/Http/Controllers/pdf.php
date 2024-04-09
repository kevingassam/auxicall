<?php

namespace App\Http\Controllers;

use App\Models\configurations;
use App\Models\devis;
use App\Models\ligne_devis;
use Illuminate\Http\Request;
use PDF as PDFgen;

class pdf extends Controller
{
    
    public function generate_devis($id){
        $devis = devis::find($id);
        if(!$devis){
            abort(404);
        }
        $lignes = ligne_devis::where("devis_id",$devis->id)->get();
        $data = [
            "devis"=> $devis,
            "lignes" => $lignes ,
            "config" => configurations::firstOrCreate()
        ];
        $pdf = PDFgen::loadView('pdf.devis', $data);
        return $pdf->download("Devis pour ".$devis->nom_client.' #'.$devis->id.' .pdf');
    }
}
