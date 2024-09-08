@extends('dashboard', [
    'title' => 'Tambah Kontak',
    'pageTitle' => 'Tambah Kontak',
])

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="col-lg-8">
        <form method="post" action="{{ route('admin.kontak.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="email">Masukan Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="no_hp">Masukan No HP</label>
                <input type="text" name="no_hp" id="no_hp" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="alamat">Masukan Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Posting</button>
        </form>
    </div>
@endsection
