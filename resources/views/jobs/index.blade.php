<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <h2 class="text-2xl">This is the JOBS PAGE!</h2>
    <br>

    <ul class="space-y-6">
        {{-- "$jobs" came from "routes" --}}
        @foreach ($jobs as $job)
            <a href="/job/{{$job['id']}}" class="w-full inline-block">
                <li class="p-4 flex flex-col h-auto w-full border rounded-lg">
                    <span class="text-blue-500 font-semibold">{{ $job->employer->name  }}</span>
                    <p>
                        <strong>{{ $job['title'] }}:</strong> with a salary of {{ $job['salary']}}
                    </p>
                </li>
            </a>
        @endforeach
    </ul>

    <div class="mt-5">
        {{ $jobs->links() }}
    </div>
</x-layout>