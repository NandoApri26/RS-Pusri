<div
    {{ $attributes->merge(
        [
            'class' => 'flex gap-4 items-center cursor-pointer justify-center pb-20'
            ]
    ) }}
>
    {{ $slot }}
</div>
