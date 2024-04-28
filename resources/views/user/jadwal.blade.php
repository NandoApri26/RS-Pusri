@extends('templates.user.app')

@section('title', 'Jadwal')

@section('content')

    <!-- Breadcrumb -->
    <div class="px-8 pt-24 space-y-10 sm:px-14 sm:pt-40 lg:pt-28 lg:px-28">
        <x-bread-crumb>
            <x-bread-crumb-link
                pathName="Jadwal"
            />
        </x-bread-crumb>
    </div>

    <!-- Tab -->
    <div class="px-8 pt-24 space-y-10 sm:px-14 sm:pt-40 lg:pt-20 lg:px-28">
        <x-tab class="pb-0">
            <x-tab-link
                pathName="Penyakit Dalam"
                link="#penyakitDalam"
            >
                <svg width="3" height="20" viewBox="0 0 2 14" fill="none">
                    <path d="M1 12.8333V1.16667" stroke="#4B5563" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </x-tab-link>
            <x-tab-link
                pathName="Jantung"
                link="#penyakitDalam"
            >
                <svg width="3" height="20" viewBox="0 0 2 14" fill="none">
                    <path d="M1 12.8333V1.16667" stroke="#4B5563" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </x-tab-link>
            <x-tab-link
                pathName="Anak"
                link="#penyakitDalam"
            />
        </x-tab>
    </div>

    <!-- Table -->
    <div class="px-8 pt-24 space-y-10 sm:px-14 sm:pt-40 lg:pt-0 lg:px-28">
        <div class="">
{{--            <div class="">--}}
{{--                <table class="w-full text-left text-xl">--}}
{{--                    <thead class="text-lg text-white uppercase bg-sky-600">--}}
{{--                        <tr class="border-b">--}}
{{--                            <th scope="col" class="px-10 py-2">Hari</th>--}}
{{--                            <th scope="col" class="px-10 py-2">Nama</th>--}}
{{--                            <th scope="col" class="px-10 py-2">Jadwal Mulai</th>--}}
{{--                            <th scope="col" class="px-10 py-2">Jadwal Selesai</th>--}}
{{--                            <th scope="col" class="px-10 py-2"></th>--}}
{{--                        </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                        <tr class="border-b bg-white">--}}
{{--                            <td class="px-10 py-8">Senin</td>--}}
{{--                            <td class="px-10 py-8">dr. Masdianto, SpPD</td>--}}
{{--                            <td class="px-10 py-8">10.00 WIB</td>--}}
{{--                            <td class="px-10 py-8">12.00 WIB</td>--}}
{{--                            <td class="px-10 py-8">--}}
{{--                                <a href="" class="px-6 py-2 bg-sky-600 text-white rounded">Detail</a>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </div>--}}
            <x-table.table tableClass="w-full text-left">
                <x-table.header>
                    <x-table.row class="!bg-sky-500">
                        <x-table.head>Hari</x-table.head>
                        <x-table.head>Nama</x-table.head>
                        <x-table.head>Jam Mulai</x-table.head>
                        <x-table.head>Jam Selesai</x-table.head>
                        <x-table.head></x-table.head>
                    </x-table.row>
                </x-table.header>
                <x-table.body>
                    <x-table.row class="bg-white border-b text-lg text-gray-600">
                        <x-table.data>Senin</x-table.data>
                        <x-table.data>dr. Masdianto, SpPD</x-table.data>
                        <x-table.data>10.00 WIB</x-table.data>
                        <x-table.data>12.00 WIB</x-table.data>
                        <x-table.data>
                            <a href="" class="px-6 py-2 bg-sky-600 text-white rounded">Detail</a>
                        </x-table.data>
                    </x-table.row>
                    <x-table.row class="!bg-gray-100 border-b text-lg text-gray-600">
                        <x-table.data>Senin</x-table.data>
                        <x-table.data>dr. Junaidi, SpPD</x-table.data>
                        <x-table.data>14.00 WIB</x-table.data>
                        <x-table.data>Selesai</x-table.data>
                        <x-table.data>
                            <a href="" class="px-6 py-2 bg-sky-600 text-white rounded">Detail</a>
                        </x-table.data>
                    </x-table.row>
                    <x-table.row class="bg-white border-b text-lg text-gray-600">
                        <x-table.data>Selasa</x-table.data>
                        <x-table.data>dr. Suyata, SpPD</x-table.data>
                        <x-table.data>08.00 WIB</x-table.data>
                        <x-table.data>09.00 WIB</x-table.data>
                        <x-table.data>
                            <a href="" class="px-6 py-2 bg-sky-600 text-white rounded">Detail</a>
                        </x-table.data>
                    </x-table.row>
                    <x-table.row class="!bg-gray-100 border-b text-lg text-gray-600">
                        <x-table.data>Selasa</x-table.data>
                        <x-table.data>dr. Welly Oktaviandi, SpPD</x-table.data>
                        <x-table.data>10.00 WIB</x-table.data>
                        <x-table.data>12.00 WIB</x-table.data>
                        <x-table.data>
                            <a href="" class="px-6 py-2 bg-sky-600 text-white rounded">Detail</a>
                        </x-table.data>
                    </x-table.row>
                    <x-table.row class="bg-white border-b text-lg text-gray-600">
                        <x-table.data>Selasa</x-table.data>
                        <x-table.data>dr. Suyata, SpPD</x-table.data>
                        <x-table.data>14.00 WIB</x-table.data>
                        <x-table.data>Selesai</x-table.data>
                        <x-table.data>
                            <a href="" class="px-6 py-2 bg-sky-600 text-white rounded">Detail</a>
                        </x-table.data>
                    </x-table.row>
                    <x-table.row class="!bg-gray-100 border-b text-lg text-gray-600">
                        <x-table.data>Rabu</x-table.data>
                        <x-table.data>dr. Masdianto, SpPD</x-table.data>
                        <x-table.data>10.00 WIB</x-table.data>
                        <x-table.data>12.00 WIB</x-table.data>
                        <x-table.data>
                            <a href="" class="px-6 py-2 bg-sky-600 text-white rounded">Detail</a>
                        </x-table.data>
                    </x-table.row>
                    <x-table.row class="bg-white border-b text-lg text-gray-600">
                        <x-table.data>Rabu</x-table.data>
                        <x-table.data>dr. Junaidi, SpPD</x-table.data>
                        <x-table.data>14.00 WIB</x-table.data>
                        <x-table.data>Selesai</x-table.data>
                        <x-table.data>
                            <a href="" class="px-6 py-2 bg-sky-600 text-white rounded">Detail</a>
                        </x-table.data>
                    </x-table.row>
                </x-table.body>
            </x-table.table>
        </div>
    </div>
@endsection