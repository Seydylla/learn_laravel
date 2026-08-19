<x-layout>

    <x-slot:heading>
        Register
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12 dark:border-white/10">

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="first_name">First name</x-form-label>
                            <div class="mt-2">
                                <x-form-input id="first_name" name="first_name" placeholder="Project manager"/>

                                <x-form-error name="first_name" />
                            </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="last_name">Last name</x-form-label>
                            <div class="mt-2">
                                <x-form-input id="last_name" name="last_name" placeholder="Project manager"/>

                                <x-form-error name="last_name" />
                            </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                            <div class="mt-2">
                                <x-form-input id="email" name="email" placeholder="Project manager"/>
                                <x-form-error name="email" />
                            </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                            <div class="mt-2">
                                <x-form-input id="password" name="password" placeholder="Project manager"/>

                                <x-form-error name="password" />
                            </div>
                    </x-form-field>
                </div>

            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900 dark:text-white">Cancel</button>
            <x-form-button>Save</x-form-button>
        </div>
    </form>

</x-layout>
