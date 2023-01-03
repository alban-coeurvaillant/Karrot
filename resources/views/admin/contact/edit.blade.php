<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('Contacts') }}
        </h2>
    </x-slot>
    <div>
        <x-card>
            <x-slot name="header">
                <div>
                    <x-button-link :href="route('admin.contact.index')">{{ __('Back') }}</x-button-link>
                </div>
            </x-slot>
            @if ($errors->any())
            <x-alert class="text-red-600">
                @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </x-alert>
            @endif
            <form action="{{ $action }}" method="post" enctype="application/x-www-form-urlencoded">
                @csrf
                @method($method)
                <div class="mb-3">
                    <label for="firstname_field">{{ __('Firstname') }}</label>
                    <x-input id="firstname_field" name="firstname" type="text" value="{{ old('firstname', $contact->firstname) }}" />
                </div>
                <div class="mb-3">
                    <label for="lastname_field">{{ __('Lastname') }}</label>
                    <x-input id="lastname_field" name="lastname" type="text" value="{{ old('lastname', $contact->lastname) }}" />
                </div>
                <div class="mb-3">
                    <label for="email_field">{{ __('Email') }}</label>
                    <x-input id="email_field" name="email" type="email" value="{{ old('email', $contact->email) }}" />
                </div>
                <div class="mb-3">
                    <label for="message_field">{{ __('Message') }}</label>
                    <textarea name="message" id="message_field" class="form-control">{{ $contact->message }}</textarea>
                </div>
                <div class="mb-3">
                    <x-button class="btn-primary">{{ __('Validate') }}</x-button>
                </div>
            </form>
        </x-card>
    </div>
</x-app-layout>
