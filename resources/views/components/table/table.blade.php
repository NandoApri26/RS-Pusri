@props(
    [
        'tableClass' => ''
    ]
)
<div
    {{
        $attributes->merge([
            'class' => 'relative overflow-x-auto rounded-xl shadow-lg'
        ])
    }}
>
    <table class="{{$tableClass}}">
        {{ $slot }}
    </table>
</div>
