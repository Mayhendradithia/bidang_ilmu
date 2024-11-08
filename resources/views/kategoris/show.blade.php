@extends('UserAdmin.layout')

@section('main')
    <h1>{{ $kategori->nama }}</h1>
    <a href="{{ route('kategoris.index') }}">Kembali ke Daftar Kategori</a>
@endsection
