<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trnFiyat extends Model
{
   protected $table='trnfiyat';
   protected $fillable=['tf_arac_id', 'tf_fiyat', 'tf_doviz', 'tf_indirim', 'tf_extra', 'tf_airport','tf_place'];
   public $timestamps=false;
}
