<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Discography') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mb-5">
            <x-button-link :href="route('admin.disc.create')">{{ __('Create a disc') }}</x-button-link>
        </div>
        <table class="table table-bordered w-100">
            <thead>
            <tr>
                <th class="text-left">{{ __('Title') }}</th>
                <th class="text-left">{{ __('URL') }}</th>
                <td class="col-action"></td>
                <td class="col-action"></td>
            </tr>
            </thead>
            <tbody>
            @forelse ($discs as $disc)
                <tr>
                    <td>{{ $disc->title }}</td>
                    <td>{{ $disc->url }}</td>
                    <td><x-button-link :href="route('admin.disc.edit', $disc)">{{ __('Modify') }}</x-button-link></td>
                    <td>
                        <form class="delete-form" action="{{ route('admin.disc.destroy', $disc) }}" method="post" enctype="application/x-www-form-urlencoded">
                            @csrf
                            @method('delete')
                            <x-button class="btn-danger">{{ __('Delete') }}</x-button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">{{ __('No disc') }}</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
