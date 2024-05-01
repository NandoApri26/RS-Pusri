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

    <div class="px-8 pt-24 space-y-20 sm:px-14 sm:pt-40 lg:pt-28 lg:px-28">

    </div>
@endsection
