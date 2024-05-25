<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="nip" :value="__('NIP')" />
            <x-text-input id="nip" class="block mt-1 w-full" type="text" name="nip" :value="old('nip')"
                required autofocus autocomplete="nip" />
            <x-input-error :messages="$errors->get('nip')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="pangkat" :value="__('Pangkat')" />
            <x-text-input id="pangkat" class="block mt-1 w-full" type="text" name="pangkat" :value="old('pangkat')"
                required autofocus autocomplete="pangkat" />
            <x-input-error :messages="$errors->get('pangkat')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="gol" :value="__('Golongan')" />
            <x-text-input id="gol" class="block mt-1 w-full" type="text" name="gol" :value="old('gol')"
                required autofocus autocomplete="gol" />
            <x-input-error :messages="$errors->get('gol')" class="mt-2" />
        </div>
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="jabatan" :value="__('Jabatan')" />
            <x-text-input id="jabatan" class="block mt-1 w-full" type="text" name="jabatan" :value="old('jabatan')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('jabatan')" class="mt-2" />
        </div>
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
