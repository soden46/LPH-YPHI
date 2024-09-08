@extends('dashboard', [
    'title' => 'Daftar Tentang Kami',
    'pageTitle' => 'Daftar Tentang Kami',
])
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="col-lg-12">
        <a href="{{ route('admin.profile.create') }}" class="btn btn-primary mb-3">Tambah Tentang Kami</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($tentang as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ ucfirst($item->judul) }}</td>
                        <td>{{ Str::limit(strip_tags($item->isi), 100) }}</td>
                        <td>
                            <a href="{{ route('admin.profile.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.profile.destroy', $item->id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Data tidak ditemukan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{ $tentang->links() }} <!-- Pagination, if applicable -->
    </div>
@endsection
