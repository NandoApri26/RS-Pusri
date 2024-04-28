<th
    {{
        $attributes->merge([
            'class' => 'px-10 py-2',
            'scope' => 'col'
        ])
    }}
>
    {{ $slot }}
</th>
