<div class="overflow-hidden bg-white border-b border-gray-200 shadow sm:rounded-lg">
    <table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
        <tr>
        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
            Jalur
        </th>
        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
            Pendaftaran
        </th>
        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
            Status
        </th>
        </tr>
    </thead>
    <tbody class="divide-y divide-gray-200 ">
        <tr>
        <td class="px-6 py-4 whitespace-nowrap">
            <div class="">
            <div class="">
                <div class="text-sm font-bold text-gray-900">
                    Gelombang {{ $periode_name }}
                </div>
            </div>
            </div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            <div class="text-sm text-gray-900">{{ $periode_desc }}</div>
        </td>
        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
            @if ( Auth::user()->student->ppdb )
                <span class="text-green-500">Sudah Terdaftar</span>
            @else
                    <span class="text-red-500">Belum terdaftar</span>
            @endif
        </td>
        </tr>
    </tbody>
    </table>

    @if ( ! Auth::user()->student->ppdb )
        <div class="py-6 text-center">
            <form wire:submit.prevent="submitForm" action="#" method="post">
            @csrf
            
            <button type="submit" class="inline-flex justify-center py-3 text-sm font-medium text-white bg-red-500 border border-transparent rounded-md shadow-sm w-36 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-200">
                <svg wire:loading wire:target="submitForm" class="w-5 h-5 -ml-1 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                <span wire:loading.remove wire:target="submitForm">{{ __('Gabung')}}</span>
            </button>

            </form>
            
        </div>
    @endif
</div>