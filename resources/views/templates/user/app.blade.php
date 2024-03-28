<!doctype html>
<html lang="en">
<head>
    @include('templates.user.header')
</head>
<body class="bg-gray-100">

    <div class="">
        @include('templates.user.navbar')
    </div>

    @yield('content')

    <div class="mt-36">
        @include('templates.user.footer')
    </div>

    {{-- Livewire Script --}}
    @livewireScripts

</body>
</html>
