@extends('UserAdmin.layout')

@section('main')
    <h1>Daftar Kategori Pelajaran</h1>
    <a href="{{ route('kategoris.create') }}">Tambah Kategori</a>
    @foreach ($kategoris as $kategori)
        <h3>{{ $kategori->nama }}</h3>
        <a href="{{ route('kategoris.show', $kategori->id) }}">Lihat</a>
        <a href="{{ route('kategoris.edit', $kategori->id) }}">Edit</a>
        <form action="{{ route('kategoris.destroy', $kategori->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Hapus</button>
        </form>
    @endforeach
@endsection
