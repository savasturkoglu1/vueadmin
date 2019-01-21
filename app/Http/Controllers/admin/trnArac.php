<?php

namespace App\Http\Controllers\admin;

use App\trArac;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class trnArac extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arac = trArac::get();
        return view('admin.transferaraclar',compact('arac'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.traracekle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $veri)
    {
         $ekle= trArac::create($veri->all());
         return redirect('/panel/transferarac');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) // /tansterler/555/edit
    {
        $arac = trArac::findOrFail($id);
        return view('admin.transferarac', compact('arac'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $veri, $id)
    {
       $upt = trArac::find($id)->update($veri->all());
       if($upt){
           return redirect('/panel/transferarac/'.$id.'/edit');
       } else {
           return view('admin.hata');
       }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sil= trArac::find($id)->delete();
        if($sil){
            return redirect('/panel/transferarac');
        }
    }
}
