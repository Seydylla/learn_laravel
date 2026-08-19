<x-layout>

    <x-slot:heading>
        Create page
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12 dark:border-white/10">
            <h2 class="text-base/7 font-semibold text-gray-900 dark:text-white">Create anew job</h2>
            <p class="mt-1 text-sm/6 text-gray-600 dark:text-gray-400">We just need usefull details from you.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>
                            <div class="mt-2">
                                <x-form-input id="title" name="title" placeholder="Project manager" required/>

                                <x-form-error name="title" />
                            </div>
                    </x-form-field>

                    <x-form-field>
                        <label for="salary" class="block text-sm/6 font-medium text-gray-900 dark:text-white">Salary</label>
                        <div class="mt-2">
                            <x-form-input id="salary" name="salary" placeholder="$50,000 USD" required/>

                            <x-form-error name="salary" />
                        </div>
                    </x-form-field>
                </div>

            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900 dark:text-white">Cancel</button>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 dark:bg-indigo-500 dark:shadow-none dark:focus-visible:outline-indigo-500">Save</button>
        </div>
    </form>

</x-layout>
