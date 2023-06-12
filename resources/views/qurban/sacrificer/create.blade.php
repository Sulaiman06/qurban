<x-guest-layout>
    <form method="POST" action="{{ route('sacrificers.store') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nama')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="alamat" :value="__('Alamat')" />
            <x-text-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" :value="old('alamat')" required autocomplete="alamat" />
            <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="kontak" :value="__('Kontak')" />
            <x-text-input id="kontak" class="block mt-1 w-full" type="number" name="kontak" :value="old('kontak')" required autocomplete="kontak" />
            <x-input-error :messages="$errors->get('kontak')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
           <x-primary-button class="ml-4">
                {{ __('Tambah') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
