@extends('dashboard', [
    'title' => 'Edit Visi/Misi',
    'pageTitle' => 'Edit Visi/Misi',
])
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="col-lg-8">
        <form method="post" action="{{ route('admin.visi.update', $visi->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Judul" name="judul" id="judul">Pilih Judul</label>
                <select class="form-control" id="judul" name="judul">
                    <option value="visi" {{ $visi->judul == 'visi' ? 'selected' : '' }}>Visi</option>
                    <option value="misi" {{ $visi->judul == 'misi' ? 'selected' : '' }}>Misi</option>
                </select>
            </div>
            <div class="form-group">
                <input id="isi" type="hidden" name="isi" value="{{ old('isi', $visi->isi) }}">
                @error('isi')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <trix-editor input="isi"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary">Update Visi/Misi</button>
        </form>
    </div>
@endsection
