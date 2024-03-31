@props([
    'pathName' => Null,
])

<div class="">
    <div {{ $attributes->merge(['class' => 'flex items-center gap-3']) }}>
        <svg width="16" height="16" viewBox="0 0 20 20" fill="none">
            <g clip-path="url(#clip0_2022_4)">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.3833 9.11666C13.6174 9.35104 13.7489 9.66875 13.7489 10C13.7489 10.3312 13.6174 10.649 13.3833 10.8833L8.66999 15.5983C8.43549 15.8327 8.11749 15.9643 7.78594 15.9643C7.4544 15.9642 7.13646 15.8324 6.90207 15.5979C6.66769 15.3634 6.53605 15.0454 6.53613 14.7139C6.53621 14.3823 6.66799 14.0644 6.90249 13.83L10.7325 10L6.90249 6.17C6.67468 5.93435 6.54853 5.61866 6.55123 5.29091C6.55392 4.96316 6.68523 4.64958 6.91688 4.41771C7.14854 4.18584 7.46199 4.05423 7.78974 4.05123C8.11748 4.04823 8.4333 4.17408 8.66916 4.40166L13.3842 9.11583L13.3833 9.11666Z" fill="#4B5563"/>
            </g>
            <defs>
                <clipPath id="clip0_2022_4">
                    <rect width="20" height="20" fill="white"/>
                </clipPath>
            </defs>
        </svg>
        <a href="" class="text-xl font-semibold px-4 py-1 bg-sky-500 text-white rounded-md">{{ $pathName }}</a>
    </div>
</div>
