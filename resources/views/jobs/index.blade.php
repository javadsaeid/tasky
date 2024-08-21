<x-layout>
    <x-slot:heading>
        <div class="flex justify-between">
            <div>Job Listings</div>
            <a href="/jobs/create" style="font-size: 1rem;
             border: 1px solid blueviolet; border-radius: 5px; padding: 0 5px; color: blue;">Create Job</a>
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
