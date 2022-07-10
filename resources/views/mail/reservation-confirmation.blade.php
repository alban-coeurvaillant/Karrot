@component('mail::message')
# {{ __('Reservation confirmation') }}

## {{ __('Event') }}
{{ __('Place of event') }}: {{ $event->place }}  
{{ __('Date') }}: {{ $event->date }}  
{{ __('Time') }}: {{ $event->time }}


## {{ __('Reservation') }}
{{ __('Firstname') }}: {{ $reservation->firstname }}  
{{ __('Lastname') }}: {{ $reservation->lastname }}  
{{ __('Email') }}: {{ $reservation->email }}  

{{ __('Message') }}:  
{!! nl2br(e($reservation->message)) !!}

@endcomponent
