@props(['value', 'class'])
@php
    $classes = $class ?? '';
@endphp
<label {{ $attributes->merge(['class' => $classes ]) }}>
    {{ $value ?? $slot }}
</label>
