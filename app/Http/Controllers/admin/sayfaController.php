<?php

namespace App\Http\Controllers\admin;

use App\sayfa;
use Illuminate\Http\Request;
use App\Helpers\Form;
use App\Http\Controllers\Controller;

class sayfaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $say = sayfa::get();
       return $say;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form = Form::generateForm('/panel/sayfa','sayForm', ['name'=>'say_durum'],'', [
            ['label'=>'Sayfa Adı','name'=>'say_adi', 'attr'=>'required'],
            ['label'=>'Sayfa Dili','plc'=>'Dil Seçiniz','name'=>'say_dil','secenek'=>['TR','ENG','DE'], 'inputType'=>'select'],
            ['label'=>'Sayfa Menu','plc'=>'Sayfa Pozisyonu','name'=>'say_menu','secenek'=>['Bilgilendirme','Destek'], 'inputType'=>'select'],
            ['label'=>'Sayfa Başlık','name'=>'say_baslik'],
            ['label'=>'Seo Başlık','name'=>'say_seo_baslik'],
            ['label'=>'Anahtar Kelimeler', 'name'=>'say_seo_keywords','plc'=>'Virgül ile Ayırınız', 'inputType'=>'text'],
            ['label'=>'Seo Açıklama', 'name'=>'say_seo_aciklama', 'inputType'=>'text'],
        ]);
        return '<div>Selam</div>';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $veri)
    {
        $veri['say_url']=str_slug($veri->say_adi);
        $ekle = sayfa::create($veri->all());
        if($ekle) {
            return 1;
        } else {
            return 0;
        }
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
    {
        $data = sayfa::find($id);
        return $data;
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
        $update = sayfa::find($id)->update($veri->all());
        if($update) {
            return 1;
        } else {
            return 0;
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
        $sil= sayfa::find($id)->delete();
        if($sil){
            return redirect('/panel/sayfa');
        }
    }
}
