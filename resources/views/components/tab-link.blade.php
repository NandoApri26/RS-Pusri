@props(
    [
        'pathName' => Null,
        'link' => Null,
    ]
)
<div
    {{ $attributes->merge(
        [
            'class' => 'flex gap-4 items-center cursor-pointer justify-center pb-20'
            ]
    ) }}
>
    <a href="{{ $link }}" class="px-6 py-2 text-lg text-gray-600 font-semibold bg-sky-500 text-white rounded-md">{{ $pathName }}</a>
    {{ $slot }}
</div>
