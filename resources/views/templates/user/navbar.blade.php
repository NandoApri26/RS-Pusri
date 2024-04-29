<nav class="w-full fixed bg-white shadow-[0px_2px_2px_0px_#00000024] z-50">
    <div class="px-8 lg:h-20 py-4 gap-4 flex flex-col lg:flex-row items-center justify-between sm:justify-center md:mx-12 xl:mx-20 2xl:mx-80 lg:justify-between "
        x-data="{ open: false }"
    >
        <div class="flex w-full lg:w-auto justify-between sm:justify-center">
            <div class="">
                <a href="{{ url('/beranda') }}">
                    <img src="{{ asset('/assets/logo.png') }}" alt="Logo RS Pusri" class="w-64 sm:w-80">
                </a>
            </div>
            <div class="">
                <button
                    x-on:click="open = ! open"
                    class="focus:none focus:ring-2 focus:ring-gray-300 rounded-lg sm:hidden"
                >
                    <span class="sr-only">Open main menu</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M6 7H11C11.2652 7 11.5196 7.10536 11.7071 7.29289C11.8946 7.48043 12 7.73478 12 8C12 8.26522 11.8946 8.51957 11.7071 8.70711C11.5196 8.89464 11.2652 9 11 9H6C5.73478 9 5.48043 8.89464 5.29289 8.70711C5.10536 8.51957 5 8.26522 5 8C5 7.73478 5.10536 7.48043 5.29289 7.29289C5.48043 7.10536 5.73478 7 6 7ZM13 15H18C18.2652 15 18.5196 15.1054 18.7071 15.2929C18.8946 15.4804 19 15.7348 19 16C19 16.2652 18.8946 16.5196 18.7071 16.7071C18.5196 16.8946 18.2652 17 18 17H13C12.7348 17 12.4804 16.8946 12.2929 16.7071C12.1054 16.5196 12 16.2652 12 16C12 15.7348 12.1054 15.4804 12.2929 15.2929C12.4804 15.1054 12.7348 15 13 15ZM6 11H18C18.2652 11 18.5196 11.1054 18.7071 11.2929C18.8946 11.4804 19 11.7348 19 12C19 12.2652 18.8946 12.5196 18.7071 12.7071C18.5196 12.8946 18.2652 13 18 13H6C5.73478 13 5.48043 12.8946 5.29289 12.7071C5.10536 12.5196 5 12.2652 5 12C5 11.7348 5.10536 11.4804 5.29289 11.2929C5.48043 11.1054 5.73478 11 6 11Z" fill="black"/>
                    </svg>
                </button>
            </div>
        </div>
        <div class="hidden sm:block mx-auto lg:mx-0" :class="{ 'hidden': ! open }">
            <div class="w-full xl:w-auto">
                <ul class="flex flex-col sm:flex-row items-center w-full justify-center gap-2 py-8 sm:py-0">
                    <li class="w-full sm:w-auto bg-sky-500 px-6 py-2 sm:px-4 rounded-md text-center font-semibold text-white">
                        <a href="{{ url('/beranda') }}" class="">
                            BERANDA
                        </a>
                    </li>
                    <li x-data="{ open: false }" class="relative">
                        <button class="flex items-center gap-2 cursor-pointer w-full justify-between sm:w-auto px-6 py-2 sm:px-4 rounded-md    font-semibold text-sky-500 text-center hover:bg-sky-500 hover:text-white group"
                            x-on:click="open = ! open"
                        >
                            TENTANG KAMI
                            <svg class="w-3 h-3 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                        <div
                            class="z-10 hidden w-48 bg-white devide-y rounded-lg shadow absolute top-10"
                            :class="{ 'hidden': ! open }"
                        >
                            <ul class="py-2 text-sm text-gray-600">
                                <a href="{{ url('/tentang-kami/#profile') }}">
                                    <li class="block text-gray-600 text-sky-500 font-semibold px-4 py-2 hover:bg-sky-500 hover:text-white">
                                        PROFILE
                                    </li>
                                </a>
                                <a href="#visi-misi">
                                    <li class="block text-gray-600 text-sky-500 font-semibold px-4 py-2 hover:bg-sky-500 hover:text-white">
                                        VISI MISI
                                    </li>
                                </a>
                                <a href="#pemegang-saham">
                                    <li class="block text-gray-600 text-sky-500 font-semibold px-4 py-2 hover:bg-sky-500 hover:text-white">
                                        PEMEGANG SAHAM
                                    </li>
                                </a>
                                <a href="#struktur">
                                    <li class="block text-gray-600 text-sky-500 font-semibold px-4 py-2 hover:bg-sky-500 hover:text-white">
                                        STRUKTUR
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </li>
                    <li x-data="{ open: false }"
                        class="relative"
                    >
                        <button class="flex items-center gap-2 cursor-pointer w-full justify-between sm:w-auto px-6 py-2 sm:px-4 rounded-md    font-semibold text-sky-500 text-center hover:bg-sky-500 hover:text-white group"
                                x-on:click="open = ! open"
                        >
                            LAYANAN
                            <svg class="w-3 h-3 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                        <div
                            class="z-10 hidden w-48 bg-white devide-y rounded-lg shadow absolute top-10"
                            :class="{ 'hidden': ! open }"
                        >
                            <ul class="py-2 text-sm text-gray-600">
                                <a href="{{ url('/layanan') }}">
                                    <li class="block text-gray-600 text-sky-500 font-semibold px-4 py-2 hover:bg-sky-500 hover:text-white">
                                        JADWAL
                                    </li>
                                </a>
                                <a href="{{ url('/rawat-jalan') }}">
                                    <li class="block text-gray-600 text-sky-500 font-semibold px-4 py-2 hover:bg-sky-500 hover:text-white">
                                        RAWAT JALAN
                                    </li>
                                </a>
                                <a href="{{ url('/rawat-inap') }}">
                                    <li class="block text-gray-600 text-sky-500 font-semibold px-4 py-2 hover:bg-sky-500 hover:text-white">
                                        RAWAT INAP
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </li>
                    <li class="w-full sm:w-auto px-6 py-2 sm:px-4 rounded-md font-semibold text-sky-500 text-center hover:bg-sky-500 hover:text-white">
                        <a href="">
                            DOKTER
                        </a>
                    </li>
                    <li class="w-full sm:w-auto px-6 py-2 sm:px-4 rounded-md font-semibold text-sky-500 text-center hover:bg-sky-500 hover:text-white">
                        <a href="">
                            INFORMASI
                        </a>
                    </li>
                    <li class="w-full sm:w-auto px-6 py-2 sm:px-4 rounded-md font-semibold text-sky-500 text-center hover:bg-sky-500 hover:text-white">
                        <a href="">
                            KONTAK
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
