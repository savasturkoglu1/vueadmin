<?php

namespace App\Http\Controllers\admin;

use App\Helpers\Fonks;
use App\icerikler;
use App\sayfa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class icerikControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $icr = icerikler::where('ic_tur','custom')->get();
        return view('admin.icerikler',compact('icr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $say = sayfa::pluck('say_adi')->toArray();
        return view('admin.icerikekle', compact('say'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $veri)
    {

        return Fonks::add($veri, 'App\icerikler');
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
    public function edit($id)
    {       $say = sayfa::pluck('say_adi')->toArray();
            $data = icerikler::find($id);
            return view('admin.icerikduzenle',compact('data','say'));
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
        return Fonks::update($veri, 'App\icerikler', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
              return Fonks::delete($id, 'App\icerikler', '/panel/icerik');
    }
}
