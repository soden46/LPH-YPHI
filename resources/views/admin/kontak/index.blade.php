@extends('dashboard', [
    'title' => 'Daftar Kontak',
    'pageTitle' => 'Daftar Kontak',
])

@section('content')
    <div class="col-lg-12">
        <a href="{{ route('admin.kontak.create') }}" class="btn btn-primary mb-3">Tambah Kontak</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kontaks as $kontak)
                    <tr>
                        <td>{{ $kontak->id }}</td>
                        <td>{{ $kontak->email }}</td>
                        <td>{{ $kontak->no_hp }}</td>
                        <td>{{ $kontak->alamat }}</td>
                        <td>
                            <a href="{{ route('admin.kontak.edit', $kontak->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.kontak.destroy', $kontak->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $kontaks->links() }} <!-- Pagination -->
    </div>
@endsection
