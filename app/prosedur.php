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
        'created_at', 	
        'updated_at' 	
    ];
}
