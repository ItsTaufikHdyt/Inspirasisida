<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permohonan extends Model
{
    protected $table ='permohonan';
    
    protected  $fillable = [
        'nama',
        'ttl',
        'pekerjaan', 	
        'alamat', 	
        'ktp', 	
        'pendidikan',
        'agama', 	
        'telp', 	
        'nation', 	
        'email', 	
        'tujuan', 	
        'judul', 	
        'jenis', 	
        'tahun', 	
        'instansi', 	
        'kota', 	
        'data', 	
        'verifikasi', 	
        'ket', 	
        'id_user', 	
        'tgl_input', 	
        'tgl_edit' 	
    ];
}
