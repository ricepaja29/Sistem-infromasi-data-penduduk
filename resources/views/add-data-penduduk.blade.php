<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <div class="w-full mx-auto">
        <form action="{{ route('data-penduduk.store') }}" method="POST" class="bg-white p-5 shadow-md rounded-lg">
            @csrf
            <div class="mb-4">
                <label for="nama" class="block text-gray-700">Nama</label>
                <input type="text" id="nama" name="nama" class="w-full border-gray-300 rounded p-2"
                    value="{{ old('nama') }}">
                @error('nama')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="alamat" class="block text-gray-700">Alamat</label>
                <textarea id="alamat" name="alamat" class="w-full border-gray-300 rounded p-2">{{ old('alamat') }}</textarea>
                @error('alamat')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="agama" class="block text-gray-700">Agama</label>
                <input type="text" id="agama" name="agama" class="w-full border-gray-300 rounded p-2"
                    value="{{ old('agama') }}">
                @error('agama')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="jenis_kelamin" class="block text-gray-700">Jenis Kelamin</label>
                <select id="jenis_kelamin" name="jenis_kelamin" class="w-full border-gray-300 rounded p-2">
                    <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                    </option>
                    <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan
                    </option>
                </select>
                @error('jenis_kelamin')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="tahun_lahir" class="block text-gray-700">Tahun Lahir</label>
                <input type="date" id="tahun_lahir" name="tahun_lahir" class="w-full border-gray-300 rounded p-2"
                    value="{{ old('tahun_lahir') }}">
                @error('tahun_lahir')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit"
                class=" bg-blue-500 px-4 text-white py-1 rounded hover:bg-blue-400 mr-0 active:bg-blue-500 !important">
                Simpan
            </button>


        </form>
    </div>

</x-layout>
