@extends('dashboard', [
    'title' => 'Edit Partner',
    'pageTitle' => 'Edit Partner',
])
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="col-lg-8">
        <form method="post" action="{{ route('admin.partner.update', $partner->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_partner" name="nama_partner" id="nama_partner">Nama Partner</label>
                <input type="text" class="form-control" name="nama_partner" id="nama_partner"
                    value="{{ old('nama_partner', $partner->nama_partner) }}">
            </div>
            <div class="form-group">
                <label for="logo_partner" name="logo_partner" id="logo_partner">Logo Partner</label>
                <input type="file" class="form-control" name="logo_partner" id="logo_partner" accept="image/*">
                @if ($partner->logo_partner)
                    <img src="{{ asset('storage/' . $partner->logo_partner) }}" alt="Logo {{ $partner->nama_partner }}"
                        class="img-thumbnail mt-2" style="width: 150px;">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
