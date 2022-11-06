@component('mail::message')
# {{ __('New reservation') }}

## {{ __('Event') }}
{{ __('Place of event') }}: {{ $event->place }}  
{{ __('Date') }}: {{ $event->date_fr }}  
{{ __('Time') }}: {{ $event->time }}  


## {{ __('Reservation') }}
{{ __('Firstname') }}: {{ $reservation->firstname }}  
{{ __('Lastname') }}: {{ $reservation->lastname }}  
{{ __('Email') }}: {{ $reservation->email }}  
{{ __('Nb seats') }}: {{ $reservation->nb_seats }}  

{{ __('Message') }}:  
{!! nl2br(e($reservation->message)) !!}

@endcomponent
