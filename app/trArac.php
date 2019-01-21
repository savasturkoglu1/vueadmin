<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trArac extends Model
{
    protected $table = 'transferarac';
    protected $fillable =['ta_model', 'ta_tip', 'ta_bavul', 'ta_ozellik', 'ta_aciklama', 'ta_kapasite', 'ta_durum', 'ta_resim'];
    public $timestamps = false;

    public function fiyat(){
        return $this->hasMany('App\trnFiyat', 'tf_arac_id', 'id');
    }
}


