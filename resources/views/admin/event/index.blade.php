<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Events') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mb-5">
            <x-button-link :href="route('admin.event.create')">{{ __('Create a event') }}</x-button-link>
        </div>
        <table class="table table-bordered w-100">
            <thead>
            <tr>
                <th class="text-left">{{ __('Date') }}</th>
                <th class="text-left">{{ __('Place of event') }}</th>
                <th class="text-left">{{ __('Time') }}</th>
                <th class="text-left">{{ __('Reservations') }}</th>
                <th class="text-left">{{ __('Online') }}</th>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            @forelse ($events as $event)
                <tr>
                    <td>{{ $event->date_fr }}</td>
                    <td>{{ $event->place }}</td>
                    <td>{{ $event->time }}</td>
                    <td>
                        {{ $event->reservations_count }} 
                        @if ($event->reservations_count) ({{ $event->reservations_sum_nb_seats }} {{ __('seat(s)') }}) @endif
                    </td>
                    <td class="text-center"><x-toggle-button active="{{ $event->online }}"></x-toggle-button></td>
                    <td><x-button-link :href="route('admin.event.show', $event)">{{ __('Show the reservations') }}</x-button-link></td>
                    <td><x-button-link :href="route('admin.event.edit', $event)">{{ __('Modify') }}</x-button-link></td>
                    <td>
                        <form class="delete-form" action="{{ route('admin.event.destroy', $event) }}" method="post" enctype="application/x-www-form-urlencoded">
                            @csrf
                            @method('delete')
                            <x-button class="btn-danger">{{ __('Delete') }}</x-button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">{{ __('No event') }}</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
