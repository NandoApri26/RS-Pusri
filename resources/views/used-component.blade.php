@extends('templates.user.app')

@section('title', 'User Test')

@section('content')

    <div class="flex justify-center py-8">
        <div class="flex-row">
            <div class="">
                <h1 class="font-bold text-2xl text-center my-4">Breadcrumb</h1>
                <x-bread-crumb />
            </div>
            <div class="pt-12">
                <h1 class="font-bold text-2xl text-center my-4">Title</h1>
                <x-title path-name="Komisaris"/>
            </div>
            <div class="pt-12">
                <h1 class="font-bold text-2xl text-center my-4">Card</h1>
                <x-card
                    name="Kelas Super VIP"
                    title="Ruang Terisi"
                    title2="Ruang Tersedia"
                    unitSold="10"
                    unitReady="20"
                >
                    <x-slot name="button">
                        <button class="bg-blue-500 w-full hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                            Lihat Detail
                        </button>
                    </x-slot>
                </x-card>
            </div>
            <div class="pt-12">
                <h1 class="font-bold text-2xl text-center my-4">Card Detail</h1>
                <x-card
                    name="Kelas Super VIP"
                    title="Fasilitas Ruangan"
                >
                    @for ($i = 0; $i < 10; $i++)
                        <x-icon name="Bed elektrik">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6 12C6.78793 12 7.56815 11.8448 8.2961 11.5433C9.02405 11.2417 9.68549 10.7998 10.2426 10.2426C10.7998 9.68549 11.2417 9.02405 11.5433 8.2961C11.8448 7.56815 12 6.78793 12 6C12 5.21207 11.8448 4.43185 11.5433 3.7039C11.2417 2.97595 10.7998 2.31451 10.2426 1.75736C9.68549 1.20021 9.02405 0.758251 8.2961 0.456723C7.56815 0.155195 6.78793 -1.17411e-08 6 0C4.4087 2.37122e-08 2.88258 0.632141 1.75736 1.75736C0.632141 2.88258 0 4.4087 0 6C0 7.5913 0.632141 9.11742 1.75736 10.2426C2.88258 11.3679 4.4087 12 6 12ZM5.84533 8.42667L9.17867 4.42667L8.15467 3.57333L5.288 7.01267L3.80467 5.52867L2.862 6.47133L4.862 8.47133L5.378 8.98733L5.84533 8.42667Z" fill="#4B5563"/>
                            </svg>
                        </x-icon>
                    @endfor
                </x-card>
            </div>
            <div class="pt-12">
                <h1 class="font-bold text-2xl text-center my-4">Table</h1>
                <table class="w-full bg-sky-600 text-whites">
                    <thead>
                        <tr>
                            <th>Hari</th>
                            <th>Nama</th>
                            <th>Jam Mulai</th>
                            <th>Jam Selesai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td></td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
