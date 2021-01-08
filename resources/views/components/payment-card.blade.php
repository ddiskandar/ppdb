@props([
    'status' => 'pending',
    'colors' => [
        'pending' => 'text-yellow-500',
        'approved' => 'text-green-600',
    ],
    'amount' => '0',
    'date' => 'DD/MM/YYY',
])

<div>
    <div {{ $attributes->merge(['class' => "{$colors[$status]} relative w-full bg-white transition rounded-lg ease-in-out shadow-md "]) }}>
        <div class="flex items-center h-full px-5 py-6">
            {{ $slot }}
            <div class="flex-1 ml-4">
                <div class="mb-4 text-xs font-bold ">
                    @if ($status == 'pending')
                        {{ __('MENUNGGU VERIFIKASI') }}
                    @elseif($status == 'approved')
                        {{ __('BERHASIL') }}
                    @else
                        {{ __('DITOLAK') }}
                    @endif
                    
                </div>
                <div class="text-3xl font-extrabold text-gray-900">
                    Rp. {{ $amount }},-
                </div>
                <div class="text-gray-400">{{ $date }}</div>
                
            </div>
        </div>
        <div class="absolute top-0 right-0 mt-3 mr-3 sm:mt-6 sm:mr-6">
            @if( $status == 'pending')
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            @else
                <svg xmlns="http://www.w3.org/2000/svg" width="20.896" height="20.896"><path data-name="Path 45" d="M7.3 10.448l2.1 2.1 4.2-4.2m6.3 2.1A9.448 9.448 0 1110.448 1a9.448 9.448 0 019.452 9.448z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
            @endif
        </div>
    </div>
</div>