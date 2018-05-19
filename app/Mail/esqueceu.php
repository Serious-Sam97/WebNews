<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class esqueceu extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * The user instance.
     *
     * @var Order
     */
    
    public $pessoa;

    /**
     * Create a new message instance.
     *
     * @return void
     */


    public function __construct($pessoa)
    {
        $this->pessoa = $pessoa;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email');
    }
}
