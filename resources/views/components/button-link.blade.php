@props(['href' => '#', 'title' => '', 'text_color' => false, 'background_color' => false])

@php
    $textColor = $text_color ? 'text-blue-500 hover:text-blue-400 active:text-blue-500 w-32' : '';
    $backgroundColor = $background_color
        ? 'bg-blue-500 text-white rounded border hover:bg-blue-400 active:bg-blue-500 w-32'
        : '';
@endphp

<a href="{{ $href }}"
    {{ $attributes->merge(['class' => "text-md py-1 h-full flex items-center justify-center $backgroundColor $textColor"]) }}>
    {{ $slot }}
    <span class="">{{ $title }}</span>
</a>
