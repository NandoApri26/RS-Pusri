@props(
    [
        'tableClass' => ''
    ]
)
<div
    {{
        $attributes->merge([
            'class' => 'text-left rounded-lg shadow-lg'
        ])
    }}
>
    <table class="{{$tableClass}}">
        {{ $slot }}
    </table>
</div>
