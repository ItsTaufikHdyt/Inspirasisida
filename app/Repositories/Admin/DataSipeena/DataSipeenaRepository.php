<?php

namespace App\Repositories\Admin\DataSipeena;

use App\Repositories\Admin\Core\DataSipeena\DataSipeenaRepositoryInterface;
use Illuminate\Http\Request;

use App\pendaftaran;
use App\lembaga;
use App\penaopd;
use Illuminate\Support\Facades\Storage;

class DataSipeenaRepository implements DataSipeenaRepositoryInterface
{

    protected   $pendaftaran;
    protected   $lembaga;
    protected   $penaopd;

    public function __contruct(
        pendaftaran $pendaftaran,
        lembaga     $lembaga,
        penaopd     $penaopd
    ) {
        $this->pendaftaran = $pendaftaran;
        $this->lembaga     = $lembaga;
        $this->penaopd     = $penaopd;
    }

    public function destroySipeenaPendaftaran($id)
    {
        // $pendaftaran = pendaftaran::find($id);
        // if ($pendaftaran->hasfile("berkas") && $pendaftaran->hasfile("foto")) {
        //     Storage::delete($pendaftaran->izin_ortu);
        //     Storage::delete($pendaftaran->izin_sekolah);
        // }
        // if ($pendaftaran->hasfile("proposal")) {
        //     Storage::delete($pendaftaran->proposal);
        // }
        // Storage::delete($pendaftaran->ktp);
        // Storage::delete($pendaftaran->surat_pernyataan);
        // $pendaftaran->delete();
        $pendaftaran = pendaftaran::find($id);
        Storage::disk('local')->delete('public/izin-ortu/' .$pendaftaran->izin_ortu);
        Storage::disk('local')->delete('public/izin-sekolah/' .$pendaftaran->izin_sekolah);
        Storage::disk('local')->delete('public/proposal/' .$pendaftaran->proposal);
        Storage::disk('local')->delete('public/ktp/' .$pendaftaran->ktp);
        Storage::disk('local')->delete('public/surat-pernyataan/' .$pendaftaran->surat_pernyataan);
        // Storage::delete($pendaftaran->izin_ortu);
        // Storage::delete($pendaftaran->izin_sekolah);
        // Storage::delete($pendaftaran->proposal);
        // Storage::delete($pendaftaran->ktp);
        // Storage::delete($pendaftaran->surat_pernyataan);
        $pendaftaran->delete();
    }

    public function destroySipeenaLembaga($id)
    {
        // $lembaga = lembaga::find($id);
        // if ($lembaga->hasfile("proposal")) {
        //     Storage::delete($lembaga->proposal);
        // }
        // Storage::delete($lembaga->ktp);
        // Storage::delete($lembaga->surat_pernyataan);
        // $lembaga->delete();

        $lembaga = lembaga::find($id);
        Storage::disk('local')->delete('public/proposal/' .$lembaga->proposal);
        Storage::disk('local')->delete('public/ktp/' .$lembaga->ktp);
        Storage::disk('local')->delete('public/surat-pernyataan/' .$lembaga->surat_pernyataan);
        // Storage::delete($lembaga->proposal);
        // Storage::delete($lembaga->ktp);
        // Storage::delete($lembaga->surat_pernyataan);
        $lembaga->delete();
    }

    public function destroySipeenaOpd($id)
    {
        // $opd = penaopd::find($id);

        // if ($opd->hasile("proposal")){
        //     Storage::delete($opd->proposal);
        //     }
        // Storage::delete($opd->surat_pernyataan);
        // $opd->delete();
        $opd = penaopd::find($id);
        Storage::disk('local')->delete('public/proposal/' .$opd->proposal);
        Storage::disk('local')->delete('public/surat-pernyataan/' .$opd->surat_pernyataan);
        // Storage::delete($opd->proposal);
        // Storage::delete($opd->surat_pernyataan);
        $opd->delete();
    }
}
