@extends('templates.user.app')

@section('title', 'Tenta')

@section('content')

    <div class="px-8 pt-24 space-y-10 sm:px-14 sm:pt-40 lg:pt-28 lg:px-28 xl:pt-40 animate-fade animate-duration-1000 animate-delay-150">
        {{-- bread-crumb --}}
        <x-bread-crumb>
            <x-bread-crumb-link pathName="Tentang Kami" />
        </x-bread-crumb>

        <!-- Profile -->
        <div class="bg-white py-8 px-10 xl:py-10 xl:pb-24 rounded-xl" id="profile">
            <div class="flex justify-center">
                <x-tittle
                    title="PROFILE"
                />
            </div>
            <div class="flex flex-wrap pt-10 gap-5 lg:flex lg:flex-nowrap animate-jump-in animate-duration-1000 animate-delay-200">
                <div class="flex flex-wrap gap-5 justify-center md:flex md:flex-nowrap">
                    <div class="w-full md:w-1/2 bg-sky-300 text-gray-600 shadow-[0px_0px_8px_0px_#00000024] p-8 rounded-xl">
                        <h1 class="flex justify-center text-4xl font-bold">1963</h1>
                        <h2 class="flex mt-5 text-xl text-center font-semibold">
                            Berdiri sebagai klinik kesehatan untuk karyawan dan para pekerja asing yang terlibat dalam pembangunan PT Pusri.
                        </h2>
                    </div>
                    <div class="w-full md:w-1/2 bg-sky-300 text-gray-600 shadow-[0px_0px_8px_0px_#00000024] p-8 rounded-xl">
                        <h1 class="flex justify-center text-4xl font-bold">1973</h1>
                        <h2 class="flex mt-5 text-xl text-center font-semibold">
                            Perluasan layanan menjadi bentuk Rumah Sakit.
                        </h2>
                    </div>
                </div>
                <div class="flex flex-wrap gap-5 md:flex md:flex-nowrap">
                    <div class="w-full md:w-1/2 bg-sky-300 text-gray-600 shadow-[0px_0px_8px_0px_#00000024] p-8 rounded-xl">
                        <h1 class="flex justify-center text-4xl font-bold">2001</h1>
                        <h2 class="flex mt-5 text-xl text-center font-semibold">
                            Spin-off dari PT Pusri menjadi Yayasan Pusri Medika (YPM).
                        </h2>
                    </div>
                    <div class="w-full md:w-1/2 bg-sky-300 text-gray-600 shadow-[0px_0px_8px_0px_#00000024] p-8 rounded-xl">
                        <h1 class="flex justify-center text-4xl font-bold">2006</h1>
                        <h2 class="flex mt-5 text-xl text-center font-semibold">
                            Menjadi PT Graha Pusri Medika, dan beroperasi dengan nama Rumah Sakit Pusri.
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Visi Misi -->
        <div class="pt-10 space-y-10" id="visi-misi">
            <div class="flex justify-center">
                <x-tittle
                    title="VISI MISI"
                />
            </div>

            <div class="flex flex-wrap gap-10 md:flex md:flex-nowrap md:gap-6 xl:gap-12">
                <div class="w-full py-4 lg:w-1/2 bg-white rounded-xl shadow-md animate-fade-right">
                    <div class="px-20 rounded-xl md:px-14">
                        <h1 class="flex border-b-4 border-sky-600 py-4 items-center justify-center font-bold text-xl text-gray-900">VISI</h1>
                        <h2 class="flex h-96 md:h-[353px] font-semibold text-gray-600 text-lg items-center justify-center">
                            Mewujudkan Rumah Sakit Pusri menjadi pilihan utama untuk masyarakat Palembang dan sekitarnya.
                        </h2>
                    </div>
                </div>
                <div class="w-full py-4 lg:w-1/2 bg-white rounded-xl shadow-md animate-fade-left">
                    <div class="px-20 rounded-xl md:px-14">
                        <h1 class="flex border-b-4 border-sky-600 py-4 items-center justify-center font-bold text-xl text-gray-900">MISI</h1>
                        <div class="flex my-10 xl:h-96 font-semibold text-gray-600 text-lg items-center justify-center">
                            <ul class="list-decimal">
                                <li>Memberikan pelayanan kesehatan perumahsakitan kepada karyawan / pensiunan / keluarga PT Pusri dan anak perusahaannya serta masyarakat umum.</li>
                                <li>Menyelenggarakan pelayanan kesehatan perumahsakitan secara profesional dan bermutu.</li>
                                <li>Melakukan pengelolaan Rumah Sakit secara efektif dan efisien dengan tetap memperhatikan fungsi sosial.</li>
                                <li>Melaksanakan kerjasama sinergik dengan instansi/pihak lain secara harmonis dan berkesinambuangan.</li>
                                <li>Meningkatkan profitabilitas perusahaan untuk semakin tumbuh dan berkembangnya Rumah Sakit Pusri.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- TATA NILAI (VALUES) -->
        <div class="pt-10 space-y-10 animate-jump">
            <div class="flex justify-center">
                <x-tittle
                    title="TATA NILAI (VALUES)"
                />
            </div>
            <div class="flex justify-center">
                <h1 class="text-lg font-semibold text-gray-600">Rumah Sakit Pusri menjunjung tinggi <span class="font-bold">FIRST</span> dalam memberikan pelayanan yang terbaik kepada masyarakat :</h1>
            </div>

            <div class="flex flex-wrap gap-5 lg:space-y-8 mt-10 justify-center">
                <div class="flex w-full lg:w-1/2 justify-center gap-5">
                    <x-pelayanan-icon
                        iconName="FAST"
                    >
                        <svg width="57" height="57" viewBox="0 0 29 57" fill="none">
                            <g clip-path="url(#clip0_101_8)">
                                <path d="M28.643 15.0036C29.0314 15.4603 29.1069 15.9627 28.8695 16.5108L11.3919 56.1436C11.1114 56.7145 10.6582 57 10.0325 57C9.94617 57 9.79513 56.9772 9.57936 56.9315C9.21254 56.8173 8.93743 56.6004 8.75402 56.2807C8.57061 55.9609 8.52207 55.6184 8.60838 55.253L14.9845 27.5751L1.84387 31.0349C1.75756 31.0577 1.62809 31.0691 1.45547 31.0691C1.06708 31.0691 0.732631 30.9435 0.452125 30.6923C0.0637319 30.3498 -0.0765211 29.9044 0.0313658 29.3564L6.53695 1.09615C6.62326 0.776442 6.79588 0.513822 7.0548 0.308293C7.31373 0.102764 7.61582 0 7.96105 0H18.5771C18.9871 0 19.3323 0.142728 19.6128 0.428185C19.8933 0.713642 20.0336 1.05048 20.0336 1.4387C20.0336 1.62139 19.9797 1.82692 19.8718 2.05529L14.3372 17.9153L27.1541 14.5583C27.3268 14.5126 27.4562 14.4898 27.5425 14.4898C27.9525 14.4898 28.3193 14.6611 28.643 15.0036Z" fill="#4B5563"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_101_8">
                                    <rect width="29" height="57" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </x-pelayanan-icon>
                    <x-pelayanan-icon
                        iconName="INTEGRITY"
                    >
                        <svg width="57" height="57" viewBox="0 0 75 75" fill="none">
                            <path d="M72.3633 8.98873L60.2666 20.4048L71.838 39.8814L72.3633 39.2284V8.98873ZM2.63672 9.15529V42.2451C3.29297 42.3303 4.08149 42.3774 4.8772 42.3857C6.61597 42.404 8.04917 42.2905 8.85425 42.2181L16.5674 22.7013L2.63672 9.15529ZM59.6417 24.5156L58.6105 25.183C58.5885 25.1972 57.825 25.6717 57.6007 25.8114L56.0473 26.7519L56.0692 26.7651C55.3494 27.2129 55.1493 27.3388 54.3324 27.8461C53.9178 28.1035 53.9076 28.1095 53.5144 28.3537C50.5422 26.756 47.3172 25.528 43.5538 24.5624C38.8206 25.9923 33.8064 28.0616 28.7996 30.0031C30.8782 32.5061 33.1882 33.3211 35.5151 33.3503C38.2134 33.3839 40.9717 32.2106 42.8713 30.8961L43.9553 30.1461L45.0431 31.7178L61.9551 43.9244L68.5633 39.5317L59.6417 24.5156ZM18.5269 24.917L11.8813 41.7315L14.3203 43.6069L18.8313 38.4939L19.1927 38.0845L19.7376 38.0505C19.9573 38.0367 20.1741 38.0303 20.388 38.0315C21.8839 38.0411 23.2213 38.4293 24.2244 39.3147C24.9674 39.9697 25.4613 40.8419 25.7479 41.8518L26.0818 41.831C27.8389 41.7211 29.422 42.0837 30.5687 43.0951C31.7152 44.1069 32.2723 45.6327 32.3821 47.39L32.3924 47.5483C33.3357 47.7264 34.1802 48.0979 34.8669 48.7037C36.0136 49.7153 36.5706 51.2408 36.6804 52.9982L36.7093 53.4552C36.8029 53.4849 36.8957 53.517 36.9876 53.5516L37.2854 53.1337L38.0867 52.009L38.4987 51.4304L39.5725 52.1955L48.2777 58.397C49.2246 58.1635 49.789 57.8001 50.1029 57.359C50.4174 56.9178 50.5765 56.2648 50.4873 55.2926L40.0491 47.8175L38.9771 47.0499L39.7374 45.9885L40.7145 44.6167L41.7882 45.3818L53.556 53.7645C54.5029 53.5311 55.0677 53.1677 55.3816 52.7266C55.6957 52.2857 55.8548 51.6343 55.7662 50.6638L42.2313 41.0618L41.1561 40.2986L42.6816 38.1482L43.7572 38.9111L57.2944 48.5153C58.2422 48.2818 58.8072 47.9184 59.1215 47.4771C59.4362 47.0354 59.5951 46.3819 59.5053 45.408L43.3276 33.7317C41.1809 35.0044 38.4347 36.0239 35.4823 35.987C32.0272 35.9438 28.3314 34.2927 25.6126 30.1203C25.5051 29.9553 25.4359 29.7683 25.4101 29.573C25.3844 29.3778 25.4026 29.1792 25.4637 28.992C25.5247 28.8047 25.6269 28.6335 25.7628 28.4909C25.8986 28.3484 26.0647 28.238 26.2488 28.1681C28.1552 27.4437 30.0813 26.6783 32.012 25.919L18.5272 24.9179L18.5269 24.917ZM20.4168 40.6817L13.4495 48.5786C13.5853 49.5668 13.8948 50.1815 14.3118 50.5494C14.7289 50.9174 15.3775 51.1478 16.3749 51.1594L23.3421 43.2627C23.2063 42.2744 22.8968 41.6594 22.4798 41.2915C22.0627 40.9235 21.4143 40.6932 20.4167 40.6818L20.4168 40.6817ZM26.7608 44.4624L18.8927 53.3804C19.0283 54.3687 19.338 54.9837 19.7549 55.3516C20.1724 55.7193 20.8206 55.9497 21.8181 55.961L29.6862 47.0433C29.5506 46.0548 29.2409 45.4402 28.8239 45.0721C28.407 44.7041 27.7585 44.4737 26.7609 44.4621L26.7608 44.4624ZM31.0586 50.0707L24.0918 57.9677C24.2276 58.9559 24.5372 59.5707 24.9542 59.9388C25.3714 60.3068 26.0199 60.5369 27.0173 60.5485L33.9844 52.6524C33.8486 51.6636 33.5391 51.0488 33.122 50.6807C32.705 50.3127 32.0565 50.0826 31.0589 50.071L31.0586 50.0707ZM34.6771 55.8037L28.9944 62.29C29.1299 63.2802 29.4394 63.8958 29.8569 64.264C30.2736 64.6317 30.9214 64.862 31.9175 64.8738L37.6005 58.3875C37.4648 57.3976 37.1552 56.782 36.7377 56.4135C36.3211 56.0458 35.6733 55.8158 34.6772 55.8038L34.6771 55.8037ZM39.8542 56.5053C40.1023 57.1821 40.2457 57.9321 40.2957 58.7307L40.3296 59.2733L39.1172 60.6573L43.0318 63.4459C43.9787 63.2124 44.543 62.849 44.857 62.4079C45.1712 61.967 45.3306 61.3146 45.242 60.3435L39.8543 56.5056L39.8542 56.5053Z" fill="#4B5563"/>
                        </svg>
                    </x-pelayanan-icon>
                    <x-pelayanan-icon
                        iconName="RESPONSIBLE"
                    >
                        <svg width="57" height="57" viewBox="0 0 64 63" fill="none">
                            <mask id="mask0_101_30" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="6" y="3" width="52" height="59">
                                <path d="M8.375 12.1485L32.0118 5.25L55.625 12.1485V26.2946C55.6249 33.5445 53.3435 40.6105 49.104 46.4916C44.8646 52.3727 38.882 56.7707 32.0039 59.0625C25.1238 56.771 19.1392 52.3724 14.8983 46.49C10.6573 40.6076 8.37511 33.5398 8.375 26.2881V12.1485Z" fill="white" stroke="white" stroke-width="4" stroke-linejoin="round"/>
                                <path d="M20.1875 30.1875L29.375 39.375L45.125 23.625" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                            </mask>
                            <g mask="url(#mask0_101_30)">
                                <path d="M0.5 0H63.5V63H0.5V0Z" fill="#4B5563"/>
                            </g>
                        </svg>
                    </x-pelayanan-icon>
                </div>
                <div class="flex mt-5 w-full lg:w-1/2 justify-center gap-5">
                    <x-pelayanan-icon
                        iconName="SMILE"
                    >
                        <svg width="57" height="57" viewBox="0 0 70 71" fill="none">
                            <path d="M35 53C46.6667 53 49.5833 41.3333 49.5833 41.3333H20.4167C20.4167 41.3333 23.3333 53 35 53Z" fill="#4B5563"/>
                            <path d="M35 6.33334C18.9175 6.33334 5.83334 19.4175 5.83334 35.5C5.83334 51.5825 18.9175 64.6667 35 64.6667C51.0825 64.6667 64.1667 51.5825 64.1667 35.5C64.1667 19.4175 51.0825 6.33334 35 6.33334ZM35 58.8333C22.1346 58.8333 11.6667 48.3654 11.6667 35.5C11.6667 22.6346 22.1346 12.1667 35 12.1667C47.8654 12.1667 58.3333 22.6346 58.3333 35.5C58.3333 48.3654 47.8654 58.8333 35 58.8333Z" fill="#4B5563"/>
                            <path d="M37.9167 35.5L43.75 35.535C43.785 34.1875 44.3158 32.5833 46.6667 32.5833C49.0175 32.5833 49.5483 34.1875 49.5833 35.5H55.4167C55.4167 31.9825 53.0862 26.75 46.6667 26.75C40.2471 26.75 37.9167 31.9825 37.9167 35.5ZM23.3333 32.5833C25.6842 32.5833 26.215 34.1875 26.25 35.5H32.0833C32.0833 31.9825 29.7529 26.75 23.3333 26.75C16.9137 26.75 14.5833 31.9825 14.5833 35.5L20.4167 35.535C20.4517 34.1875 20.9825 32.5833 23.3333 32.5833Z" fill="#4B5563"/>
                        </svg>
                    </x-pelayanan-icon>
                    <x-pelayanan-icon
                        iconName="TOUCH"
                    >
                        <svg width="57" height="57" viewBox="0 0 78 77" fill="none">
                            <path d="M58.25 44.9167H45.4167V57.75H32.5833V44.9167H19.75V32.0833H32.5833V19.25H45.4167V32.0833H58.25M61.4583 9.625H16.5417C12.9804 9.625 10.125 12.4804 10.125 16.0417V60.9583C10.125 62.6601 10.801 64.2922 12.0044 65.4956C13.2078 66.699 14.8399 67.375 16.5417 67.375H61.4583C63.1601 67.375 64.7922 66.699 65.9956 65.4956C67.199 64.2922 67.875 62.6601 67.875 60.9583V16.0417C67.875 14.3399 67.199 12.7078 65.9956 11.5044C64.7922 10.301 63.1601 9.625 61.4583 9.625Z" fill="#4B5563"/>
                        </svg>
                    </x-pelayanan-icon>
                </div>
            </div>
        </div>

        <!-- PEMEGANG SAHAM -->
        <div id="pemegang-saham" class="py-10 space-y-10 animate-jump">
            <div class="flex justify-center">
                <x-tittle
                    title="PEMEGANG SAHAM"
                />
            </div>
            <div class="flex justify-center">
                <div class="w-[210px] bg-white shadow-lg rounded-lg">
                    <figure class="chart-two animate">
                        <svg role="img">
                            <title>[title here]</title>
                            <desc>[long description here]</desc>
                            <circle class="circle-background"/>
                            <circle class="circle-foreground"/>
                        </svg>
                        <figcaption>50%</figcaption>
                    </figure>
                    <div class="flex text-center mb-8">
                        <h1 class="px-5 text-xl text-gray-600 text-wrap font-semibold">Yayasan Kesejahteraaan Karyawan Pusri (YKKP)</h1>
                    </div>
                </div>
                <div class="w-[210px] bg-white shadow-lg rounded-lg">
                    <figure class="chart-two animate background">
                        <svg role="img">
                            <title>[title here]</title>
                            <desc>[long description here]</desc>
                            <circle class="circle-background"/>
                            <circle class="circle-foreground"/>
                        </svg>
                        <figcaption>30%</figcaption>
                    </figure>
                    <div class="flex text-center mb-8">
                        <h1 class="px-5 text-xl text-gray-600 text-wrap font-semibold">Koperasi Karyawan PT Pusri (KKP)</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- STRUKTUR ORGANISASI -->
        <div id="struktur" class="pt-10 pb-32 space-y-10 bg-white rounded-xl cursor-pointer animate-jump-in">
            <div class="flex justify-center">
                <x-tittle
                    title="STRUKTUR ORGANISASI"
                />
            </div>
            <div class="px-10">
                <x-tab>
                    <x-tab-link
                        pathName="KOMISARIS"
                        link="#dewanKomisaris"
                    >
                        <svg width="3" height="20" viewBox="0 0 2 14" fill="none">
                            <path d="M1 12.8333V1.16667" stroke="#4B5563" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </x-tab-link>
                    <x-tab-link
                        linkClass="!bg-white !text-gray-600 hover:!bg-sky-500 hover:!text-white"
                        pathName="DIREKSI"
                    />
                </x-tab>
                <div class="border-l-4 border-sky-600">
                    <h1 class="px-10 text-gray-600 text-5xl">Dewan Komisaris</h1>
                </div>
                <div class="pt-10">
                    <div id="dewanKomisaris" class="flex gap-10">
                        <div class="pt-10 pb-5 space-y-4 bg-white border-2 rounded-xl shadow-xl">
                            <div class="">
                                <img src="{{ asset('assets/organisasi/yusman.png') }}" alt="Yusman.png" class="bg-contain rounded-t-xl">
                            </div>
                            <div class="text-center space-y-2 mx-10">
                                <h1 class="text-2xl text-gray-600 font-semibold">Yusman Arullah ST, MT</h1>
                                <p class="text-xl text-gray-600 italic">Komisaris Utama</p>
                            </div>
                        </div>
                        <div class="pt-10 pb-5 space-y-4 bg-white border-2 rounded-xl shadow-xl">
                            <div class="">
                                <img src="{{ asset('assets/organisasi/syarif.png') }}" alt="Yusman.png" class="bg-contain rounded-t-xl">
                            </div>
                            <div class="text-center space-y-2 mx-10">
                                <h1 class="text-2xl text-gray-600 font-semibold">Ir. Syarif Usman, MBA, MH, CRMP, QIA</h1>
                                <p class="text-xl text-gray-600 italic">Komisaris</p>
                            </div>
                        </div>
                        <div class="pt-10 pb-5 space-y-4 bg-white border-2 rounded-xl shadow-xl">
                            <div class="">
                                <img src="{{ asset('assets/organisasi/Andri.png') }}" alt="Andri.png" class="bg-contain rounded-t-xl">
                            </div>
                            <div class="text-center space-y-2 mx-10">
                                <h1 class="text-2xl text-gray-600 font-semibold">Andri Wibawa Syarip, ST, MT</h1>
                                <p class="text-xl text-gray-600 italic">Komisaris</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
