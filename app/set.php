<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class set extends Model
{
    protected $table='ayarlar';
    protected $fillable=['set_renk1', 'set_renk2', 'set_renk3', 'set_renk4','set_font', 'set_font2','set_liste_gorunum', 'set_liste_pg', 'set_liste_siralama'];
    public $timestamps=false;
}
