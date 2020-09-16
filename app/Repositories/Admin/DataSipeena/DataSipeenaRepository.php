<?php

namespace App\Repositories\Admin\DataSipeena;

use App\Repositories\Admin\Core\DataSipeena\DataSipeenaRepositoryInterface;
use Illuminate\Http\Request;

use App\pendaftaran;
use App\lembaga;
use App\penaopd;

class DataSipeenaRepository implements DataSipeenaRepositoryInterface
{

protected   $pendaftaran;
protected   $lembaga;
protected   $penaopd;

    public function __contruct(
        pendaftaran $pendaftaran,
        lembaga     $lembaga,
        penaopd     $penaopd       
    )
    {
        $this->pendaftaran = $pendaftaran;
        $this->lembaga     = $lembaga;
        $this->penaopd     = $penaopd;
    }

    public function destroySipeenaPendaftaran($id)
    {
        $pendaftaran = pendaftaran::find($id);
        $pendaftaran->delete();
    }
    
    public function destroySipeenaLembaga($id)
    {
        $lembaga = lembaga::find($id);
        $lembaga->delete();
    }

    public function destroySipeenaOpd($id)
    {
        $opd = penaopd::find($id);
        $opd->delete();
    }


    
}