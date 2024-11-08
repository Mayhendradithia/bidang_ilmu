@extends('UserAdmin.layout')

@section('main')
    <div class="container mt-5">
        <h1 class="mb-4">Tambah Kategori Pelajaran</h1>

        <form action="{{ route('kategoris.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="nama" class="form-label">Nama Kategori</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan nama kategori" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('kategoris.index') }}" class="btn btn-secondary ms-2">Batal</a>
        </form>
    </div>
@endsection