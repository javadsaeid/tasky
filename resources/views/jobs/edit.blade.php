<x-layout>
    <x-slot:heading>
        Edit Job: {{ $job->title }}
    </x-slot:heading>
    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method("PATCH")
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">edit job</h2>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-label-form for="title">Title</x-label-form>
                        <div class="mt-2">
                            <x-input-form value="{{ $job->title }}" type="text" name="title" id="title" autocomplete="title" placeholder="Team Lead" />
                            <x-error-form name="title" />
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <x-label-form for="salary">Salary</x-label-form>
                        <div class="mt-2">
                            <x-input-form value="{{ $job->salary }}" type="text" name="salary" id="salary" autocomplete="salary" />
                            <x-error-form name="salary" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div>
                <button type="submit" class="rounded-md
                bg-red-600 px-3 py-2 text-sm font-semibold
                text-white shadow-sm hover:bg-red-500
                focus-visible:outline focus-visible:outline-2
                focus-visible:outline-offset-2 focus-visible:outline-red-600" form="delete-job">Delete</button>
            </div>
            <div>
                <a href="/jobs/{{ $job->id }}" type="button" class="text-sm px-3 font-semibold leading-6 text-gray-900">Cancel</a>
                <button type="submit" class="rounded-md
                bg-indigo-600 px-3 py-2 text-sm font-semibold
                text-white shadow-sm hover:bg-indigo-500
                focus-visible:outline focus-visible:outline-2
                focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
            </div>

        </div>
    </form>

    <form method="POST" id="delete-job" action="/jobs/{{ $job->id }}">
        @csrf
        @method('DELETE')
    </form>

</x-layout>
