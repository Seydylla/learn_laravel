<x-layout>

    <x-slot:heading>
        HoJob page
    </x-slot:heading>

    <h2 class="font-bold text-lg"> {{$job['title']}} </h2>

    <p>
        This pays {{$job['salary']}} per year.
    </p>
</x-layout>
