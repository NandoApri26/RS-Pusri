@extends('templates.user.app')

@section('title', 'Galeri')

@section('content')
    <!-- Breadcrumb -->
    <div class="px-8 pt-24 space-y-10 sm:px-14 sm:pt-40 lg:pt-28 lg:px-28">
        <x-bread-crumb>
            <x-bread-crumb-link
                pathName="Galeri"
            />
        </x-bread-crumb>
    </div>

    <div class="pt-10">
        <x-tittle
            title="Galeri"
        />
    </div>
    <div class="px-8 pt-24 space-y-10 sm:px-14 sm:pt-40 lg:pt-20 lg:px-28">
        <div class="border-l-4 border-sky-600">
            <h1 class="px-10 text-gray-600 text-5xl">Foto</h1>
            <p class="px-10 text-gray-600 text-xl">Dokumentasi aktivitas pelayanan Rumah Sakit Pusri</p>
        </div>
        <div class="flex flex-wrap space-y-10">
            @for ($i = 0; $i < 4; $i++)
            <div class="flex justify-between gap-10">
                <div class="w-full relative">
                    <img src="{{ asset('assets/ruangan/kelas1.png') }}" alt="" class="w-96 bg-cover bg-center rounded-lg">
{{--                    <h1 class="text-gray-600 text-center text-2xl absolute bottom-10 left-10">Ruang Rawat Inap kelas 1</h1>--}}
                </div>
                <div class="w-full">
                    <img src="{{ asset('assets/ruangan/kelas2.png') }}" alt="" class="w-96 bg-cover bg-center rounded-lg">
                </div>
                <div class="w-full">
                    <img src="{{ asset('assets/ruangan/kelas3.png') }}" alt="" class="w-96 bg-cover bg-center rounded-lg">
                </div>
                <div class="w-full">
                    <img src="{{ asset('assets/image1.jpeg') }}" alt="" class="w-96 bg-cover bg-center rounded-lg">
                </div>
            </div>
            @endfor
        </div>
    </div>
@endsection
