<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Events') }}
        </h2>
         <x-button-link :href="route('admin.event.create')">{{ __('Create a event') }}</x-button-link>
    </x-slot>
      <div class="admin-content">
        <table id="event" class="table table-bordered">
            <thead>
            <tr>
                <th >{{ __('Date') }}</th>
                <th >{{ __('Place of event') }}</th>
                <th >{{ __('Time') }}</th>
                <th>{{ __('Reservations') }}</th>
                <th>{{ __('Remaining seats') }}</th>
                <th>{{ __('Online') }}</th>
                <td class="col-action"></td>
                <td class="col-action"></td>
                <td class="col-action"></td>
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
                    <td>{{ $event->seats }}</td>
                    <td class="text-center"><x-toggle-button active="{{ $event->online }}"></x-toggle-button></td>
                    <td><x-button-link :href="route('admin.event.show', $event)">{{ __('Reservations') }}</x-button-link></td>
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
