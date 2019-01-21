<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class header extends Model
{
    protected $table='header';
    protected $fillable=[ 'hd_tur', 'hd_resim', 'hd_video', 'hd_hbir', 'hd_hiki','hd_bir_eng','hd_iki_eng', 'hd_sld_sure', 'hd_sld_oto', 'hd_sld_arrow'];
    public $timestamps=false;
}
