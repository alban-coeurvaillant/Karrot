<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Events') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-card>
            <x-slot name="header">
                <div class="mb-5">
                    <x-button-link :href="route('admin.event.index')">{{ __('Back') }}</x-button-link>
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
                    <label for="date_field">{{ __('Date') }}</label>
                    <x-input id="date_field" name="date" type="date" value="{{ old('date', $event->date) }}" />
                </div>
                <div>
                    <label for="place_field">{{ __('Place of event') }}</label>
                    <x-input id="place_field" name="place" type="text" value="{{ old('place', $event->place) }}" />
                </div>
                <div>
                    <label for="time_field">{{ __('Time') }}</label>
                    <x-input id="time_field" name="time" type="time" value="{{ old('time', $event->time) }}" />
                </div>
                <div>
                    <label for="online_field">{{ __('Online') }}</label>
                    <input type="hidden" name="online" value="0">
                    <input id="online_field" name="online" type="checkbox" value="1" @if(old('online', $event->online)) checked @endif>
                </div>
                <div>
                    <x-button>{{ __('Validate') }}</x-button>
                </div>
            </form>
        </x-card>
    </div>
</x-app-layout>
