<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('event');
    }

    public function index()
    {
        $events = Event::online()->get();
        return view('front.event.index', compact('events'));
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
        ]);


        $reservation = new Reservation();
        $reservation->fill($request->all());
        $event->reservations()->save($reservation);

        return back()->withConfirmation('Votre réservation a été envoyée.');
    }
}
