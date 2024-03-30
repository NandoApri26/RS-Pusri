@extends('templates.user.app')

@section('title', 'Beranda')

@section('content')

    <div class="px-4 pt-24 sm:px-0 sm:pt-0">
        {{-- Hero Content --}}
        <div class="">
            <img src="{{ asset('assets/image1.jpeg') }}" alt="" class="object-cover w-full rounded-xl sm:rounded-none">
        </div>
    </div>

    <div class="pt-10 px-4 space-y-10 sm:mx-12 sm:pt-20 xl:mx-20 2xl:mx-80">
        {{-- Pelayanan --}}
        <div class="bg-white shadow-xl py-8 px-4 xl:py-10 rounded-xl">
            <div class="flex justify-center">
                <h1 class="text-xl text-gray-900 font-bold pb-2 border-b border-gray-600">PELAYANAN</h1>
            </div>
            <div class="flex flex-wrap gap-5 lg:space-y-8 mt-10 justify-center">
                <div class="flex w-full lg:w-1/2 justify-center">
                    <x-pelayanan-icon
                        iconName="Home Care"
                    >
                        <svg width="42" height="42" viewBox="0 0 24 24" fill="none">
                            <path d="M10.5 14.5V15.5C10.5 15.9167 10.646 16.271 10.938 16.563C11.23 16.855 11.584 17.0007 12 17C12.4167 17 12.771 16.8543 13.063 16.563C13.355 16.2717 13.5007 15.9173 13.5 15.5V14.5H14.5C14.9167 14.5 15.271 14.3543 15.563 14.063C15.855 13.7717 16.0007 13.4173 16 13C16 12.5833 15.8543 12.2293 15.563 11.938C15.2717 11.6467 14.9173 11.5007 14.5 11.5H13.5V10.5C13.5 10.0833 13.3543 9.72933 13.063 9.438C12.7717 9.14667 12.4173 9.00067 12 9C11.5833 9 11.2293 9.146 10.938 9.438C10.6467 9.73 10.5007 10.084 10.5 10.5V11.5H9.5C9.08333 11.5 8.72933 11.646 8.438 11.938C8.14667 12.23 8.00067 12.584 8 13C8 13.4167 8.146 13.771 8.438 14.063C8.73 14.355 9.084 14.5007 9.5 14.5H10.5ZM6 21C5.45 21 4.97933 20.8043 4.588 20.413C4.19667 20.0217 4.00067 19.5507 4 19V10C4 9.68333 4.071 9.38333 4.213 9.1C4.355 8.81667 4.55067 8.58333 4.8 8.4L10.8 3.9C11.15 3.63333 11.55 3.5 12 3.5C12.45 3.5 12.85 3.63333 13.2 3.9L19.2 8.4C19.45 8.58333 19.646 8.81667 19.788 9.1C19.93 9.38333 20.0007 9.68333 20 10V19C20 19.55 19.804 20.021 19.412 20.413C19.02 20.805 18.5493 21.0007 18 21H6ZM6 19H18V10L12 5.5L6 10V19Z" fill="#4B5563"/>
                        </svg>
                    </x-pelayanan-icon>
                    <x-pelayanan-icon
                        iconName="Hemodialisis"
                    >
                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none">
                            <path d="M13.7701 25.6818H19.2301V28.4684H13.7701V25.6818Z" fill="#D0CFCE"/>
                            <path d="M9.33337 11.2636H23.9167V18.5523C23.9167 20.7853 22.4467 22.5948 20.6325 22.5948H19.8363C18.0105 22.9256 18.0863 25.6818 18.0863 25.6818H14.7846C14.7846 25.6818 14.8605 22.9256 13.0346 22.5948H12.6181C10.804 22.5948 9.33337 20.7853 9.33337 18.5523V11.2636ZM29.8002 11.9677H30.628C31.2405 11.9677 31.7375 12.4647 31.7375 13.0778V17.6103C31.7375 18.2228 31.2405 18.7198 30.628 18.7198H29.8002C29.6545 18.7198 29.5102 18.6911 29.3756 18.6353C29.241 18.5795 29.1187 18.4978 29.0157 18.3948C28.9126 18.2918 28.8309 18.1694 28.7752 18.0348C28.7194 17.9002 28.6907 17.756 28.6907 17.6103V13.0778C28.6907 12.4647 29.1877 11.9677 29.8002 11.9677Z" fill="#4B5563"/>
                            <path d="M18.6707 17.9877C18.6875 18.2668 18.6471 18.5464 18.5518 18.8092C18.4566 19.0721 18.3085 19.3127 18.1168 19.5162C17.9251 19.7198 17.6938 19.8819 17.437 19.9927C17.1803 20.1034 16.9036 20.1605 16.624 20.1603C16.3444 20.1602 16.0678 20.1028 15.8112 19.9917C15.5546 19.8807 15.3234 19.7183 15.1319 19.5145C14.9404 19.3108 14.7927 19.07 14.6977 18.807C14.6028 18.544 14.5626 18.2644 14.5798 17.9853C14.5798 17.9853 14.5576 16.5223 16.2831 13.8758C16.2831 13.8758 16.6069 13.3268 16.933 13.8396C18.659 16.4862 18.6707 17.9877 18.6707 17.9877Z" fill="#9BA2AE"/>
                            <path d="M16.625 13.6208C17.9416 14.6819 18.6573 17.801 18.6573 17.801C18.6573 19.3352 17.7543 20.1658 16.625 20.1658C16.625 20.1658 18.8749 18.312 16.625 13.6208Z" fill="#4B5563"/>
                            <path d="M9.82279 10.7946L23.4133 10.7526C23.4133 10.7526 23.8088 7.52675 20.4785 7.48533C17.2527 7.4445 12.4035 7.46433 12.4035 7.46433C12.4035 7.46433 9.67695 7.56817 9.82279 10.7946Z" fill="white"/>
                            <path d="M16.5002 29.1474V31.4417C16.498 32.4412 16.8467 33.4099 17.4856 34.1786C18.1245 34.9474 19.013 35.4674 19.9961 35.6481C21.4895 35.9502 23.0353 35.8686 24.4884 35.4107C25.4324 35.085 26.2284 34.4317 26.7318 33.5692C27.2352 32.7067 27.4126 31.6923 27.2318 30.7102C27.1531 30.2981 27.1094 29.8801 27.1011 29.4607C27.1058 28.6839 27.2735 27.9168 27.5936 27.2091C27.9137 26.5013 28.3789 25.8687 28.959 25.3522C30.1152 24.2643 31.419 22.7074 30.1473 18.7197M9.33337 11.2636V10.2503C9.33337 9.37916 9.67945 8.54367 10.2955 7.92766C10.9115 7.31165 11.747 6.96558 12.6181 6.96558H20.6325C21.5036 6.96558 22.339 7.31157 22.955 7.92746C23.571 8.54334 23.9171 9.37868 23.9173 10.2497V11.2863" stroke="#4B5563" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M30.2138 11.9677V8.11592M13.7703 25.6818H19.2303V28.4684H13.7703V25.6818ZM29.8003 11.9677H30.628C31.2405 11.9677 31.7375 12.4647 31.7375 13.0778V17.6102C31.7375 18.2227 31.2405 18.7197 30.628 18.7197H29.8003C29.6546 18.7197 29.5103 18.6911 29.3757 18.6353C29.2411 18.5795 29.1188 18.4978 29.0157 18.3948C28.9127 18.2918 28.831 18.1694 28.7752 18.0348C28.7195 17.9002 28.6908 17.756 28.6908 17.6102V13.0778C28.6908 12.4647 29.1878 11.9677 29.8003 11.9677Z" stroke="#4B5563" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9.33337 11.2636H23.9167V18.5523C23.9167 20.7853 22.4467 22.5948 20.6325 22.5948H19.8363C18.0105 22.9256 18.0863 25.6818 18.0863 25.6818H14.7846C14.7846 25.6818 14.8605 22.9256 13.0346 22.5948H12.6181C10.804 22.5948 9.33337 20.7853 9.33337 18.5523V11.2636Z" stroke="#4B5563" stroke-width="2" stroke-miterlimit="10"/>
                            <path d="M18.6708 17.9877C18.6877 18.2668 18.6472 18.5464 18.552 18.8092C18.4567 19.0721 18.3087 19.3127 18.1169 19.5162C17.9252 19.7198 17.6939 19.8819 17.4371 19.9927C17.1804 20.1034 16.9037 20.1605 16.6241 20.1603C16.3445 20.1602 16.0679 20.1028 15.8113 19.9917C15.5547 19.8807 15.3235 19.7183 15.1321 19.5145C14.9406 19.3108 14.7928 19.07 14.6978 18.807C14.6029 18.544 14.5628 18.2644 14.5799 17.9853C14.5799 17.9853 14.5577 16.5223 16.2832 13.8758C16.2832 13.8758 16.607 13.3268 16.9331 13.8396C18.6592 16.4862 18.6708 17.9877 18.6708 17.9877Z" stroke="#4B5563" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </x-pelayanan-icon>
                    <x-pelayanan-icon
                        iconName="Medical Check Up"
                    >
                        <svg width="42" height="42" viewBox="0 0 24 24" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.3913 5.14286C9.3913 4.83975 9.50124 4.54906 9.69693 4.33474C9.89262 4.12041 10.158 4 10.4348 4H13.5652C13.842 4 14.1074 4.12041 14.3031 4.33474C14.4988 4.54906 14.6087 4.83975 14.6087 5.14286V5.71429C14.6087 6.01739 14.4988 6.30808 14.3031 6.52241C14.1074 6.73674 13.842 6.85714 13.5652 6.85714H10.4348C10.158 6.85714 9.89262 6.73674 9.69693 6.52241C9.50124 6.30808 9.3913 6.01739 9.3913 5.71429V5.14286ZM15.913 5.14286H16.4348C16.8499 5.14286 17.248 5.32347 17.5416 5.64496C17.8351 5.96645 18 6.40249 18 6.85714V18.2857C18 18.7404 17.8351 19.1764 17.5416 19.4979C17.248 19.8194 16.8499 20 16.4348 20H7.56522C7.1501 20 6.75198 19.8194 6.45844 19.4979C6.16491 19.1764 6 18.7404 6 18.2857V6.85714C6 6.40249 6.16491 5.96645 6.45844 5.64496C6.75198 5.32347 7.1501 5.14286 7.56522 5.14286H8.08696V5.71429C8.08696 6.39627 8.33432 7.05032 8.77462 7.53256C9.21492 8.0148 9.8121 8.28571 10.4348 8.28571H13.5652C14.1879 8.28571 14.7851 8.0148 15.2254 7.53256C15.6657 7.05032 15.913 6.39627 15.913 5.71429V5.14286ZM10.9252 10.7977C10.9252 10.5497 11.1089 10.3497 11.3353 10.3497H12.6657C12.8911 10.3497 13.0748 10.5497 13.0748 10.7977V12.5806H14.7026C14.929 12.5806 15.1117 12.7817 15.1117 13.0297V14.4869C15.1117 14.6057 15.0686 14.7196 14.9918 14.8036C14.9151 14.8877 14.8111 14.9349 14.7026 14.9349H13.0748V16.7177C13.0749 16.7766 13.0644 16.835 13.0439 16.8895C13.0235 16.944 12.9933 16.9935 12.9553 17.0352C12.9173 17.077 12.8722 17.1101 12.8225 17.1326C12.7728 17.1552 12.7195 17.1669 12.6657 17.1669H11.3343C11.2805 17.1669 11.2272 17.1552 11.1775 17.1326C11.1278 17.1101 11.0827 17.077 11.0447 17.0352C11.0067 16.9935 10.9765 16.944 10.9561 16.8895C10.9356 16.835 10.9251 16.7766 10.9252 16.7177V14.9349H9.29739C9.18891 14.9349 9.08486 14.8877 9.00815 14.8036C8.93144 14.7196 8.88835 14.6057 8.88835 14.4869V13.0286C8.88835 12.7806 9.07096 12.5794 9.29739 12.5794H10.9252V10.7977Z" fill="#4B5563"/>
                        </svg>
                    </x-pelayanan-icon>
                    <x-pelayanan-icon
                        iconName="Radiologi"
                    >
                        <svg width="42" height="42" viewBox="0 0 24 24" fill="none">
                            <path d="M15.9691 18.1966C15.9691 18.3979 15.8902 18.591 15.7499 18.7334C15.6095 18.8758 15.4191 18.9557 15.2206 18.9557C15.0221 18.9557 14.8317 18.8758 14.6913 18.7334C14.5509 18.591 14.4721 18.3979 14.4721 18.1966V17.5345H15.9688L15.9691 18.1966ZM13.9942 20H11.8655L11.8688 18.9347H11.1555L11.1545 20H9.02187V17.5345H13.9942V20ZM8.5272 18.1966C8.5272 18.3979 8.44835 18.591 8.308 18.7333C8.16765 18.8756 7.97729 18.9556 7.7788 18.9556C7.58031 18.9556 7.38996 18.8756 7.24961 18.7333C7.10925 18.591 7.03041 18.3979 7.03041 18.1966V17.5345H8.5272V18.1966ZM11.5005 4C11.7544 4.00003 12.0059 4.0508 12.2405 4.1494C12.4751 4.24801 12.6882 4.39251 12.8677 4.57467C13.0472 4.75682 13.1896 4.97306 13.2867 5.21102C13.3838 5.44899 13.4337 5.70403 13.4336 5.96157C13.4337 6.21907 13.3837 6.47407 13.2866 6.71199C13.1895 6.94992 13.0471 7.16611 12.8676 7.34821C12.6881 7.53032 12.475 7.67478 12.2404 7.77334C12.0058 7.8719 11.7544 7.92263 11.5005 7.92263C10.9876 7.92263 10.4957 7.71599 10.133 7.34817C9.77036 6.98035 9.56661 6.48149 9.56661 5.96131C9.56661 5.44114 9.77036 4.94227 10.133 4.57446C10.4957 4.20664 10.9876 4 11.5005 4ZM17 16.77H6V10.2503H17V16.77ZM15.2819 10.7888H7.7599V16.2404H15.2819V10.7888Z" fill="#4B5563"/>
                            <path d="M12.3521 14.2849V14.7359H13.6784C13.7336 14.7359 13.8145 14.7852 13.8145 14.8703C13.8145 15.6383 13.7177 16 13.3101 16C12.8874 16 12.8006 15.0916 12.3521 15.0318V15.9012H11.6433V15.0301C11.1726 15.0656 11.0967 16 10.6573 16C10.25 16 10.1751 15.6383 10.1751 14.8703C10.1751 14.7852 10.2563 14.7359 10.3113 14.7359H11.6431V14.2849H10.2643C10.2263 14.2849 10.1898 14.2699 10.163 14.2433C10.1361 14.2166 10.121 14.1804 10.121 14.1427C10.121 14.105 10.1361 14.0688 10.163 14.0421C10.1898 14.0155 10.2263 14.0005 10.2643 14.0005H11.6431V13.5495H10.0912C10.0532 13.5495 10.0167 13.5345 9.98974 13.5078C9.96282 13.4811 9.9477 13.4448 9.9477 13.4071C9.9477 13.3693 9.96282 13.333 9.98974 13.3063C10.0167 13.2796 10.0532 13.2646 10.0912 13.2646H11.6431V12.8141H10.1864C10.1675 12.8141 10.1489 12.8105 10.1314 12.8033C10.114 12.7962 10.0981 12.7857 10.0848 12.7724C10.0714 12.7592 10.0609 12.7434 10.0536 12.7261C10.0464 12.7088 10.0427 12.6903 10.0428 12.6715C10.0428 12.5935 10.1071 12.5287 10.1864 12.5287H11.6431V12.0785H10.5019C10.4637 12.0785 10.4271 12.0634 10.4002 12.0366C10.3732 12.0099 10.358 11.9735 10.358 11.9356C10.358 11.8978 10.3732 11.8614 10.4002 11.8347C10.4271 11.8079 10.4637 11.7928 10.5019 11.7928H11.6431V11.5438H12.3519V11.7928H13.493C13.5312 11.7928 13.5678 11.8079 13.5948 11.8347C13.6218 11.8614 13.6369 11.8978 13.6369 11.9356C13.6369 11.9735 13.6218 12.0099 13.5948 12.0366C13.5678 12.0634 13.5312 12.0785 13.493 12.0785H12.3519V12.5285H13.8129C13.851 12.5287 13.8874 12.5438 13.9144 12.5705C13.9413 12.5973 13.9565 12.6335 13.9567 12.6713C13.9568 12.69 13.9531 12.7086 13.9458 12.7259C13.9386 12.7433 13.928 12.759 13.9147 12.7723C13.9013 12.7855 13.8854 12.796 13.8679 12.8032C13.8505 12.8103 13.8318 12.8139 13.8129 12.8139H12.3519V13.2644H13.9085C13.9466 13.2644 13.9831 13.2794 14.01 13.3061C14.0369 13.3328 14.0521 13.369 14.0521 13.4068C14.0521 13.4446 14.0369 13.4808 14.01 13.5076C13.9831 13.5343 13.9466 13.5493 13.9085 13.5493H12.3519V14.0002H13.7309C13.7502 13.9995 13.7695 14.0025 13.7876 14.0093C13.8056 14.0161 13.8221 14.0265 13.8361 14.0398C13.85 14.0531 13.8611 14.069 13.8687 14.0866C13.8763 14.1043 13.8802 14.1233 13.8802 14.1425C13.8802 14.1616 13.8763 14.1806 13.8687 14.1983C13.8611 14.2159 13.85 14.2319 13.8361 14.2452C13.8221 14.2584 13.8056 14.2688 13.7876 14.2756C13.7695 14.2824 13.7502 14.2855 13.7309 14.2847L12.3521 14.2849ZM14.1698 9H9.89263C9.11876 9 8.40272 9.40981 8 10.0211H16C15.8086 9.70951 15.5397 9.452 15.2193 9.27321C14.8988 9.09442 14.5374 9.00035 14.1698 9Z" fill="#4B5563"/>
                        </svg>
                    </x-pelayanan-icon>
                </div>
                <div class="flex w-full lg:w-1/2 justify-center">
                    <x-pelayanan-icon
                        iconName="(USG) Ultrasonografi"
                    >
                        <svg width="42" height="42" viewBox="0 0 24 24" fill="none">
                            <path d="M19 20C19 15.3949 17.3221 14.9016 17.0076 11.8641C16.9652 10.5644 17.1008 9.2659 17.4105 8" stroke="#4B5563" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6.59549 3C6.14225 3.20432 5.70501 3.44173 5.28739 3.71029C4.32582 4.58833 5.72243 6.29986 7.16854 6.82757C5.98949 7.45214 5.05509 8.44856 4.51368 9.65864C3.97228 10.8687 3.85492 12.223 4.18024 13.5067C4.50554 14.7902 5.25488 15.9295 6.30926 16.7437C7.36365 17.5577 8.66264 17.9999 10 18" stroke="#4B5563" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8 18V20" stroke="#4B5563" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M19 3C18.3232 6.71163 16.0846 14.0471 9.262 14.98L9.19105 14.9878C8.67276 15.0462 8.15282 14.8934 7.74479 14.5629C7.33676 14.2323 7.07379 13.7507 7.01333 13.2234C6.95285 12.6961 7.09979 12.1659 7.42204 11.7485C7.7443 11.3311 8.21568 11.0604 8.73325 10.9957C12.7244 10.452 14.3175 5.12538 14.5716 3.09399" stroke="#4B5563" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </x-pelayanan-icon>
                    <x-pelayanan-icon
                        iconName="Spirometri"
                    >
                        <svg width="42" height="42" viewBox="0 0 24 24" fill="none">
                            <path d="M8.5 5.5C9.912 5.97 10.548 7.659 10.827 9.523L6.304 12.134L7.304 13.866L11.014 11.725C11.06 13.079 11 14.309 11 15C11 18 10 21 6 21C2 21 2 21 2 17C2 9.5 5.5 4.5 8.5 5.5ZM22.001 17V17.436C21.996 21 21.851 21 18.001 21C14.001 21 13.001 18 13.001 15C13.001 14.309 12.941 13.08 12.987 11.726L16.697 13.866L17.697 12.134L13.174 9.524C13.453 7.659 14.089 5.971 15.501 5.5C18.501 4.5 22.001 9.5 22.001 17ZM13 2V11H11V2H13Z" fill="#4B5563"/>
                        </svg>
                    </x-pelayanan-icon>
                    <x-pelayanan-icon
                        iconName="Audiometri"
                    >
                        <svg width="42" height="42" viewBox="0 0 32 32" fill="none">
                            <path d="M16.063 1.527H16.563C20.821 1.527 23.821 3.719 25.738 6.317C26.6719 7.59129 27.4032 9.00228 27.906 10.5H28.5C28.7653 10.5 29.0196 10.6054 29.2071 10.7929C29.3947 10.9804 29.5 11.2348 29.5 11.5V15.5C29.5001 15.7625 29.3969 16.0144 29.2128 16.2015C29.0287 16.3886 28.7785 16.4958 28.516 16.5V17.031C28.516 18.174 27.904 19.028 27.193 19.585C26.494 20.132 25.643 20.439 25.023 20.468H22.95L20.65 24.588C20.441 24.969 20.23 25.348 20.015 25.726L20.008 25.738L20.001 25.75C19.94 25.851 19.872 25.967 19.798 26.094C18.885 27.653 16.928 31 12.783 31C9.09404 31 6.00004 27.663 6.00004 23.36V14.95C5.76887 14.4022 5.62317 13.8221 5.56804 13.23C5.33804 11.039 5.85004 8.14 7.54804 5.762C9.21104 3.434 11.966 1.676 16.063 1.54V1.527ZM8.00004 17.096V23.36C8.00004 26.754 10.385 29 12.783 29C15.729 29 17.113 26.682 18.087 25.051C18.153 24.941 18.217 24.832 18.281 24.728L18.86 23.691L19.472 22.571C20.12 21.381 20.802 20.13 21.513 18.939C21.704 18.619 21.891 18.314 22.073 18.016C23.368 15.896 24.385 14.231 24.385 11.711C24.385 10.527 23.875 8.559 22.567 6.901C21.291 5.287 19.252 3.958 16.101 3.958C11.211 3.958 8.00004 7.58 8.00004 11.711V14.471L8.03604 14.528C8.25204 14.855 8.52604 15.088 8.84104 15.274C9.16804 15.467 9.52304 15.601 9.91704 15.743L10.008 15.776C10.228 15.854 10.498 15.95 10.754 16.073V10.503C10.7541 10.4563 10.7608 10.4098 10.774 10.365C10.893 8.525 12.722 5.855 16.604 5.855C20.622 5.855 22.448 10.715 22.448 12.585C22.448 13.884 20.515 13.869 20.515 12.585C20.515 10.956 19.008 7.772 16.284 7.772C14.234 7.772 11.918 9.044 11.747 10.422C11.7516 10.4491 11.7539 10.4765 11.754 10.504V12.728C12.988 13.872 19.041 19.481 19.328 19.738C19.648 20.025 19.434 20.358 19.115 20.222C18.828 20.1 12.967 16.269 11.754 15.475V16.871C11.964 17.141 12.104 17.429 12.198 17.699C12.874 17.899 13.386 18.235 13.756 18.642C14.267 19.204 14.48 19.871 14.499 20.407L14.5 20.409V20.563C14.5 20.789 14.482 21 14.45 21.198L14.42 21.567L14.375 21.533C14.2327 22.0719 13.9228 22.5517 13.49 22.903C13.0013 23.2875 12.4034 23.5073 11.782 23.531H11.754V25.337C11.754 25.407 11.771 25.451 11.798 25.487C11.822 25.521 11.868 25.566 11.953 25.615C13.721 25.767 14.446 24.369 15.05 23.205C15.465 22.405 15.822 21.715 16.42 21.715C17.578 21.715 17.769 22.683 17.578 24.009C17.243 26.333 14.792 27.073 13.666 27.073C12.828 27.073 11.632 26.849 11.075 26.182C10.8653 25.9513 10.7507 25.6498 10.754 25.338V20.52C10.6396 20.5038 10.5297 20.4642 10.4313 20.4037C10.3329 20.3431 10.248 20.2629 10.182 20.168C10.0173 19.9258 9.92696 19.6408 9.92204 19.348C9.91444 19.098 9.93863 18.848 9.99404 18.604C10.039 18.394 10.098 18.205 10.147 18.065C10.1045 18.0162 10.0557 17.9732 10.002 17.937C9.89004 17.862 9.69104 17.787 9.24104 17.625C8.81437 17.4805 8.39947 17.3033 8.00004 17.095" fill="#475569"/>
                        </svg>
                    </x-pelayanan-icon>
                    <x-pelayanan-icon
                        iconName="(ECG) Electro Caradio Graphy"
                    >
                        <svg width="42" height="42" viewBox="0 0 24 24" fill="none">
                            <path d="M10.7 12.725L9.85 11.45C9.76667 11.3167 9.65 11.2083 9.5 11.125C9.35 11.0417 9.19167 11 9.025 11H2.475C2.29167 10.5667 2.16667 10.15 2.1 9.75C2.03333 9.35 2 8.93333 2 8.5C2 6.93333 2.525 5.625 3.575 4.575C4.625 3.525 5.93333 3 7.5 3C8.36667 3 9.19167 3.18333 9.975 3.55C10.7583 3.91667 11.4333 4.43333 12 5.1C12.5667 4.43333 13.2417 3.91667 14.025 3.55C14.8083 3.18333 15.6333 3 16.5 3C18.0667 3 19.375 3.525 20.425 4.575C21.475 5.625 22 6.93333 22 8.5C22 8.93333 21.9667 9.35 21.9 9.75C21.8333 10.15 21.7083 10.5667 21.525 11H15.575L13.85 8.45C13.75 8.3 13.621 8.18767 13.463 8.113C13.305 8.03833 13.134 8.00067 12.95 8C12.7333 8 12.546 8.06267 12.388 8.188C12.23 8.31333 12.1173 8.47567 12.05 8.675L10.7 12.725ZM12 21.35L10.55 20.05C8.8 18.4833 7.36667 17.1417 6.25 16.025C5.13333 14.9083 4.25833 13.9 3.625 13H8.425L10.15 15.55C10.25 15.7 10.3793 15.8127 10.538 15.888C10.6967 15.9633 10.8673 16.0007 11.05 16C11.2667 16 11.4543 15.9377 11.613 15.813C11.7717 15.6883 11.884 15.5257 11.95 15.325L13.3 11.25L14.175 12.55C14.2583 12.6833 14.375 12.7917 14.525 12.875C14.675 12.9583 14.8333 13 15 13H20.375C19.7417 13.9 18.8667 14.9083 17.75 16.025C16.6333 17.1417 15.2 18.4833 13.45 20.05L12 21.35Z" fill="#4B5563"/>
                        </svg>
                    </x-pelayanan-icon>
                </div>
            </div>
        </div>

        {{-- Berita --}}
        <div class="pt-10 space-y-10 sm:pt-10">
            <div class="flex justify-center">
                <h1 class="text-xl text-gray-900 font-bold pb-2 border-b border-gray-600">BERITA</h1>
            </div>
            <div class="w-full overflow-x-auto mt-10 pb-8 2xl:justify-center flex">
                <div class="w-[1500px] lg:w-[1760px] lg:gap-12 flex gap-6">
                    @for ($i = 0; $i < 6; $i++)
                        <x-card
                            class="w-96"
                            name="PEMERIKSAAN USG DAN KONSULTASI GRATIS BULAN JUNI"
                            date="29 Maret 2024"
                            unitSold="ULAN JUNI PENUH PROMO! Hai Bumils, ada promo istimewa untuk para bumil nih. Pemeriksaan USG gratis selamat bulan Juni 2022. Catat tempat dan tanggalnya ya..."
                            button="Lihat Selengkapnya"
                        />
                    @endfor
                </div>
            </div>
            <div class="mt-10 flex justify-center">
                <a href="" class="bg-blue-600 text-white font-semibold px-10 py-2 rounded-full cursor-pointer hover:bg-blue-500">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>

@endsection
