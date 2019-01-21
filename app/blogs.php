<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    protected $table='blog';
    protected $fillable=['blog_baslik','blog_dil', 'blog_url','blog_tip', 'blog_durum','blog_altbaslik', 'blog_giris', 'blog_icerik', 'blog_resim', 'blog_video', 'blog_seo_baslik', 'blog_seo_aciklama', 'blog_seo_keywords', 'created_at', 'updated_at'];
}
