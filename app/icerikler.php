<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class icerikler extends Model
{
    protected $table='icerikler';
    protected $fillable=['ic_pozisyon', 'ic_sira', 'ic_durum', 'ic_baslik', 'ic_tur','ic_altbaslik', 'ic_icerik', 'created_at', 'updated_at'];
}
