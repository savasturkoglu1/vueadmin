<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sayfa extends Model
{
    protected $table='sayfalar';
    protected $fillable=['say_adi', 'say_url', 'say_dil', 'say_menu', 'say_baslik', 'say_seo_baslik', 'say_seo_keywords', 'say_seo_aciklama', 'say_durum', 'say_sidebar'];
    public $timestamps=false;
}
