<?php

namespace App\Http\Controllers\admin;

use App\Helpers\Fonks;
use App\iletisim;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class settings extends Controller
{
    function ilt(){
        $data=iletisim::find(1);
        return view('admin.iletisim',compact('data'));
    }

    function iltGuncelle(request $veri){
        return Fonks::update($veri, 'App\iletisim',1);
    }
}
