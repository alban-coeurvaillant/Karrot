@props(['active' => false])

@php
$class = 'inline-block rounded-circle border-0 ';
$class .= $active ? 'bg-success' : 'bg-danger';
@endphp

<button {{ $attributes->merge(['type' => 'button', 'class' => $class, 'style' => 'width:25px;height:25px;']) }}">
    {{ $slot }}
</button>
