<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <h2 class="text-2xl">This is the JOBS PAGE!</h2>
    <br>

    <ul>
        {{-- "$jobs" came from "routes" --}}
        @foreach ($jobs as $job)
            <li>
                <a href="/job/{{$job['id']}}" class="text-blue-300 hover:underline">
                    <strong>{{ $job['title'] }}:</strong> with a salary of {{ $job['salary']}}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>