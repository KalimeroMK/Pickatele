<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Inquiry extends Mailable
{
    use Queueable, SerializesModels;
    protected $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mail = $this->view('email.inquiry')->with([
            'data' => $this->data,
        ])->from($this->data['email'], $this->data['name'])
            ->subject($this->data['title']);

        if (isset($this->data['cv'])) {
            $mail->attach($this->data['cv'], [
                'as' => $this->data['cv']->getClientOriginalName(),
                'mime' => $this->data['cv']->getClientMimeType(),
            ]);
        }

        return $mail;
    }
}
