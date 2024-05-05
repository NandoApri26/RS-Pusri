@extends('templates.user.app')

@section('title', 'Berita')

@section('content')
    <!-- Breadcrumb -->
    <div class="px-8 pt-24 space-y-10 sm:px-14 sm:pt-40 lg:pt-28 lg:px-28">
        <x-bread-crumb>
            <x-bread-crumb-link
                pathName="Berita"
            />
        </x-bread-crumb>
    </div>

    <div class="pt-10">
        <x-tittle
            title="Berita"
    />

        <!-- Tab -->
    <div class="px-8 pt-24 space-y-10 sm:px-14 sm:pt-40 lg:pt-10 lg:px-28">
        <div class="w-full overflow-x-auto mt-10 pb-8 2xl:justify-center flex">
            <div class="w-[1760px] flex flex-wrap gap-6">
                @for ($i = 0; $i < 8; $i++)
                    <x-card
                        imgFile="{{ asset('assets/Hemodialisis.jpg') }}"
                        class="w-96"
                        name="PEMERIKSAAN USG DAN KONSULTASI GRATIS BULAN JUNI"
                        date="29 Maret 2024"
                        unitSold="Layanan Hemodialisis ini dapat membantu bagi yang mengalami Gagal Ginjal dan memerlukan tindakan cuci darah secara periodik"
                        button="Lihat Selengkapnya"
                        linkButton="{{ route('detail-berita') }}"
                    />
                @endfor
            </div>
        </div>
    </div>
@endsection
