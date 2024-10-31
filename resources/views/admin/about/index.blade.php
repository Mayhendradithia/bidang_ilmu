@extends('layout.app')

@section('content')
    <h1>Daftar About</h1>
    <a href="{{ route('about.create') }}" class="btn btn-primary" style="float: right">Tambah About</a>
    @if (session('success'))
        <div class="alert alert-success mt-2">
            {{ session('success') }}
        </div>
    @endif
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Image</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($about as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ Str::limit($item->description, 50) }}</td>
                    <td>
                        @if ($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" alt="Image" width="100">
                        @else
                            <span>Tidak ada gambar</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('about.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('about.destroy', $item->id) }}" method="post" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
