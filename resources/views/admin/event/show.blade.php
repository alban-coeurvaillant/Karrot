<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
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

            <div>
                <div>{{ $event->place }}</div>
                <div>{{ $event->date_fr }}</div>
                <div>{{ $event->time }}</div>
            </div>
            <hr class="my-5">
            <table class="table w-full">
                <thead>
                <tr>
                    <th class="text-left">{{ __('Name') }}</th>
                    <th class="text-left">{{ __('Nb seats') }}</th>
                    <th class="text-left">{{ __('Message') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($event->reservations as $reservation)
                    <tr>
                        <td><a href="mailto:{{ $reservation->email }}">{{ $reservation->fullname }}</a></td>
                        <td>{{ $reservation->nb_seats }}</td>
                        <td>{{ $reservation->message }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </x-card>
    </div>
</x-app-layout>
