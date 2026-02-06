@props(['name', 'label' => 'Description', 'value' => ''])

<div class="col-span-full">
    <label for="{{ $name }}" class="block text-sm/6 font-medium text-white">{{ $label }}</label>
    <div class="mt-2">
        <textarea id="{{ $name }}" name="{{ $name }}" rows="3"
            class="textarea textarea-primary @error($name) textarea-error @enderror w-full">{{ $value }}</textarea>
        <x-forms.error name="{{ $name }}" />
    </div>
</div>
