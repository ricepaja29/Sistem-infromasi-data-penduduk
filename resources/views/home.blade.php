<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <div class="w-full mx-auto">
        <div class="w-full flex items-center justify-between mb-3">
            <x-button-link background_color={{ true }} href="add-data-penduduk" title="Tambah Data" />
            <div
                class="group h-full transition-colors duration-150 flex w-60 bg-white items-center border border-slate-300 rounded-full hover:border-slate-400 px-3">
                <x-eva-search class="w-6 h-6 flex-none text-slate-400" />
                <input placeholder="Cari ..."
                    class="border-0 h-auto focus:ring-0 bg-transparent placeholder:text-slate-400" type="search">
            </div>
        </div>
        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full">
                <thead class="bg-blue-500">

                    <tr>
                        <th class="text-white border-y border-gray-300 px-4 py-2 text-left w-10">ID</th>
                        <th class="text-white border-y border-gray-300 px-4 py-2 text-left w-60">Nama</th>
                        <th class="text-white border-y border-gray-300 px-4 py-2 text-left ">Alamat</th>
                        <th class="text-white border-y border-gray-300 px-4 py-2 text-left ">Agama</th>
                        <th class="text-white border-y border-gray-300 px-4 py-2 text-left ">Jenis Kelamin</th>
                        <th class="text-white border-y border-gray-300 px-4 py-2 text-left w-52">Tahun Lahir</th>
                        <th class="text-white border-y border-gray-300 px-4 py-2 text-center ">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data_penduduk as $data)
                        <tr class="hover:bg-gray-100">
                            <td class="border-y text-slate-600 border-gray-300 px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="border-y text-slate-600 border-gray-300 px-4 py-2">{{ $data->nama }}</td>
                            <td class="border-y text-slate-600 border-gray-300 px-4 py-2"> {{ $data->alamat }}</td>
                            <td class="border-y text-slate-600 border-gray-300 px-4 py-2">{{ $data->agama }}</td>
                            <td class="border-y text-slate-600 border-gray-300 px-4 py-2">{{ $data->jenis_kelamin }}</td>
                            <td class="border-y text-slate-600 border-gray-300 px-4 py-2">{{ $data->tahun_lahir->format('j - F - Y') }}
                            </td>
                            <td
                                class="border-y border-gray-300 px-4 py-2">
                                <div class="flex items-center justify-center h-full w-full gap-x-4">
                                    <form action="{{ route('data-penduduk.edit', $data->id) }}" method="GET">
                                        @csrf
                                        <button type="submit"
                                            class="py-1 w-[70px] text-white bg-blue-500 hover:bg-blue-600 rounded">Edit</button>
                                    </form>
                                    <span class="text-gray-500 font-bold">|</span>
                                    <form action="{{ route('data-penduduk.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="py-1 w-[70px] text-white bg-red-500 hover:bg-red-600 rounded"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center py-4 text-gray-500">Tidak ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
