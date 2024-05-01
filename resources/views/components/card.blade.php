@props([
    'name' => '',
    'styleName' => '',
    'imgStyle' => '',
    'date' => Null,
    'unitSold' => Null,
    'unitReady' => Null,
    'title' => Null,
    'title2' => Null,
    'button' => Null,
    'imgFile' => Null,
    'linkButton' => Null,

//    'buttonStyle' => 'cursor-pointer bg-blue-600 py-2 rounded-full text-white text-center hover:bg-blue-500',
])
<div {{ $attributes->merge([
        'class' => 'space-y-4 bg-white shadow-lg pb-8 rounded-xl'
    ])
}}>
    <div class="">
        <img src="{{ $imgFile }}" class="object-cover rounded-t-xl w-full {{ $imgStyle }}">
    </div>
    <div class="px-12 py-5 space-y-8">
        <div class="space-y-2">
            <div class="">
                <a href="" class="text-2xl font-bold text-gray-900 {{ $styleName }}">{{ $name }}</a>
            </div>
            <div class="text-xs font-semibold">{{ $date }}</div>
            <div class="flex justify-between gap-10">
                <div class="">
                    <h1 class="text-xl font-semibold text-gray-600">{{ $title }}</h1>
                    <p class="text-base font-medium text-gray-600">{{ $unitSold }}</p>
                </div>
                <div class="">
                    <h1 class="text-xl font-semibold text-gray-600">{{ $title2 }}</h1>
                    <p class="text-base font-medium text-gray-600">{{ $unitReady }}</p>
                </div>
            </div>
            {{ $slot }}
        </div>
        @if($button)
            <div class="cursor-pointer bg-blue-600 py-2 rounded-full text-white text-center hover:bg-blue-500">
                <a href="{{ $linkButton }}">{{ $button }}</a>
            </div>
        @endif
    </div>
</div>
