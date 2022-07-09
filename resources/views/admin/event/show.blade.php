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

            <div>
                <div>{{ $event->place }}</div>
                <div>{{ $event->date }}</div>
                <div>{{ $event->time }}</div>
            </div>
            <hr class="my-5">
            <table class="table w-full">
                <thead>
                <tr>
                    <th class="text-left">{{ __('Firstname') }}</th>
                    <th class="text-left">{{ __('Lastname') }}</th>
                    <th class="text-left">{{ __('Email') }}</th>
                    <th class="text-left">{{ __('Message') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($event->reservations as $reservation)
                    <tr>
                        <td>{{ $reservation->firstname }}</td>
                        <td>{{ $reservation->lastname }}</td>
                        <td>{{ $reservation->email }}</td>
                        <td>{{ $reservation->message }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </x-card>
    </div>
</x-app-layout>
