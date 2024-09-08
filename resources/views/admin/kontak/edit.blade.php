@extends('dashboard', [
    'title' => 'Edit Kontak',
    'pageTitle' => 'Edit Kontak',
])

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="col-lg-8">
        <form method="post" action="{{ route('admin.kontak.update', $kontak->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="email">Edit Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $kontak->email }}" required>
            </div>

            <div class="form-group">
                <label for="no_hp">Edit No HP</label>
                <input type="text" name="no_hp" id="no_hp" class="form-control" value="{{ $kontak->no_hp }}"
                    required>
            </div>

            <div class="form-group">
                <label for="alamat">Edit Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" required>{{ $kontak->alamat }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
