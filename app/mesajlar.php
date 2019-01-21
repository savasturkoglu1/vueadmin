<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mesajlar extends Model
{
    protected $table='mesajlar';
    protected $fillable=['m_kayit', 'm_emlak', 'm_cevap','m_villa_no', 'm_musteri', 'm_isim', 'm_telefon', 'm_eposta', 'm_mesaj', 'm_onay', 'created_at', 'updated_at'];
}
