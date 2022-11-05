<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gallery') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mb-5">
            <x-button-link :href="route('admin.gallery.create')">{{ __('Create a image') }}</x-button-link>
        </div>
        <div class="d-flex flex-wrap gap-3">
            @forelse ($images as $image)
                <div class="card">
                    <div class="card-body">
                        <a href="{{ asset($image->path) }}" target="_blank"><img src="{{ asset($image->thumbpath) }}" alt="" width="200"></a>
                    </div>
                    <div class="card-footer text-center">
                        <form class="delete-form" action="{{ route('admin.gallery.destroy', $image) }}" method="post" enctype="application/x-www-form-urlencoded">
                            @csrf
                            @method('delete')
                            <x-button class="btn-danger">{{ __('Delete') }}</x-button>
                        </form>
                    </div>
                </div>
            @empty
                {{ __('No image') }}
            @endforelse
        </div>
        
    </div>
</x-app-layout>
