@extends('dashboard', [
    'title' => 'Tambah Partner',
    'pageTitle' => 'Tambah Partner',
])

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="col-lg-8">
        <form method="post" action="{{ route('admin.partner.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="nama_partner">Nama Partner</label>
                <input type="text" name="nama_partner" id="nama_partner" class="form-control"
                    placeholder="Masukkan nama partner" required>
            </div>

            <div class="form-group">
                <label for="logo_partner">Logo Partner</label>
                <input type="file" name="logo_partner" id="logo_partner" class="form-control" accept="image/*" required>
            </div>

            <button type="submit" class="btn btn-primary">Posting</button>
        </form>
    </div>
@endsection
