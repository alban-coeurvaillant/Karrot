<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Events') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-card>
            <x-slot name="header">
                <div>
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
                <div class="mb-3">
                    <label for="date_field">{{ __('Date') }}</label>
                    <x-input id="date_field" name="date" type="date" value="{{ old('date', $event->date ? $event->date->format('Y-m-d') : null) }}" />
                </div>
                <div class="mb-3">
                    <label for="place_field">{{ __('Place of event') }}</label>
                    <x-input id="place_field" name="place" type="text" value="{{ old('place', $event->place) }}" />
                </div>
                <div class="mb-3">
                    <label for="description_field">{{ __('Description') }}</label>
                    <textarea id="description_field" name="description" class="form-control">{{ old('description', $event->description) }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="time_field">{{ __('Time') }}</label>
                    <x-input id="time_field" name="time" type="time" value="{{ old('time', $event->time) }}" />
                </div>
                <div class="mb-3">
                    <label for="seats_field">{{ __('Remaining seats') }}</label>
                    <x-input id="seats_field" name="seats" type="number" value="{{ old('seats', $event->seats) }}" />
                </div>
                <div class="mb-3">
                    <label for="online_field">{{ __('Online') }}</label>
                    <input type="hidden" name="online" value="0">
                    <input id="online_field" name="online" type="checkbox" value="1" @if(old('online', $event->online)) checked @endif>
                </div>
                <div class="mb-3">
                    <x-button class="btn-primary">{{ __('Validate') }}</x-button>
                </div>
            </form>
        </x-card>
    </div>
</x-app-layout>
