<x-guest-layout>
    <form method="POST" action="{{ route('recipients.update', $rec->id) }}">
        @csrf
        @method('PUT')
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nama')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $rec->nama }}" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="alamat" :value="__('Alamat')" />
            <x-text-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" value="{{ $rec->alamat }}" required autocomplete="alamat" />
            <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="kontak" :value="__('Kontak')" />
            <x-text-input id="kontak" class="block mt-1 w-full" type="number" name="kontak" value="{{ $rec->kontak }}" required autocomplete="kontak" />
            <x-input-error :messages="$errors->get('kontak')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
           <x-primary-button class="ml-4">
                {{ __('Ubah') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
