<x-layout>
  <x-slot:heading>
    Job Page
  </x-slot:heading>

  <ul>
    <li>Title: <strong>{{$job['title']}}</strong></li>
    <li>Salary: <strong>{{$job['salary']}}</strong></li>
  </ul>

  <br>

  <a href='/jobs' class="text-blue-300 hover:underline">
    go back to Jobs list
  </a>
</x-layout>