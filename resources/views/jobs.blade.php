<x-layout>

    <x-slot:heading>
        Jobs page
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{$job['id']}}" class="block px-4 py-6 border light:border-gray-200 dark:border-gray-800 rounded-lg">
                <li><strong>{{$job['title']}}</strong>: Pays {{$job['salary']}} per year</li>
            </a>
        @endforeach
    </div>
</x-layout>
