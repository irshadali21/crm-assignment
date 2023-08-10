@props(['active', 'icon'])

@php
    $classes = $active ?? false ? 'nk-menu-link ' : 'nk-menu-link active current-page ';
    $icon_class = $icon ?? false ? '<span class="nk-menu-icon"><em  class="icon ' . $icon . ' "></em></span>' : '';

@endphp
<li class="nk-menu-item">
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {!! @$icon_class !!}
        <span class="nk-menu-text">
            {{ $slot }}
        </span>
    </a>


</li>
