<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CodeConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $code;
    public $name;

    public function __construct($code,$name)
    {
        $this->code = $code;
        $this->name = $name;
    }

    public function build()
    {
        return $this->subject('Code Confirmation')->view('emails.code_confirmation');
    }
}
