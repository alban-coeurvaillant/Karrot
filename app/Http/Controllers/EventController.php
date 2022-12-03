<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Reservation;
use \App\Mail\Reservation as ReservationMailable;
use \App\Mail\ReservationConfirmation as ReservationConfirmationMailable;
use App\Rules\ValidHCaptcha;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class EventController extends Controller
{
    const NB_ITEMS_PAGE = 20;
    
    public function __construct()
    {
        $this->middleware('event');
    }

    public function index(Request $request)
    {
        $events = Event::canDisplay()->orderBy('date')->paginate(self::NB_ITEMS_PAGE);
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
        
        return view('front.event.index', compact('data', 'events'));
    }

    public function reservation(Event $event)
    {
        if (!$event->online || Carbon::now()->hour(0)->minute(0)->second(0)->milli(0)->gt($event->date))
            throw new NotFoundHttpException();

        return view('front.event.reservation', compact('event'));
    }

    public function sendReservation(Request  $request, Event $event)
    {
        if (!$event->online || Carbon::now()->hour(0)->minute(0)->second(0)->milli(0)->gt($event->date))
            throw new NotFoundHttpException();
        
        if (!$event->seats)
        throw new AccessDeniedHttpException('No more place');

        $this->validate($request, [
            'lastname' => 'required',
            'firstname' => 'required',
            'nb_seats' => 'required|integer|between:1,' . $event->seats,
            'email' => 'required|email',
            'h-captcha-response' => ['required', new ValidHCaptcha()]
        ]);

        

        $reservation = new Reservation();
        $reservation->fill($request->all());
        $event->reservations()->save($reservation);
        $event->seats = max(0, $event->seats - $reservation->nb_seats);
        $event->save();
        Mail::send(new ReservationMailable($reservation));
        Mail::send(new ReservationConfirmationMailable($reservation));

        return back()->withConfirmation('Votre réservation a été envoyée.');
    }
}
