<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lembaga extends Model
{
    protected $table ='lembaga';
    
    protected  $fillable = [
    'nama', 	
    'nama_lembaga', 	
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
