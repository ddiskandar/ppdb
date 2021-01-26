@props([
    'count' => 0,
    'description' => 'Description',
])
<div class="">
    <div class="px-10 py-6 bg-white">
        <div class="flex items-center justify-between">
            <span class="text-3xl font-bold"
                >{{ $count }}
            </span>
            {{ $slot }}
        </div>
        <div>
            {{ $description }}
        </div>
    </div>
</div>