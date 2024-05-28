@props([
    'iconName' => '',
    'classStyle' => '',
    'widthStyle' => ''
])
<div class="flex flex-col items-center gap-6 w-[94px] lg:w-[130px] {{ $widthStyle }}">
    <div {{ $attributes->merge([
        'class' => 'flex p-6 bg-white border shadow-md justify-center rounded-lg'
    ]) }}>
        {{ $slot }}
    </div>
    <div class="">
        <h1 class="text-lg text-gray-600 font-bold text-center {{ $classStyle }}">{{ $iconName }}</h1>
    </div>
</div>
