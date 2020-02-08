<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable {

    use Queueable,
        SerializesModels;

    public $subject;
    public $data;
    public $view;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($getSubject, $getData, $getView) {
        $this->subject = $getSubject;
        $this->data = $getData;
        $this->view = $getView;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        $data = $this->data;
        return $this->view($this->view, compact('data'))
                        ->subject($this->subject);
    }

}
