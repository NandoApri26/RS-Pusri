@extends('templates.user.app')

@section('title', 'Kontak')

@section('content')
    <!-- Breadcrumb -->
    <div class="px-8 pt-24 space-y-10 sm:px-14 sm:pt-40 lg:pt-28 lg:px-28">
        <x-bread-crumb>
            <x-bread-crumb-link
                pathName="Kontak"
            />
        </x-bread-crumb>
    </div>

    <div class="pt-10">
        <x-tittle
            title="Berita"
        />
    </div>
    <div class="px-8 pt-24 space-y-10 sm:px-14 sm:pt-40 lg:pt-28 lg:px-28">
        <div class="flex flex-col bg-white shadow-lg rounded-xl p-20 space-y-10">
            <div class="flex flex-wrap gap-20">
                <div class="flex-1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.458198365554!2d104.79878577590594!3d-2.9702775970058584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b775af3fb9af5%3A0xc7813879f0309f4a!2sRS%20Pusri%20Palembang!5e0!3m2!1sid!2sid!4v1715014018779!5m2!1sid!2sid" width="600" height="450" style="border: 2px; border-radius: 20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="flex-1">
                    <form action="" class="space-y-4">
                        <div class="space-y-1">
                            <label for="nama" class="text-lg text-gray-600 font-bold">Nama :</label>
                            <input type="text" id="nama" class="w-full border-2 border-gray-300 py-2 px-4 rounded-md" placeholder="masukkan nama">
                        </div>
                        <div class="space-y-1">
                            <label for="email" class="text-lg text-gray-600 font-bold">Email :</label>
                            <input type="email" id="email" class="w-full border-2 border-gray-300 py-2 px-4 rounded-md" placeholder="example@gmail.com">
                        </div>
                        <div class="space-y-1">
                            <label for="pesan" class="text-lg text-gray-600 font-bold">Pesan :</label>
                            <textarea id="pesan" rows="12" class="w-full border-2 border-gray-300 py-2 px-4 rounded-md" placeholder="example@gmail.com"></textarea>
                        </div>
                        <div class="">
                            <button type="submit" class="bg-sky-500 text-xl text-white py-2 px-14 rounded-md hover:bg-sky-600">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="flex flex-wrap gap-10">
                <div class="flex-1">
                    <a href="" class="flex items-start gap-4 bg-white border border-gray-300 rounded-xl p-8 hover:bg-gray-50">
                        <svg width="28" height="28" viewBox="0 0 13 15" fill="none">
                            <path d="M10.7427 10.5761L6.5 14.8188L2.25734 10.5761C1.41823 9.73699 0.846791 8.66789 0.615286 7.50401C0.38378 6.34013 0.502605 5.13373 0.956732 4.03738C1.41086 2.94103 2.1799 2.00396 3.16659 1.34467C4.15328 0.685388 5.31332 0.333496 6.5 0.333496C7.68669 0.333496 8.84672 0.685388 9.83342 1.34467C10.8201 2.00396 11.5891 2.94103 12.0433 4.03738C12.4974 5.13373 12.6162 6.34013 12.3847 7.50401C12.1532 8.66789 11.5818 9.73699 10.7427 10.5761ZM6.5 9.00011C7.20725 9.00011 7.88552 8.71916 8.38562 8.21906C8.88572 7.71897 9.16667 7.04069 9.16667 6.33344C9.16667 5.6262 8.88572 4.94792 8.38562 4.44783C7.88552 3.94773 7.20725 3.66678 6.5 3.66678C5.79276 3.66678 5.11448 3.94773 4.61438 4.44783C4.11429 4.94792 3.83334 5.6262 3.83334 6.33344C3.83334 7.04069 4.11429 7.71897 4.61438 8.21906C5.11448 8.71916 5.79276 9.00011 6.5 9.00011ZM6.5 7.66678C6.14638 7.66678 5.80724 7.5263 5.55719 7.27625C5.30715 7.0262 5.16667 6.68707 5.16667 6.33344C5.16667 5.97982 5.30715 5.64068 5.55719 5.39064C5.80724 5.14059 6.14638 5.00011 6.5 5.00011C6.85362 5.00011 7.19276 5.14059 7.44281 5.39064C7.69286 5.64068 7.83334 5.97982 7.83334 6.33344C7.83334 6.68707 7.69286 7.0262 7.44281 7.27625C7.19276 7.5263 6.85362 7.66678 6.5 7.66678Z" fill="#0283C6"/>
                        </svg>
                        <div class="">
                            <h1 class="text-3xl text-sky-600 font-semibold">Alamat</h1>
                            <h2 class="text-lg text-gray-600">Komp. PT PUSRI, Jl. Mayor Zen Palembang 30118</h2>
                        </div>
                    </a>
                </div>
                <div class="flex-1">
                    <a href="" class="flex items-start gap-4 bg-white border border-gray-300 rounded-xl p-8 hover:bg-gray-50">
                        <svg width="28" height="28" viewBox="0 0 16 16" fill="none">
                            <path d="M15.2 11.6V4.39995C15.2 3.73595 14.664 3.19995 14 3.19995H2.79204C2.12804 3.19995 1.59204 3.73595 1.59204 4.39995V11.6C1.59204 12.264 2.12804 12.8 2.79204 12.8H14C14.664 12.8 15.2 12.264 15.2 11.6ZM14.152 4.31195C14.416 4.57595 14.272 4.84795 14.128 4.98395L10.88 7.95995L14 11.208C14.096 11.32 14.16 11.496 14.048 11.616C13.944 11.744 13.704 11.736 13.6 11.656L10.104 8.67195L8.39204 10.232L6.68804 8.67195L3.19204 11.656C3.08804 11.736 2.84804 11.744 2.74404 11.616C2.63204 11.496 2.69604 11.32 2.79204 11.208L5.91204 7.95995L2.66404 4.98395C2.52004 4.84795 2.37604 4.57595 2.64004 4.31195C2.90404 4.04795 3.17604 4.17595 3.40004 4.36795L8.39204 8.39995L13.392 4.36795C13.616 4.17595 13.888 4.04795 14.152 4.31195Z" fill="#0283C6"/>
                        </svg>
                        <div class="">
                            <h1 class="text-3xl text-sky-600 font-semibold">Email</h1>
                            <h2 class="text-lg text-gray-600">rumahsakit@rspusri.com</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex flex-wrap gap-10">
                <div class="flex-1">
                    <a href="" class="flex items-start gap-4 bg-white border border-gray-300 rounded-xl p-8 hover:bg-gray-50">
                        <svg width="24" height="24" viewBox="0 0 16 16" fill="none">
                            <g clip-path="url(#clip0_150_69)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.88498 0.510903C2.05996 0.336191 2.27006 0.200661 2.50138 0.113293C2.7327 0.0259244 2.97994 -0.0112866 3.22672 0.00412564C3.47351 0.0195378 3.7142 0.0872213 3.93285 0.202691C4.15149 0.31816 4.34311 0.478779 4.49498 0.673903L6.28998 2.9799C6.61898 3.4029 6.73498 3.9539 6.60498 4.4739L6.05798 6.6639C6.0299 6.77734 6.03153 6.89611 6.0627 7.00873C6.09388 7.12136 6.15356 7.22405 6.23598 7.3069L8.69298 9.7639C8.77593 9.84649 8.87879 9.90627 8.99161 9.93745C9.10443 9.96864 9.2234 9.97017 9.33698 9.9419L11.526 9.3949C11.7826 9.33111 12.0504 9.32632 12.3091 9.38088C12.5679 9.43543 12.8109 9.54793 13.02 9.7099L15.326 11.5039C16.155 12.1489 16.231 13.3739 15.489 14.1149L14.455 15.1489C13.715 15.8889 12.609 16.2139 11.578 15.8509C8.93865 14.9235 6.54252 13.4127 4.56798 11.4309C2.58636 9.45665 1.07553 7.06087 0.147983 4.4219C-0.214017 3.3919 0.110983 2.2849 0.850983 1.5449L1.88498 0.510903Z" fill="#0283C6"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_150_69">
                                    <rect width="16" height="16" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                        <div class="">
                            <h1 class="text-3xl text-sky-600 font-semibold">Telepon</h1>
                            <h2 class="text-lg text-gray-600">(0711) 712222, 721313 ext. 3351, 3359</h2>
                        </div>
                    </a>
                </div>
                <div class="flex-1">
                    <a href="" class="flex items-start gap-4 bg-white border border-gray-300 rounded-xl p-8 hover:bg-gray-50">
                        <svg width="28" height="28" viewBox="0 0 17 16" fill="none">
                            <path d="M13.1667 6.00008H12.5V2.66675H5.83337V13.3334H15.1667V8.00008C15.1667 6.89341 14.2734 6.00008 13.1667 6.00008ZM7.16671 4.00008H11.1667V6.00008H7.16671V4.00008ZM9.83337 11.3334H7.16671V8.00008H9.83337V11.3334ZM11.1667 11.3334C10.8 11.3334 10.5 11.0334 10.5 10.6667C10.5 10.3001 10.8 10.0001 11.1667 10.0001C11.5334 10.0001 11.8334 10.3001 11.8334 10.6667C11.8334 11.0334 11.5334 11.3334 11.1667 11.3334ZM11.1667 9.33341C10.8 9.33341 10.5 9.03341 10.5 8.66675C10.5 8.30008 10.8 8.00008 11.1667 8.00008C11.5334 8.00008 11.8334 8.30008 11.8334 8.66675C11.8334 9.03341 11.5334 9.33341 11.1667 9.33341ZM13.1667 11.3334C12.8 11.3334 12.5 11.0334 12.5 10.6667C12.5 10.3001 12.8 10.0001 13.1667 10.0001C13.5334 10.0001 13.8334 10.3001 13.8334 10.6667C13.8334 11.0334 13.5334 11.3334 13.1667 11.3334ZM13.1667 9.33341C12.8 9.33341 12.5 9.03341 12.5 8.66675C12.5 8.30008 12.8 8.00008 13.1667 8.00008C13.5334 8.00008 13.8334 8.30008 13.8334 8.66675C13.8334 9.03341 13.5334 9.33341 13.1667 9.33341ZM3.50004 5.33341C3.05801 5.33341 2.63409 5.50901 2.32153 5.82157C2.00897 6.13413 1.83337 6.55805 1.83337 7.00008V12.3334C1.83337 12.7754 2.00897 13.1994 2.32153 13.5119C2.63409 13.8245 3.05801 14.0001 3.50004 14.0001C3.94207 14.0001 4.36599 13.8245 4.67855 13.5119C4.99111 13.1994 5.16671 12.7754 5.16671 12.3334V7.00008C5.16671 6.78121 5.1236 6.56448 5.03984 6.36228C4.95608 6.16007 4.83332 5.97633 4.67855 5.82157C4.52379 5.66681 4.34006 5.54404 4.13785 5.46028C3.93564 5.37652 3.71891 5.33341 3.50004 5.33341Z" fill="#0283C6"/>
                        </svg>
                        <div class="">
                            <h1 class="text-3xl text-sky-600 font-semibold">Fax</h1>
                            <h2 class="text-lg text-gray-600">(0711) 712071</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
