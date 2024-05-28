@extends('templates.user.app')

@section('title', 'Dokter')

@section('content')
    <div class="px-8 pt-24 space-y-10 sm:px-14 sm:pt-40 lg:pt-28 lg:px-28 xl:pt-40">
        {{-- bread-crumb --}}
        <x-bread-crumb>
            <x-bread-crumb-link pathName="Dokter" />
        </x-bread-crumb>

        <div class="pt-10 space-y-10">
            <x-tittle
                title="Dokter"
            />
        </div>
    </div>

    <div class="px-8 pt-24 space-y-20 sm:px-14 sm:pt-40 lg:pt-20">
        <div class="flex gap-10">
            <!-- Dokter -->
            <x-card
                class="w-full"
                imgFile="{{ asset('assets/organisasi/andri.png') }}"
                name="dr. Masdianto, SpPD"
                title="Spesialis Penyakit Dalam"
                button="Lihat Detail"
                href="{{ route('detail-dokter') }}"
            />
            <x-card
                class="w-full"
                imgFile="{{ asset('assets/organisasi/syarif.png') }}"
                name="dr. Junaidi, SpPD"
                title="Spesialis Penyakit Dalam"
                button="Lihat Detail"
                href="{{ route('detail-dokter') }}"
            />
            <x-card
                class="w-full"
                imgFile="{{ asset('assets/organisasi/yusman.png') }}"
                name="dr. Edrian Z, SpJP"
                title="Spesialis Jantung dan Pembuluh Darah"
                button="Lihat Detail"
                href="{{ route('detail-dokter') }}"
            />
        </div>
    </div>
@endsection
