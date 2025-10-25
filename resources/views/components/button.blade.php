@props([
    'disable' => false,
    'bg' => 'dark',
    'type' => 'button',
    'href' => '#',
])
<a href="{{ $href }}" class="btn btn-{{ $bg}}"{{ $disable ? 'disabled': '' }} type="{{ $type }}">
    {{ $slot }}
</a>