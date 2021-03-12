<tr>
    <td class="px-3 py-4 pl-6 cursor-pointer whitespace-nowrap" wire:click="detailStudent({{ $item->id }})" @click="slide = true">
        <div class="flex items-center">
            <div class="flex-shrink-0 w-10 h-10">
                <img class="w-10 h-10 rounded-full" src="/images/default-photo.png" alt="">
            </div>
            <div class="ml-4">
                <div class="inline-flex text-sm font-medium text-gray-900 item-center">
                    <span>
                        {{ $item->user->name }}
                    </span>

                    @if ( $item->name_verified )
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2" width="16" height="16" viewBox="0 0 16 16">
                        <path id="Path_56" data-name="Path 56" d="M6.267,3.455a3.066,3.066,0,0,0,1.745-.723,3.066,3.066,0,0,1,3.976,0,3.066,3.066,0,0,0,1.745.723,3.066,3.066,0,0,1,2.812,2.812,3.062,3.062,0,0,0,.723,1.745,3.066,3.066,0,0,1,0,3.976,3.066,3.066,0,0,0-.723,1.745,3.066,3.066,0,0,1-2.812,2.812,3.066,3.066,0,0,0-1.745.723,3.066,3.066,0,0,1-3.976,0,3.066,3.066,0,0,0-1.745-.723,3.066,3.066,0,0,1-2.812-2.812,3.066,3.066,0,0,0-.723-1.745,3.066,3.066,0,0,1,0-3.976,3.066,3.066,0,0,0,.723-1.745A3.066,3.066,0,0,1,6.267,3.455Zm7.44,5.252a1,1,0,1,0-1.414-1.414L9,10.586,7.707,9.293a1,1,0,1,0-1.414,1.414l2,2a1,1,0,0,0,1.414,0l4-4Z" transform="translate(-2 -2)" fill="#059669" fill-rule="evenodd" />
                    </svg>
                    @endif

                </div>
                <div class="text-sm text-gray-500">
                    {{ $item->user->username }}
                </div>
            </div>
        </div>
    </td>
    <td class="px-3 py-4 whitespace-nowrap">
        <div class="text-sm text-gray-900">
            {{ $item->address ?? '-' }}
        </div>
        <div class="text-sm text-gray-500">
            {{ ($item->school_id != 1) ? $item->school->name : $item->school_temp }}
        </div>
    </td>
    <td class="px-3 py-4 whitespace-nowrap">
        <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
            {{ isset($item->ppdb) ? $item->pilihan_kelas() : '-' }}
        </span>
    </td>

    <td class="px-3 py-4 whitespace-nowrap">
        @isset ($item->ppdb->pilihan_satu)
        <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
            1 : {{ $item->pilihan_slug($item->ppdb->pilihan_satu)}}
        </span>
        <span class="inline-flex px-2 ml-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
            2 : {{ $item->pilihan_slug($item->ppdb->pilihan_dua)}}
        </span>
        @endif
    </td>

    <td class="px-3 py-4 text-sm font-medium whitespace-nowrap">
        @if ( isset($item->ppdb))
        @if ( $item->ppdb->join_wa )
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
            <path id="Path_45" data-name="Path 45" d="M8.333,11l1.778,1.778,3.556-3.556M19,11a8,8,0,1,1-8-8A8,8,0,0,1,19,11Z" transform="translate(-2 -2)" fill="none" stroke="#059669" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
        </svg>
        @else
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18">
            <path data-name="Path 130" d="M7.222 10.778L9 9m0 0l1.778-1.778M9 9L7.222 7.222M9 9l1.778 1.778M17 9a8 8 0 11-8-8 8 8 0 018 8z" fill="none" stroke="#be6060" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
        </svg>
        @endif
        @endif
    </td>

    <td class="px-3 py-4 whitespace-nowrap">
        <div class="flex items-center">
            <span>
                <a href="{{ route('student.show', $item->id) }}">
                    <svg class="w-6 h-6 text-gray-300 cursor-pointer hover:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                </a>
            </span>
            <span class="ml-2 ">
                <a href="{{ route('student.pdf', $item->id) }}">
                    <svg class="w-6 h-6 text-gray-300 cursor-pointer hover:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                    </svg>
                </a>
            </span>
        </div>
    </td>

</tr>