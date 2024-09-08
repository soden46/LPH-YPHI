@extends('dashboard', [
    'title' => 'Daftar Visi/Misi',
    'pageTitle' => 'Daftar Visi/Misi',
])
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="col-lg-12">
        <a href="{{ route('admin.visi.create') }}" class="btn btn-primary mb-3">Tambah Visi/Misi</a>
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
                @forelse ($visi as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ ucfirst($item->judul) }}</td>
                        <td>{{ Str::limit(strip_tags($item->isi), 100) }}</td>
                        <td>
                            <a href="{{ route('admin.visi.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.visi.destroy', $item->id) }}" method="POST" class="d-inline"
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
        {{ $visi->links() }} <!-- Pagination, if applicable -->
    </div>
@endsection
