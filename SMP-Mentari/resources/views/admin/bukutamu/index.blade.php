@extends('layouts.app')

@section('title', 'Kelola Buku Tamu')

@section('content')
<div class="max-w-6xl mx-auto p-6 bg-white shadow-md rounded-lg mt-6">
    <h2 class="text-2xl font-bold mb-4">Daftar Pesan Buku Tamu (Admin)</h2>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr class="bg-gray-100 border-b text-left text-gray-600 uppercase text-sm">
                    <th class="py-3 px-4">Nama</th>
                    <th class="py-3 px-4">Email</th>
                    <th class="py-3 px-4">Pesan</th>
                    <th class="py-3 px-4">Tanggal</th>
                    <th class="py-3 px-4 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($daftar_pesan as $pesan)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3 px-4 font-semibold">{{ $pesan->nama }}</td>
                        <td class="py-3 px-4">{{ $pesan->email }}</td>
                        <td class="py-3 px-4">{{ $pesan->pesan }}</td>
                        <td class="py-3 px-4 text-sm text-gray-500">{{ $pesan->created_at->diffForHumans() }}</td>
                        <td class="py-3 px-4 text-center">
                            <form action="{{ url('/admin/bukutamu/' . $pesan->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus pesan ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded text-sm">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="py-4 text-center text-gray-500">Belum ada pesan masuk.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $daftar_pesan->links() }}
    </div>
</div>
@endsection