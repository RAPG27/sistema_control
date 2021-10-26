<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registro;
use PDF;


class PDF45Controller extends Controller
{
    public function PDF($id){

         $registro = Registro::find($id);
         $pdf45 = \PDF::loadView('fdep45', ['registro' => $registro]);
    
         return  $pdf45->stream('fdep45.pdf');
    }
}
