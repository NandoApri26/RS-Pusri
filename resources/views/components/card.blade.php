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
    'href' => Null,
    'buttonClass' => '',

//    'buttonStyle' => 'cursor-pointer bg-blue-600 py-2 rounded-full text-white text-center hover:bg-blue-500',
])
<div {{ $attributes->merge([
        'class' => 'space-y-4 bg-white shadow-lg pb-8 rounded-xl'
    ])
}}>
    <div class="">
        <img src="{{ $imgFile }}" class="object-cover rounded-t-xl w-full {{ $imgStyle }}">
    </div>
    <div class="px-8 py-5 space-y-8">
        <div class="space-y-2">
            <div class="">
                <a href="" class="text-xl font-bold text-gray-900 {{ $styleName }}">{{ $name }}</a>
            </div>
            <div class="text-sm font-semibold">{{ $date }}</div>
            <div class="flex justify-between gap-10">
                <div class="">
                    <h1 class="text-lg font-semibold text-gray-600">{{ $title }}</h1>
                    <p class="text-base font-medium text-gray-600">{{ $unitSold }}</p>
                </div>
                <div class="">
                    <h1 class="text-lg font-semibold text-gray-600">{{ $title2 }}</h1>
                    <p class="text-base font-medium text-gray-600">{{ $unitReady }}</p>
                </div>
            </div>
            {{ $slot }}
        </div>
        @if($button)
            <div class="cursor-pointer border border-sky-500 bg-sky-500 py-2 rounded-full text-center text-white hover:bg-sky-600 {{ $buttonClass }}">
                <a href="{{ $href }}">{{ $button }}</a>
            </div>
        @endif
    </div>
</div>
