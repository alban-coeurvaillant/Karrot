<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-card>
            <x-slot name="header">
                <div class="mb-5">
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
                <div>
                    <label for="firstname_field">{{ __('Firstname') }}</label>
                    <x-input id="firstname_field" name="firstname" type="text" value="{{ old('firstname', $contact->firstname) }}" />
                </div>
                <div>
                    <label for="lastname_field">{{ __('Lastname') }}</label>
                    <x-input id="lastname_field" name="lastname" type="text" value="{{ old('lastname', $contact->lastname) }}" />
                </div>
                <div>
                    <label for="email_field">{{ __('Email') }}</label>
                    <x-input id="email_field" name="email" type="email" value="{{ old('email', $contact->email) }}" />
                </div>
                <div>
                    <label for="message_field">{{ __('Message') }}</label>
                    <textarea name="message" id="message_field">{{ $contact->message }}</textarea>
                </div>
                <div>
                    <x-button>{{ __('Validate') }}</x-button>
                </div>
            </form>
        </x-card>
    </div>
</x-app-layout>
