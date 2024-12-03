<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <div class="mx-auto">

        <!-- Form Edit Data -->
        <form action="{{ route('data-penduduk.update', $penduduk->id) }}" method="POST"
            class="bg-white shadow-md rounded-lg p-6">
            @csrf
            @method('PUT')

            <!-- Nama -->
            <div class="mb-4">
                <label for="nama" class="block text-gray-700">Nama</label>
                <input type="text" id="nama" name="nama" class="w-full border-gray-300 rounded p-2"
                    value="{{ old('nama', $penduduk->nama) }}">
                @error('nama')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Alamat -->
            <div class="mb-4">
                <label for="alamat" class="block text-gray-700">Alamat</label>
                <textarea id="alamat" name="alamat" class="w-full border-gray-300 rounded p-2">{{ old('alamat', $penduduk->alamat) }}</textarea>
                @error('alamat')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Agama -->
            <div class="mb-4">
                <label for="agama" class="block text-gray-700">Agama</label>
                <input type="text" id="agama" name="agama" class="w-full border-gray-300 rounded p-2"
                    value="{{ old('agama', $penduduk->agama) }}">
                @error('agama')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Jenis Kelamin -->
            <div class="mb-4">
                <label for="jenis_kelamin" class="block text-gray-700">Jenis Kelamin</label>
                <select id="jenis_kelamin" name="jenis_kelamin" class="w-full border-gray-300 rounded p-2">
                    <option value="Laki-laki"
                        {{ old('jenis_kelamin', $penduduk->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                    </option>
                    <option value="Perempuan"
                        {{ old('jenis_kelamin', $penduduk->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan
                    </option>
                </select>
                @error('jenis_kelamin')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tahun Lahir -->
            <div class="mb-4">
                <label for="tahun_lahir" class="block text-gray-700">Tahun Lahir</label>
                <input type="date" id="tahun_lahir" name="tahun_lahir" class="w-full border-gray-300 rounded p-2"
                    value="{{ old('tahun_lahir', $penduduk->tahun_lahir->format('Y-m-d')) }}">
                @error('tahun_lahir')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tombol Submit -->
            <div class="text-right">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                    Perbarui Data
                </button>
            </div>
        </form>
    </div>
</x-layout>
