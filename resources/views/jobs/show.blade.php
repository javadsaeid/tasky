<x-layout>
    <x-slot:heading>
        About Heading
    </x-slot:heading>
    <h1>Job Details</h1>

    <div class="p-6">
        <div class="font-bold text-blue-500">{{ $job->employer->name }}</div>
        <strong>{{ $job['title'] }}</strong> <br> Pays {{ $job['salary'] }} per year.
    </div>
    <x-button href="/jobs/{{ $job['id'] }}/edit">Edit Job</x-button>
</x-layout>
