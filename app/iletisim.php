<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class iletisim extends Model
{
   protected $table='iletisim';
   protected  $fillable=['ilt_firma', 'ilt_ad', 'ilt_adres', 'ilt_mobil1', 'ilt_mobil2', 'ilt_sabit1', 'ilt_sabit2', 'ilt_sabit3', 'ilt_iletisim_eposta', 'ilt_bildirim_eposta', 'ilt_direkt_eposta', 'sos_face', 'sos_twitter', 'sos_instagram', 'sos_gplus', 'sos_pinterest', 'ilt_kayit'];
   public $timestamps=false;
}
