<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dbopd extends Model
{
    protected $table = 'dbopd';

    protected $fillable = [
        'judul', 'tahun', 'opd', 'lokasi', 'abstraksi', 'kategori', 'berkas'
    ];
}
