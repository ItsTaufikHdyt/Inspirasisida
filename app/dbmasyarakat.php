<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dbmasyarakat extends Model
{
   protected $table ='dbmasyarakat';

   protected $fillable = [
       'judul', 'nama', 'tahun', 'lokasi', 'abstraksi', 'kategori'
   ];
}
