@props([
    'name' => '',
    'unitSold' => Null,
    'unitReady' => Null,
    'title' => Null,
    'title2' => Null,
    'button' => Null,
])
<div {{ $attributes->merge([
        'class' => 'w-96 space-y-4 bg-white shadow-lg pb-8 rounded-xl'
    ])
}}>
    <div class="">
        <img src="{{ asset('assets/image1.jpeg') }}" class="object-cover rounded-t-xl w-full h-60">
    </div>
    <div class="px-8 space-y-8">
        <div class="space-y-2">
            <div class="">
                <h1 class="text-2xl font-bold text-gray-900">{{ $name }}</h1>
            </div>
            <div class="flex justify-between">
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
            {{ $button }}
        @endif
    </div>
</div>
