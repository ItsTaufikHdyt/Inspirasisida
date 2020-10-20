<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifikasiSipeenaLembaga extends Mailable
{
    use Queueable, SerializesModels;

   public $lembaga;

    public function __construct($lembaga)
    {
        $this->lembaga = $lembaga;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.name');
    }
}
