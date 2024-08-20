<x-layout>
    <x-slot:heading>
        About Heading
    </x-slot:heading>
    <h1>Job Details</h1>

    <p class="p-6">
        <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
    </p>
</x-layout>
