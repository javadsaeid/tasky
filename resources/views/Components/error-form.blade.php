@props(['name'])

@error($name)
    <p class="text-sm font-bold text-red-500">{{ $message }}</p>
@enderror
