<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lembaga extends Model
{
    protected $table ='lembaga';
    
    protected  $fillable = [
    'nama_lembaga', 	
    'nama', 	
    'alamat', 	
    'email', 	
    'telp', 	
    'ktp', 	
    'surat_pernyataan', 	
    'proposal', 	
    'url_proposal', 	
    'verifikasi', 	
    'ket', 	
    'kategori_peena', 	
    'tgl_input', 	
    'tgl_edit', 	
    'proposal_akhr'
    ];	
}
