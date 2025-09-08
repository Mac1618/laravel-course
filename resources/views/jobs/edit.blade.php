<x-layout>
    <x-slot:heading>
        Edit Job: {{ $job->title }}
    </x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}">
      {{-- protection from csrf attacks --}}
      @csrf
      @method('PATCH')

      <div class="space-y-12">
        <div class="border-b border-white/10 pb-12">
          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            {{-- title --}}
            <div class="sm:col-span-4">
              <label for="title" class="block text-sm/6 font-medium text-white">Title</label>
              <div class="mt-2">
                <div class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                  <input required id="title" type="text" name="title" placeholder="Software Engineer" value="{{ $job->title }}" class="block min-w-0 grow bg-transparent py-1.5 pr-3 pl-1 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" />
                </div>
              </div>
              
              {{-- error --}}
              @error('title')
                <p class="text-red-500">{{ $message }}</p>
              @enderror
            </div>

            {{-- salary --}}
            <div class="sm:col-span-4">
                <label for="salary" class="block text-sm/6 font-medium text-white">Salary</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                    <input required id="salary" type="text" name="salary" placeholder="janesmith" value="{{ $job->salary }}" class="block min-w-0 grow bg-transparent py-1.5 pr-3 pl-1 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" />
                  </div>
                </div>

                {{-- error --}}
                @error('title')
                  <p class="text-red-500">{{ $message }}</p>
                @enderror
              </div>
          </div>

        </div>
      </div>

      <div class="mt-6 flex items-center justify-between gap-x-6">
          <button form="delete-form" class="text-red-500 font-bold">Delete</button>

        <div class="flex justify-between items-center space-x-4">
          <a type="button" href="/" class="text-sm/6 font-semibold text-white">Cancel</a>
          <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Update</button>
        </div>
      </div>
    </form>

    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
      @csrf
      @method("DELETE")
    </form>

</x-layout>