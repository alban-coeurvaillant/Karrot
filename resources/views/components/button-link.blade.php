@props(['primary' => true])

@php
    $classes = $primary ? 'btn btn-primary' : 'btn';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
