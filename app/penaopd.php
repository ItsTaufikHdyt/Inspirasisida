<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penaopd extends Model
{
    protected $table = 'pena_opd';

    protected $fillable = [
        'nama',
        'tgjawab',
        'nip',
        'jabatan',
        'surat_pernyataan',
        'email',
        'telp',
        'alamat',
        'proposal',
        'url_proposal',
        'verifikasi',
        'ket'
    ];
}
