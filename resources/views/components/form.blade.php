@props([
    'submit',
    'successMessage'
])

<div {{ $attributes->merge(['class' => '']) }}>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <form wire:submit.prevent="{{ $submit }}" action="#" method="POST">
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                        {{ $form }}

                    </div>
                </div>
                <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                    @if ($successMessage)
                            <span class="mr-4 text-sm">Data berhasil diperbaharui!</span>
                        @endif
                    {{ $actions }}
                </div>
            </div>
        </form>
    </div>
</div>
