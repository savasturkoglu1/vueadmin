<?php

namespace App\Http\Controllers;

use App\operation;
use Illuminate\Http\Request;

class isler extends Controller
{
    function add(request $veri){
        $ekle=operation::create($veri->all());

        if($ekle){
            return $ekle->id;
        } else {
            return 'hata';
        }
    }
    function update(request $veri){
        $ekle=operation::find($veri->update_id)->update($veri->all());
        if($ekle){
            return $ekle->id;
        } else {
            return 'hata';
        }
    }


    function liste(){
        return operation::get();
    }
}
