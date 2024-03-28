{{--@props([--}}
{{--    'name' => '',--}}
{{--])--}}

<div class="">
    <div {{ $attributes->merge(['class' => 'flex items-center gap-3']) }}>
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.1516 2.7516C11.3766 2.52663 11.6818 2.40025 12 2.40025C12.3182 2.40025 12.6234 2.52663 12.8484 2.7516L21.2484 11.1516C21.4162 11.3194 21.5304 11.5332 21.5767 11.766C21.623 11.9987 21.5992 12.2399 21.5084 12.4592C21.4176 12.6784 21.2639 12.8658 21.0666 12.9977C20.8693 13.1295 20.6373 13.1999 20.4 13.2H19.2V20.4C19.2 20.7183 19.0736 21.0235 18.8485 21.2485C18.6235 21.4736 18.3183 21.6 18 21.6H15.6C15.2818 21.6 14.9765 21.4736 14.7515 21.2485C14.5264 21.0235 14.4 20.7183 14.4 20.4V16.8C14.4 16.4817 14.2736 16.1765 14.0485 15.9515C13.8235 15.7264 13.5183 15.6 13.2 15.6H10.8C10.4818 15.6 10.1765 15.7264 9.95148 15.9515C9.72644 16.1765 9.60001 16.4817 9.60001 16.8V20.4C9.60001 20.7183 9.47358 21.0235 9.24854 21.2485C9.0235 21.4736 8.71827 21.6 8.40001 21.6H6.00001C5.68175 21.6 5.37653 21.4736 5.15148 21.2485C4.92644 21.0235 4.80001 20.7183 4.80001 20.4V13.2H3.60001C3.36271 13.1999 3.13075 13.1295 2.93346 12.9977C2.73617 12.8658 2.5824 12.6784 2.4916 12.4592C2.4008 12.2399 2.37703 11.9987 2.42331 11.766C2.46959 11.5332 2.58384 11.3194 2.75161 11.1516L11.1516 2.7516Z" fill="#4B5563"/>
        </svg>
        <a href="" class="text-xl font-semibold">Home</a>
        <x-bread-crumb-link pathName="Tentang Kami" />
    </div>
</div>