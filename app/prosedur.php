<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prosedur extends Model
{
    protected $table ='prosedur';
    
    protected  $fillable = [
        'judul_prosedur',
        'narasi', 	
        'berkas', 	
        'tgl_input', 	
        'tgl_edit' 	
    ];
}
