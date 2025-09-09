<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <h4>Create TODO:</h4>

    <form method="POST" action="/jobs">
      {{-- protection from csrf attacks --}}
      @csrf

      <div class="space-y-12">
        <div class="border-b border-white/10 pb-12">
          <h2 class="text-base/7 font-semibold text-white">Profile</h2>
          <p class="mt-1 text-sm/6 text-gray-400">This information will be displayed publicly so be careful what you share.</p>

          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            {{-- title --}}
            <x-form-field>
                <x-form-label for="title">Title</x-form-label>
                <div class="mt-2">
                  <x-form-input required id="title" type="text" name="title" placeholder="Software Engineer"/>
                    
                  {{-- error --}}
                  <x-form-error accessor="title"/>
                </div>
            </x-form-field>

            {{-- salary --}}
            <div class="sm:col-span-4">
                <x-form-label for="salary">Salary
                </x-form-label>
                <div class="mt-2">
                  <x-form-input required id="salary" type="text" name="salary" placeholder="janesmith"/>
                </div>

                {{-- error --}}
                <x-form-error accessor="salary"/>
              </div>
          </div>

          {{-- $errors->all(): this will always be available in blade --}}
          {{-- <li>
            @foreach ($errors->all() as $error )
              <li class="text-red-500">
                {{ $error }}
              </li>
            @endforeach
          </li> --}}

        </div>
      </div>

      <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="button" class="text-sm/6 font-semibold text-white">Cancel</button>
        <x-form-button>Save</x-form-button>
      </div>
    </form>

</x-layout>