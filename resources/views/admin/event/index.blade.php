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
                    <x-button-link :href="route('admin.event.create')">{{ __('Create a event') }}</x-button-link>
                </div>
            </x-slot>
            <table class="table w-full">
                <thead>
                <tr>
                    <th class="text-left">{{ __('Date') }}</th>
                    <th class="text-left">{{ __('Place of event') }}</th>
                    <th class="text-left">{{ __('Time') }}</th>
                    <th class="text-left">{{ __('Online') }}</th>
                    <td></td>
                    <td class="w-28"></td>
                    <td class="w-28"></td>
                </tr>
                </thead>
                <tbody>
                @forelse ($events as $event)
                    <tr>
                        <td>{{ $event->date }}</td>
                        <td>{{ $event->place }}</td>
                        <td>{{ $event->time }}</td>
                        <td><button class="inline-block rounded-full w-5 h-5 @if ($event->online) bg-green-600 @else bg-red-600 @endif"></button></td>
                        <td><x-button-link :href="route('admin.event.show', $event)">{{ __('Show the reservations') }}</x-button-link></td>
                        <td><x-button-link :href="route('admin.event.edit', $event)">{{ __('Modify') }}</x-button-link></td>
                        <td>
                            <form class="delete-form" action="{{ route('admin.event.destroy', $event) }}" method="post" enctype="application/x-www-form-urlencoded">
                                @csrf
                                @method('delete')
                                <x-button>{{ __('Delete') }}</x-button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">{{ __('No event') }}</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </x-card>
    </div>
</x-app-layout>
