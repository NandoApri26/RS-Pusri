@props([
    'pathName' => Null,
])

<div class="">
    <div {{ $attributes->merge(['class' => 'flex items-center gap-3']) }}>
        <a href="" class="text-xl font-semibold px-4 py-1 bg-gray-300 rounded-md">{{ $pathName }}</a>
        <x-title-link pathName="Direktur"/>
    </div>
</div>
