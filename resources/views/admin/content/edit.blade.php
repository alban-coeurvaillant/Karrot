<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contents') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-card>
            <x-slot name="header">
                <div>
                    <x-button-link :href="route('admin.content.index')">{{ __('Back') }}</x-button-link>
                </div>
            </x-slot>

            @if ($errors->any())
            <x-alert class="text-red-600">
                @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </x-alert>
            @endif

            <form id="form_edit" action="{{ route('admin.content.update', $content->slug) }}" method="post" enctype="application/x-www-form-urlencoded">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="title_field">{{ __('Title') }}</label>
                    <x-input id="title_field" name="title" type="text" value="{{ old('title', $content->title) }}" />
                </div>
                <div class="mb-3">
                    <label for="content_field">{{ __('Content') }}</label>
                    <div id="content_field" class="rich-editor">{!! $content->content !!}</div>
                    <input name="content" id="content_hidden_field" type="hidden" value="">
                </div>
                <div class="mb-3">
                    <x-button class="btn-primary">{{ __('Validate') }}</x-button>
                </div>
            </form>
        </x-card>
    </div>
</x-app-layout>
