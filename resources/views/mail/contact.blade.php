@component('mail::message')
# {{ __('New contact') }}

{{ __('Firstname') }}: {{ $contact->firstname }}  
{{ __('Lastname') }}: {{ $contact->lastname }}  
{{ __('Email') }}: {{ $contact->email }}  

{{ __('Message') }}:  
{!! nl2br(e($contact->message)) !!}

@endcomponent
