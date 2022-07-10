<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReservationConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var \App\Models\Reservation $reservation
     */
    public $reservation;

    /**
     * @var \App\Models\Event $event
     */
    public $event;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(\App\Models\Reservation $reservation)
    {
        $this->reservation = $reservation;
        $this->event = $reservation->event;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.reservation-confirmation')
            ->subject(__('Reservation confirmation'))
            ->to($this->reservation->email, $this->reservation->fullname);
    }
}
