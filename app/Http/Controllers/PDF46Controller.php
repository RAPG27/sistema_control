<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Liberacion;
use PDF;


class PDF46Controller extends Controller
{
    public function PDF($id){

         $liberacion = Liberacion::find($id);
         $pdf46 = \PDF::loadView('fdep46', ['liberacion' => $liberacion]);
    
         return  $pdf46->stream('fdep46.pdf');
    }
}
