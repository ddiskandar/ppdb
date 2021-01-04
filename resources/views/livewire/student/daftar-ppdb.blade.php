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

            <x-button-submit 
                target="submitForm"
                class="py-3 bg-red-500 hover:bg-red-600 focus:ring-red-200">
                {{ __('Gabung') }}
            </x-button-submit>

            </form>
            
        </div>
    @endif
</div>