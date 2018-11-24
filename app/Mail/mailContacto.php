<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class mailContacto extends Mailable
{
    use Queueable, SerializesModels;
    public $content;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($content)
    {
         $this->content = $content;
    }

    
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
         return $this->markdown('public.email.contact')
            ->with(['detalle' => $this->content])->subject('INFORMACIÓN DE TOURS (Formulario de contacto)');
    }
}
