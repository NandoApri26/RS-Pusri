@props([
    'pathName' => Null,
    'className' => '',
])

<div class="">
    <div {{ $attributes->merge(['class' => 'flex items-center gap-3']) }}>
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
            <path d="M10 15.8333V4.16666" stroke="#4B5563" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <a href="" class="text-xl font-semibold px-4 py-1 bg-gray-300 rounded-md {{ $className }}">{{ $pathName }}</a>
    </div>
</div>
