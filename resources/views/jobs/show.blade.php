<x-layout>
  <x-slot:heading>
    Job Page
  </x-slot:heading>

  <ul>
    <li>Title: <strong>{{$job['title']}}</strong></li>
    <li>Salary: <strong>{{$job['salary']}}</strong></li>
  </ul>

  <br>

  
  <div class="flex justify-between">
    <x-button href='/jobs' class="text-blue-300 hover:underline">
      Back
    </x-button>

    <x-button href="/jobs/{{ $job->id }}/edit">
      Edit
    </x-button>
  </div>

</x-layout>