<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Penyumbang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center justify-end mt-4">
                <form action="{{ route('contributors.create') }}" method="GET">
                    <x-primary-button class="ml-4 mb-4 bg-green-700">
                        {{ __('Tambah Penyumbang') }}
                    </x-primary-button>
                </form>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="w-full table-auto bg-white">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b border-gray-200">Nama</th>
                                <th class="py-2 px-4 border-b border-gray-200">Alamat</th>
                                <th class="py-2 px-4 border-b border-gray-200">Kontak</th>
                                <th class="py-2 px-4 border-b border-gray-200">Action</th>
                            </tr>
                        </thead>
                      @foreach ( $conts as $qurban )
                        <tbody class="flex-1">
                            <tr>
                              <td class="py-2 px-4 border-b border-gray-200"><?= $qurban->nama ?></td>
                              <td class="py-2 px-4 border-b border-gray-200"><?= $qurban->alamat ?></td>
                              <td class="py-2 px-4 border-b border-gray-200"><?= $qurban->kontak ?></td>
                              <td class="py-2 px-4 border-b border-gray-200">
                              <form action="{{ route('contributors.edit', $qurban->id) }}" method="GET">
                                <x-primary-button class="ml-4 mb-4 bg-green-700">
                                    {{ __('Edit') }}
                                </x-primary-button>
                              </form>
                              <form action="{{ route('contributors.destroy', $qurban->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                <x-primary-button class="ml-4 mb-4 bg-green-700">
                                    {{ __('Delete') }}
                                </x-primary-button>
                              </form>
                              </td>
                            </tr>
                        </tbody>
                      @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
