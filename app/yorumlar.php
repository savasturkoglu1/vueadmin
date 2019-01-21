<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class yorumlar extends Model
{
    protected $table='yorumlar';
    protected $fillable=['yor_villa', 'yor_ad', 'yor_eposta', 'yor_yildiz', 'yor_yorum', 'yor_durum', 'yor_musteri', 'yor_villa_id','created_at','updated_at'];
}
