<?php

namespace App\Http\Controllers\admin;

use App\mesajlar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class touch extends Controller
{
    function mesajlar(){
        $mesajlar = mesajlar::get();
        return view('admin.mesajlar',compact('mesajlar'));
    }

    function all(){
        $mesajlar = mesajlar::orderBy('id','Desc')->get();
        return $mesajlar;
    }

    function findMesaj($id){
        $msj = mesajlar::find($id);
        return $msj;
    }
}
