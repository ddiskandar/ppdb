@props([
    'value',
    'content' => '',
])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }} {!! ( $content == "required" ) ? '<span class="text-sm text-red-600">*</span>' : '' !!}
</label>
