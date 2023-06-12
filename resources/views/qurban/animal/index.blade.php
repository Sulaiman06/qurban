<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Hewan Qurban') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex items-center justify-end mt-4">
                <form action="{{ route('animals.create') }}" method="GET">
                    <x-primary-button class="ml-4 mb-4 bg-green-700">
                        {{ __('Tambah Hewan') }}
                    </x-primary-button>
                </form>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="w-full table-auto bg-white">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b border-gray-200">Jenis Hewan</th>
                                <th class="py-2 px-4 border-b border-gray-200">Bobot(kg)</th>
                                <th class="py-2 px-4 border-b border-gray-200">Usia Hewan(tahun)</th>
                                <th class="py-2 px-4 border-b border-gray-200">Action</th>
                            </tr>
                        </thead>
                    @if($anis != null)
                      @foreach ( $anis as $qurban )
                        <tbody class="flex-1">
                            <tr>
                              <td class="py-2 px-4 border-b border-gray-200"><?= $qurban->jenis_hewan ?></td>
                              <td class="py-2 px-4 border-b border-gray-200"><?= $qurban->bobot ?></td>
                              <td class="py-2 px-4 border-b border-gray-200"><?= $qurban->usia_hewan ?></td>
                              <td class="py-2 px-4 border-b border-gray-200">
                              <form action="{{ route('animals.edit', $qurban->id) }}" method="GET">
                                <x-primary-button class="ml-4 mb-4 bg-dark-700">
                                    {{ __('Edit') }}
                                </x-primary-button>
                              </form>
                              <form action="{{ route('animals.destroy', $qurban->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                <x-primary-button class="ml-4 mb-4 bg-red-700">
                                    {{ __('Delete') }}
                                </x-primary-button>
                              </form>
                              </td>
                            </tr>
                        </tbody>
                      @endforeach
                    @elseif
                        <h1>belum ada hewan</h1>
                    @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
