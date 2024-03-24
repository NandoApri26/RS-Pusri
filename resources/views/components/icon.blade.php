@props([
    'name' => ''
])

<div class="flex items-center gap-4">
    {{ $slot }}
    <div {{ $attributes->merge([
        'class' => 'text-base font-medium text-gray-600'
        ]) }}
    >
        {{ $name }}
    </div>
</div>
