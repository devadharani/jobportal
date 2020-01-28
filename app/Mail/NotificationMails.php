<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotificationMails extends Mailable
{
    use Queueable, SerializesModels;
    protected $inputs;
    var $view;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
        $this->inputs = $inputs;
        $this->subject = $inputs['subject'];
        $this->view = $inputs['view'];
        $this->id = $inputs['id'];
        $this->name=$inputs['name'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       /* return $this->view($this->view)
             ->with(['inputs' => $this->inputs]);*/
        return $this->from('jobportal@example.com', 'Job portal')
            ->subject($this->subject)
            ->markdown($this->view)
            ->with([
                'name' => $this->name,
                'id' => $this->id,
            ]);
    }
}
