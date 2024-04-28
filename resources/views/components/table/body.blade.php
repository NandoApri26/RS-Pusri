<tbody
    {{
        $attributes->merge([
            'class' => 'w-full rounded-xl shadow'
        ])
    }}
>
        {{ $slot }}
</tbody>
