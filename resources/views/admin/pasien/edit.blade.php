<x-app-layout>
    <div class="py-12 mt-2">

        <form method="POST" action="{{ route('admin.pasien.update', $pasien->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-5">
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                <input type="text" id="nama" name="nama" value="{{ $pasien->nama }}" autofocus
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="Masukkan nama lengkap" required>
                <x-input-error :messages="$errors->get('nama')" class="mt-2" />
            </div>

            <div class="mb-5">
                <label for="no_hp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No HP</label>
                <input type="text" id="no_hp" name="no_hp" value="{{ $pasien->no_hp }}"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="Masukkan No HP" required>
                <x-input-error :messages="$errors->get('no_hp')" class="mt-2" />
            </div>

            <div class="mb-5">
                <label for="no_ktp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No KTP</label>
                <input type="text" id="no_ktp" name="no_ktp" value="{{ $pasien->no_ktp }}"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="Masukkan No KTP" required>
                <x-input-error :messages="$errors->get('no_ktp')" class="mt-2" />
            </div>

            <div class="mb-5">
                <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                <input type="text" id="alamat" name="alamat" value="{{ $pasien->alamat }}"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="Masukkan alamat" required>
                <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
            </div>

            <div class="flex justify-between items-center">
                <x-primary-button class="ms-3">
                    Update Pasien
                </x-primary-button>
            </div>
        </form>

    </div>
</x-app-layout>
