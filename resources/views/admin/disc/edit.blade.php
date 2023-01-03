<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Discography') }}
        </h2>
    </x-slot>

      <div class="admin-content">
        <x-card>
            <x-slot name="header">
                <div class="mb-5">
                    <x-button-link :href="route('admin.disc.index')">{{ __('Back') }}</x-button-link>
                </div>
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
                    <label for="title_field">{{ __('Title') }}</label>
                    <x-input id="title_field" name="title" type="text" value="{{ old('title', $disc->title) }}" />
                </div>
                <div class="mb-3">
                    <label for="subtitle_field">{{ __('Subtitle') }}</label>
                    <x-input id="subtitle_field" name="subtitle" type="text" value="{{ old('subtitle', $disc->subtitle) }}" />
                </div>
                <div class="mb-3">
                    <label for="url_field">{{ __('URL') }}</label>
                    <x-input id="url_field" name="url" type="url" value="{{ old('url', $disc->url) }}" />
                </div>
                <div class="mb-3">
                    <label for="description_field">{{ __('Description') }}</label>
                    <textarea name="description" id="description_field" class="form-control">{{ $disc->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="image_field">{{ __('Image') }}</label>
                    <x-input id="image_field" name="image" type="file" />
                    @if ($disc->image_path) <a href="{{ asset($disc->image_path) }}" target="_blank">{{ __('Open image') }}</a> @endif
                </div>
                <div class="mb-3">
                    <x-button class="btn-primary">{{ __('Validate') }}</x-button>
                </div>
            </form>
        </x-card>
    </div>
</x-app-layout>
