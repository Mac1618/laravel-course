<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form method="POST" action="/register">
      {{-- protection from csrf attacks --}}
      @csrf

      <div class="space-y-12">
        <div class="border-b border-white/10 pb-12">
          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <x-form-field>
              <x-form-label for="first_name">First Name</x-form-label>
              <div class="mt-2">
                <x-form-input required id="first_name" type="text" name="first_name"/>
                  
                {{-- error --}}
                <x-form-error accessor="first_name"/>
              </div>
            </x-form-field>

            <x-form-field>
              <x-form-label for="last_name">Last Name</x-form-label>
              <div class="mt-2">
                <x-form-input required id="last_name" type="text" name="last_name"/>
              </div>

              {{-- error --}}
              <x-form-error accessor="last_name"/>
            </x-form-field>

            <x-form-field>
              <x-form-label for="email">Email</x-form-label>
              <div class="mt-2">
                <x-form-input required id="email" name="email" type="email"/>
              </div>

              {{-- error --}}
              <x-form-error accessor="email"/>
            </x-form-field>

            <x-form-field>
              <x-form-label for="password">Password</x-form-label>
              <div class="mt-2">
                <x-form-input required id="password" name="password" type="password"/>
              </div>

              {{-- error --}}
              <x-form-error accessor="password"/>
            </x-form-field>
          </div>

        </div>
      </div>

      <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="/" class="inline-block text-sm/6 font-semibold text-white">Cancel</a>
        <x-form-button>Save</x-form-button>
      </div>
    </form>

</x-layout>