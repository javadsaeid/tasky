@props(['active' => false])
<a class="rounded-md px-3 py-2 text-sm text-white font-medium {{ $active ? "bg-gray-900" : ""}} hover:bg-gray-700 hover:text-white" {{ $attributes }}>
    {{ $slot }}
</a>
