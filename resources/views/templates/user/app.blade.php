<!doctype html>
<html lang="en">
<head>
    @include('templates.user.header')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
