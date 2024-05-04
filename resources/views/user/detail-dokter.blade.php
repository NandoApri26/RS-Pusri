@extends('templates.user.app')

@section('title', 'Dokter')

@section('content')

    <!-- Breadcrumb -->
    <div class="px-8 pt-24 space-y-10 sm:px-14 sm:pt-40 lg:pt-28 lg:px-28">
        <x-bread-crumb>
            <x-bread-crumb-link
                pathName="Dokter"
                classStyle="!bg-transparent !text-gray-600"
                link="{{ route('dokter') }}"
            />
            <x-bread-crumb-link
                pathName="Detail Dokter"
            />
        </x-bread-crumb>
    </div>

    <div class="px-8 pt-24 space-y-10 sm:px-14 sm:pt-40 lg:pt-20 lg:px-28">
        <div class="space-y-4 bg-white shadow-lg pb-8 rounded-xl w-1/2 mx-auto">
            <div class="">
                <img src="{{ asset('assets/organisasi/andri.png') }}" class="object-cover rounded-t-xl w-full">
            </div>
            <div class="px-12 py-5 space-y-8">
                <div class="space-y-2">
                    <div class="space-y-4">
                        <h1 class="text-3xl font-bold text-gray-900">dr. Masdianto, SpPD</h1>
                        <h2 class="text-2xl font-medium text-gray-600 italic">Spesialis Penyakit Dalam</h2>
                    </div>
                    <div class="">
                        <h3 class="text-xl font-bold">Jadwal Dokter</h3>
                        <div class="relative w-full overflow-x-auto rounded-lg mt-4">
                            <x-table.table class="!w-[750px]">
                                <x-table.header>
                                    <x-table.row class="!bg-sky-500">
                                        <x-table.head>Senin</x-table.head>
                                        <x-table.head>Selasa</x-table.head>
                                        <x-table.head>Rabu</x-table.head>
                                        <x-table.head>Kamis</x-table.head>
                                        <x-table.head>Jum'at</x-table.head>
                                        <x-table.head>Sabtu</x-table.head>
                                    </x-table.row>
                                </x-table.header>
                                <x-table.body>
                                    <x-table.row>
                                        <x-table.data>10.00 - 12.00</x-table.data>
                                        <x-table.data>-</x-table.data>
                                        <x-table.data>10.00 - 12.00</x-table.data>
                                        <x-table.data>-</x-table.data>
                                        <x-table.data>10.00 - 12.00</x-table.data>
                                        <x-table.data>-</x-table.data>
                                    </x-table.row>
                                </x-table.body>
                            </x-table.table>
                        </div>
                        <div class="mt-4">
                            <div class="text-xl text-gray-600 font-bold">
                                <h3>Riwayat Pendidikan :</h3>
                            </div>
                            <ul class="text-gray-600 list-disc ml-5 text-lg">
                                <li>Universitas Indonesia - S1</li>
                                <li>Universitas of California - S2</li>
                            </ul>
                        </div>
                        <div class="mt-4">
                            <div class="">
                                <h3 class="text-xl text-gray-600 font-bold">Deskripsi :</h3>
                                <p class="text-lg text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque deleniti excepturi iste laboriosam laborum laudantium maiores, molestias officia officiis optio quae quos sed tenetur unde velit! Ad aut cum id nobis recusandae. Ab at aut corporis delectus perferendis temporibus voluptatibus voluptatum! Asperiores aut beatae culpa eius eligendi et illum maiores maxime modi nemo, odit perspiciatis quibusdam quidem repellat similique veniam voluptas! Architecto assumenda at corporis cumque cupiditate dolores doloribus eaque eius eos ex exercitationem fuga id impedit in ipsum iusto laudantium necessitatibus non obcaecati pariatur perspiciatis qui, quis rem repellendus reprehenderit sed similique temporibus ut vitae voluptatibus! Quia quisquam, sit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
