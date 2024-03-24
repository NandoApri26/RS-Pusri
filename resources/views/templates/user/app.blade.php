<!doctype html>
<html lang="en">
<head>
    @include('templates.user.header')
</head>
<body>

    <div class="">
        @include('templates.user.navbar')
    </div>

    @yield('content')

    {{-- Livewire Script --}}
    @livewireScripts

</body>
</html>
