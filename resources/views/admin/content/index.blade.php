<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contents') }}
        </h2>
    </x-slot>

      <div class="admin-content">
        <table class="table table-bordered w-100">
            <thead>
            <tr>
                <th class="text-left">{{ __('Title') }}</th>
                <th class="text-left">{{ __('Slug') }}</th>
                <td class="col-action"></td>
            </tr>
            </thead>
            <tbody>
            @forelse ($contents as $content)
                <tr>
                    <td>{{ $content->title }}</td>
                    <td>{{ $content->slug }}</td>
                    <td><x-button-link :href="route('admin.content.edit', $content->slug)">{{ __('Modify') }}</x-button-link></td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">{{ __('No content') }}</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
