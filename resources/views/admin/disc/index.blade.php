<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Discography') }}
        </h2>
          <x-button-link :href="route('admin.disc.create')">{{ __('Create a disc') }}</x-button-link>
    </x-slot>
    <div class="admin-content">
        <table class="table table-bordered w-100">
            <thead>
            <tr>
                <th>{{ __('Title') }}</th>
                <th >{{ __('URL') }}</th>
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
