<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solicitud;
use PDF;


class PDF44Controller extends Controller
{
    public function PDF($id){

         $solicitudes = Solicitud::find($id);
         $pdf44 = \PDF::loadView('fdep44', ['solicitudes' => $solicitudes]);
    
         return  $pdf44->stream('fdep44.pdf');
    }
}
