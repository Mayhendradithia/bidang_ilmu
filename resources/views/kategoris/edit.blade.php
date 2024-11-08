@extends('UserAdmin.layout')

@section('main')
    <h1>Edit Kategori Pelajaran</h1>
    <form action="{{ route('kategoris.update', $kategori->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama">Nama Kategori:</label>
        <input type="text" name="nama" value="{{ $kategori->nama }}" required>
        <button type="submit">Update</button>
    </form>
@endsection
