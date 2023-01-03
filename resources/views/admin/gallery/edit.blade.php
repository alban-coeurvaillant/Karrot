<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Gallery') }}
        </h2>
         <x-button-link :href="route('admin.gallery.index')">{{ __('Back') }}</x-button-link>
    </x-slot>

     <div class="admin-content">
        <x-card>
            <x-slot name="header">
           
            </x-slot>

            @if ($errors->any())
            <x-alert class="text-red-600">
                @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </x-alert>
            @endif

            <form action="{{ $action }}" method="post" enctype="multipart/form-data">
                @csrf
                @method($method)
                <div class="mb-3">
                    <label for="file_field">{{ __('Image') }}</label>
                    <x-input id="file_field" name="file" type="file" />
                </div>
                <div class="mb-3">
                    <x-button class="btn-primary">{{ __('Validate') }}</x-button>
                </div>
            </form>
        </x-card>
    </div>
</x-app-layout>
