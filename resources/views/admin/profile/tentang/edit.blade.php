@extends('dashboard', [
    'title' => 'Edit Tentang Kami',
    'pageTitle' => 'Edit Tentang Kami',
])
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="col-lg-8">
        <form method="post" action="{{ route('admin.profile.update', $tentang->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Judul" name="judul" id="judul">Pilih Judul</label>
                <select class="form-control" id="judul" name="judul">
                    <option value="Tentang LPH YPHI" {{ $tentang->judul == 'Tentang LPH YPHI' ? 'selected' : '' }}>Tentang
                        LPH YPHI</option>
                    <option value="Mengapa Harus Memilih LPH YPHI"
                        {{ $tentang->judul == 'Mengapa Harus Memilih LPH YPHI' ? 'selected' : '' }}>Mengapa Harus Memilih
                        LPH YPHI</option>
                </select>
            </div>
            <div class="form-group">
                <input id="isi" type="hidden" name="isi" value="{{ old('isi', $tentang->isi) }}">
                @error('isi')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <trix-editor input="isi"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
