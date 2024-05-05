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
@endsection
