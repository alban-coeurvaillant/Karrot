<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Reservation;
use \App\Mail\Reservation as ReservationMailable;
use \App\Mail\ReservationConfirmation as ReservationConfirmationMailable;
use App\Rules\ValidHCaptcha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('event');
    }

    public function index()
    {
        $events = Event::canDisplay()->orderBy('date')->get();
        $data = $items = collect();
        $currentYearMonth = null;
        foreach ($events as $event) {
            if ($event->year_month != $currentYearMonth) {
                if ($items->isNotEmpty()) $data[] = $items;
                $items = collect();
                $currentYearMonth = $event->year_month; 
            }
            $items[] = $event;
        }
        if ($items->isNotEmpty()) $data[] = $items;
        
        return view('front.event.index', compact('data'));
    }

    public function reservation(Event $event)
    {
        if (!$event->online)
            throw new NotFoundHttpException();

        return view('front.event.reservation', compact('event'));
    }

    public function sendReservation(Request  $request, Event $event)
    {
        if (!$event->online)
            throw new NotFoundHttpException();

        $this->validate($request, [
            'lastname' => 'required',
            'firstname' => 'required',
            'email' => 'required|email',
            'h-captcha-response' => ['required', new ValidHCaptcha()]
        ]);


        $reservation = new Reservation();
        $reservation->fill($request->all());
        $event->reservations()->save($reservation);
        Mail::send(new ReservationMailable($reservation));
        Mail::send(new ReservationConfirmationMailable($reservation));

        return back()->withConfirmation('Votre réservation a été envoyée.');
    }
}
