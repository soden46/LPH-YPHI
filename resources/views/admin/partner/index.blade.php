@extends('dashboard', [
    'title' => 'Daftar Partner',
    'pageTitle' => 'Daftar Partner',
])
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="col-lg-12">
        <a href="{{ route('admin.partner.create') }}" class="btn btn-primary mb-3">Tambah Partner</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Partner</th>
                    <th>Logo</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($partners as $partner)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $partner->nama_partner }}</td>
                        <td>
                            @if ($partner->logo_partner)
                                <img src="{{ asset('storage/' . $partner->logo_partner) }}"
                                    alt="Logo {{ $partner->nama_partner }}" class="img-thumbnail" style="width: 100px;">
                            @else
                                Tidak ada logo
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.partner.edit', $partner->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.partner.destroy', $partner->id) }}" method="POST"
                                class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
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
        {{ $partners->links() }} <!-- Pagination, if applicable -->
    </div>
@endsection
