<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pendaftaran extends Model
{
    protected $table ='perorangan';
    
    protected  $fillable = [
        'nama', 	
        'ttl', 	
        'pekerjaan', 	
        'alamat',	
        'ktp', 	
        'surat_pernyataan',	
        'izin_ortu', 	
        'izin_sekolah',	
        'pendidikan', 	
        'agama', 	
        'telp',	
        'nation',	
        'email',	
        'proposal',	
        'proposal_akhr', 	
        'url_proposal', 		
        'ket' 	 	
    ];

    protected $hidden = [
        'verifikasi',
        'kelompok',
        'kategori_peena',	
        'tgl_input', 	
        'tgl_edit'
    ];
}
