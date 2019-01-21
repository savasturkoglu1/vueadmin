<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seo extends Model
{
    protected $table='seo';
    protected $fillable=['seo_baslik', 'seo_aciklama','seo_dil','seo_pozisyon','seo_icerik', 'seo_keywords', 'seo_unfollow', 'seo_google', 'seo_yandex', 'seo_analitik'];
    public $timestamps=false;
}
