<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>
    <form method="POST" action="/login">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-label-form for="email">Email</x-label-form>
                        <div class="mt-2">
                            <x-input-form required type="email" name="email" id="email" autocomplete="email" />
                            <x-error-form name="email" />
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <x-label-form for="password">Password</x-label-form>
                        <div class="mt-2">
                            <x-input-form required type="password" name="password" id="password" autocomplete="password" />
                            <x-error-form name="password" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div>
                <a href="/" type="button" class="text-sm px-3 font-semibold leading-6 text-gray-900">Cancel</a>
                <button type="submit" class="rounded-md
                bg-indigo-600 px-3 py-2 text-sm font-semibold
                text-white shadow-sm hover:bg-indigo-500
                focus-visible:outline focus-visible:outline-2
                focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</button>
            </div>

        </div>
    </form>


</x-layout>
