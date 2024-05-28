@props([
    'name' => ''
])

<div class="flex flex-1 gap-2 items-center">
    {{ $slot }}
    <div {{ $attributes->merge([
        'class' => 'text-gray-500'
        ]) }}
    >
        {{ $name }}
    </div>
</div>
