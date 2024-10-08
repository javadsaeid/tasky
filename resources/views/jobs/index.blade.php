<x-layout>
    <x-slot:heading>
        <div class="flex justify-between">
            <div>Job Listings</div>
            <x-button href="/jobs/create">Create Job</x-button>
        </div>
    </x-slot:heading>
    <div class="space-y-3">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded">
                <div class="font-bold text-blue-500">{{ $job->employer->name }}</div>
                <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
                {{ $job->employer->name }}
            </a>
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
