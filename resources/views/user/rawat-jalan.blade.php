@extends('templates.user.app')

@section('title', 'Rawat Jalan')

@section('content')
    <div class="px-8 pt-24 space-y-10 sm:px-14 sm:pt-40 lg:pt-28 lg:px-28">
        {{-- bread-crumb --}}
        <x-bread-crumb>
            <x-bread-crumb-link pathName="Pelayanan Rawat Jalan" />
        </x-bread-crumb>

        <div class="pt-10 space-y-10">
            <x-tittle
                title="Rawat Jalan"
            />
            <div class="flex flex-wrap gap-16">
                <div class="flex-1 bg-white shadow-lg py-16 rounded-xl cursor-pointer">
                    <h2 class="text-xl text-gray-600 text-center font-semibold">Poli Spesialis</h2>
                    <ul class="list-disc mx-24 my-5">
                        <li>
                            <h3>Poli Spesialis</h3>
                            <ul class="list-decimal mx-5">
                                <li class="">Ginjal dan Hipertensi,</li>
                                <li class="">Gastro-Entero-Hepatologi,</li>
                                <li class="">Alergi-Imunologi,</li>
                                <li class="">Paru</li>
                            </ul>
                        </li>
                        <li>Kesehatan Anak</li>
                        <li>Kebidanan dan Penyakit Kandungan</li>
                        <li>
                            <h3>Bedah:</h3>
                            <ul class="list-decimal mx-5">
                                <li>Umum</li>
                                <li>Tulang,</li>
                                <li>Onkologi,</li>
                                <li>Syaraf,</li>
                                <li>Urologi</li>
                            </ul>
                        </li>
                        <li>Jantung dan Pembuluh Darah</li>
                        <li>Penyakit Syaraf</li>
                        <li>THT - KL</li>
                        <li>Mata</li>
                        <li>Kulit dan Kelamin</li>
                    </ul>
                </div>
                <div class="flex-1">
                    <div class="flex-row space-y-10">
                        <div class="py-20 bg-white shadow-md rounded-xl cursor-pointer hover:bg-gray-50">
                            <h1 class="mx-24 text-gray-600 text-xl text-center font-semibold">Klinik Fisioterapi / Rehabilitasi Medik</h1>
                        </div>
                        <div class="py-20 bg-white shadow-md rounded-xl cursor-pointer hover:bg-gray-50">
                            <h1 class="mx-24 text-gray-600 text-xl text-center font-semibold">Klinik Kesehatan Wanita dan Anak</h1>
                        </div>
                        <div class="py-20 bg-white shadow-md rounded-xl cursor-pointer hover:bg-gray-50">
                            <h1 class="mx-24 text-gray-600 text-xl text-center font-semibold">Klinik Gizi</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-10 space-y-10">
            <div class="flex gap-20 items-center">
                <div class="mx-8 space-y-4">
                    <x-tittle
                        divStyle="!justify-start"
                        title="PELAYANAN UNGGULAN"
                    />
                    <p class="text-xl text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aspernatur, dicta doloribus iusto nisi nobis porro sequi sint vitae? Tempore.</p>
                </div>
                <div class="flex gap-10">
                    <x-card
                        class="cursor-pointer w-[350px]"
                        imgFile="{{ asset('assets/Hemodialisis.jpg') }}"
                        name="Hemodialisis"
                        unitSold="Layanan Hemodialisis ini dapat membantu bagi yang mengalami Gagal Ginjal dan memerlukan tindakan cuci darah secara periodik. Ditangani oleh dokter spesialis Ginjal dan tenaga paramedis yang ahli di bidangnya."
                    />
                    <x-card
                        class="cursor-pointer w-[350px]"
                        imgFile="{{ asset('assets/image1.jpeg') }}"
                        name="Medical Check Up"
                        unitSold="Selain melayani Check Up secara umum (General Medical Check Up) juga melayani Medical Check Up untuk Tenaga Kerja Perusahaan, dan Medical Check Up untuk Pelaut (Seafarer)."
                    />
                </div>
            </div>
        </div>
        <div class="flex pt-10 gap-10">
            <div class="flex-1 p-10 bg-white shadow rounded-xl">
                <div class="space-y-10 items-center">
                    <div class="">
                        <x-tittle
                            divStyle="!justify-start"
                            title="PELAYANAN PENUNJANG MEDIK"
                        />
                        <ul class="list-decimal m-5 text-xl text-gray-600">
                            <li>Laboratorium Klinik</li>
                            <li>Radiologi</li>
                        </ul>
                    </div>
                    <div class="">
                        <x-tittle
                            divStyle="!justify-start"
                            title="PEMERIKSAAN DIAGNOSTIK KHUSUS"
                        />
                        <ul class="list-decimal m-5 text-xl text-gray-600">
                            <li>ElectroCardioGrafi (ECG)</li>
                            <li>Echo Cardiografi</li>
                            <li>Electro Enchephalografi (EEG)</li>
                            <li>Ultrasonografi (USG)</li>
                            <li>Treadmill Test</li>
                            <li>Spirometri</li>
                            <li>Audiometri</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex-1 p-10 bg-white shadow rounded-xl">
                <div class="space-y-10 items-center">
                    <div class="">
                        <x-tittle
                            divStyle="!justify-start"
                            title="PELAYANAN PENUNJANG UMUM"
                        />
                        <ul class="list-decimal m-5 text-xl text-gray-600">
                            <li>
                                <h3>Transportasi</h3>
                                <ul class="list-disc mx-5">
                                    <li>
                                        2 unit Ambulance untuk transportasi pasien non gawat darurat dan 1 unit ambulance untuk transportasi gawat darurat (Emergency).
                                    </li>
                                    <li>
                                        1 Unit Mobil Jenazah.
                                    </li>
                                </ul>
                            </li>
                            <li>Dapur & Unit Gizi.</li>
                            <li>Laundry & Linnen.</li>
                            <li>Instalasi Pengolahan Air Limbah (IPAL).</li>
                            <li>Incenerator untuk pembakaran limbah padat medis.</li>
                            <li>Instalasi Pemeliharaan Sarana (IPS).</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
