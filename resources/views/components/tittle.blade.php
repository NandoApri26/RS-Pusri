@props([
    'divStyle' => '',
    'title' => null,
])
<div class="flex justify-center {{ $divStyle }}">
    <h1
        {{ $attributes->merge([
            'class' => 'text-3xl text-gray-900 font-bold pb-1 border-b border-sky-600 uppercase'
        ]) }}
    >{{ $title }}</h1>
</div>
