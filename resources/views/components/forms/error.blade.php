@props(['name'])

@error($name)
    <p class="text-error mt-2 text-sm">{{ $message }}</p>
@enderror
