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

    <!-- Detail Dokter -->
    <div class="px-8 pt-24 space-y-10 sm:px-14 lg:px-28">
        <div class="flex flex-wrap gap-8 items-start bg-white p-4 rounded-xl">
            <div class="flex-1">
                <div class="space-y-2">
                    <img src="{{ asset('assets/organisasi/Andri.png') }}" alt="">
                    <div class="text-center">
                        <h1 class="text-xl text-gray-700 font-bold">dr. Masdianto, SpPD</h1>
                        <h2 class="text-gray-600 font-semibold">Spesialis Penyakit Dalam</h2>
                    </div>
                </div>
            </div>
            <div class="flex-1">
                <div class="space-y-2">
                    <div class="space-y-2">
                        <h1 class="text-lg text-gray-700 font-semibold">Jadwal Dokter</h1>
                        <div class="relative overflow-x-auto rounded-t-xl">
                            <x-table.table tableClass="w-full text-left">
                                <x-table.header>
                                    <x-table.row class="!bg-sky-500">
                                        <x-table.head class="text-sm font-medium">Senin</x-table.head>
                                        <x-table.head class="text-sm font-medium">Selasa</x-table.head>
                                        <x-table.head class="text-sm font-medium">Rabu</x-table.head>
                                        <x-table.head class="text-sm font-medium">Kamis</x-table.head>
                                        <x-table.head class="text-sm font-medium">Jum'at</x-table.head>
                                        <x-table.head class="text-sm font-medium">Sabtu</x-table.head>
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
                    </div>
                    <div class="">
                        <h1 class="text-lg text-gray-700 font-semibold">Riwayat Pendidikan:</h1>
                        <ul class="list-disc mx-5">
                            <li>Universitas Indonesia - S1</li>
                            <li>Universitas of California - S2</li>
                        </ul>
                    </div>
                    <div class="">
                        <h1 class="text-lg text-gray-700 font-semibold">Deskripsi:</h1>
                        <p class="text-sm text-gray-700">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae dolores eos error labore nisi provident quam quisquam tempora. Aspernatur, autem blanditiis dignissimos dolorum fuga impedit ipsum minus odio quas, quasi quia quibusdam quo quod tempora unde veniam veritatis? Ab atque consequatur cupiditate dolore ducimus, ipsa magni modi molestias nulla porro quaerat totam vel velit voluptas voluptatem voluptatibus voluptatum! Adipisci aliquid aperiam asperiores beatae cum debitis dolores doloribus ducimus ea error fuga incidunt laborum magnam minima neque placeat possimus quae quaerat, repellat sed similique sint, sit sunt temporibus tenetur totam, vel. Aliquam consequatur consequuntur excepturi libero nemo non odio, perspiciatis quis, repellendus sapiente veritatis voluptatem voluptates! Ab ad, aliquam asperiores at blanditiis consectetur corporis debitis delectus dicta dolorum ducimus enim eos eveniet ex hic ipsam iure laborum magnam molestias mollitia, nesciunt officiis quam, quidem quos reiciendis repellat tempora temporibus unde veniam voluptate? Cupiditate facere itaque, quasi qui tenetur vero. Ea et quam sint. Architecto ducimus earum error esse eum eveniet magni molestiae obcaecati, possimus qui? Aliquam obcaecati, rem. Adipisci consequuntur fuga inventore, laudantium natus sit. Consectetur, corporis deserunt dolores incidunt iure nemo numquam omnis quia ullam unde veniam veritatis, voluptates. Assumenda debitis magni natus nemo nulla optio rem saepe ut voluptatibus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
