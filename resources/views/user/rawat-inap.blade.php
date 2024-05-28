@extends('templates.user.app')

@section('title', 'Rawat Inap')

@section('content')
    <div class="px-8 pt-24 space-y-10 sm:px-14 sm:pt-40 lg:pt-28 lg:px-28 xl:pt-40 animate-fade animate-duration-1000 animate-delay-150">
        {{-- bread-crumb --}}
        <x-bread-crumb>
            <x-bread-crumb-link pathName="Ruangan" />
        </x-bread-crumb>

        <div class="pt-10 space-y-10">
            <x-tittle
                title="Pelayanan Rawat Inap"
            />
        </div>
    </div>

    <!-- Table -->
    <div class="px-8 space-y-10 sm:px-14 lg:px-28 xl:pt-20 animate-fade animate-duration-1000 animate-delay-150">
        <div class="relative overflow-x-auto rounded-xl">
            <x-table.table tableClass="w-full text-left">
                <x-table.header>
                    <x-table.row class="!bg-sky-500">
                        <x-table.head>Nama Ruangan</x-table.head>
                        <x-table.head></x-table.head>
                    </x-table.row>
                </x-table.header>
                <x-table.body>
                    <x-table.row class="bg-white border-b text-lg text-gray-600">
                        <x-table.data>Flamboyan</x-table.data>
                        <x-table.data class="flex justify-end">
                            <a href="{{ route('tipe-ruangan') }}" class="px-6 py-1 bg-sky-500 text-white rounded hover:bg-sky-600">Detail</a>
                        </x-table.data>
                    </x-table.row>
                    <x-table.row class="!bg-gray-50 border-b text-lg text-gray-600">
                        <x-table.data>Rasamala</x-table.data>
                        <x-table.data class="flex justify-end">
                            <a href="{{ route('tipe-ruangan') }}" class="px-6 py-1 bg-sky-500 text-white rounded hover:bg-sky-600">Detail</a>
                        </x-table.data>
                    </x-table.row>
                    <x-table.row class="bg-white border-b text-lg text-gray-600">
                        <x-table.data>Angsana</x-table.data>
                        <x-table.data class="flex justify-end">
                            <a href="{{ route('tipe-ruangan') }}" class="px-6 py-1 bg-sky-500 text-white rounded hover:bg-sky-600">Detail</a>
                        </x-table.data>
                    </x-table.row>
                    <x-table.row class="!bg-gray-50 border-b text-lg text-gray-600">
                        <x-table.data>Palm</x-table.data>
                        <x-table.data class="flex justify-end">
                            <a href="{{ route('tipe-ruangan') }}" class="px-6 py-1 bg-sky-500 text-white rounded hover:bg-sky-600">Detail</a>
                        </x-table.data>
                    </x-table.row>
                    <x-table.row class="bg-white border-b text-lg text-gray-600">
                        <x-table.data>Flamboyan</x-table.data>
                        <x-table.data class="flex justify-end">
                            <a href="{{ route('tipe-ruangan') }}" class="px-6 py-1 bg-sky-500 text-white rounded hover:bg-sky-600">Detail</a>
                        </x-table.data>
                    </x-table.row>
                </x-table.body>
            </x-table.table>
        </div>
    </div>
@endsection
