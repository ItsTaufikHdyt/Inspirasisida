<?php

namespace App\Repositories\Admin\Core\DataSipeena;

use Illuminate\Http\Request;

interface DataSipeenaRepositoryInterface {

    public function destroySipeenaPendaftaran($id);
    public function destroySipeenaLembaga($id);
    public function destroySipeenaOpd($id);
    
}