@component('mail::message')
# {{ __('New contact') }}

<p>
{{ __('Firstname') }}: {{ $contact->firstname }}  
</p>

{{ __('Lastname') }}: {{ $contact->lastname }}  
{{ __('Email') }}: {{ $contact->email }}  

{{ __('Message') }}:  
{!! nl2br(e($contact->message)) !!}

@endcomponent
