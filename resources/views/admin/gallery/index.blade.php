<x-app-layout>
    <x-slot name="header">
        <h2>{{ __('Gallery') }} </h2>
          <x-button-link :href="route('admin.gallery.create')">{{ __('Create a image') }}</x-button-link>
    </x-slot>

     <div class="admin-content">
        <div class="o-gallery-container">
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
