@extends('dashboard', [
    'title' => 'Buat Visi/Misi',
    'pageTitle' => 'Buat Visi/Misi',
])
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="col-lg-8">
        <form method="post" action="{{ route('admin.visi.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="Judul" name="judul" id="judul">Pilih Judul</label>
                <select class="form-control" id="judul" name="judul">
                    <option value="visi">Visi</option>
                    <option value="misi">Misi</option>
                </select>
            </div>
            <div class="form-group">
                <input id="isi" type="hidden" name="isi">
                @error('isi')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <trix-editor input="isi"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary">Posting Visi/Misi</button>
        </form>
    </div>
@endsection
