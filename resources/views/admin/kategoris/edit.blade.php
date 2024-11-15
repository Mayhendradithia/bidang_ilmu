@extends('admin.layoutAdmin')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Edit Kategori Pelajaran</h1>

        <form id="update-form-{{ $kategori->id }}" action="{{ route('kategoris.update', $kategori->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Kategori</label>
                <input type="text" name="nama" class="form-control" value="{{ $kategori->nama }}" required>
            </div>
            <!-- Ganti tombol submit dengan tombol untuk memanggil SweetAlert -->
            <button type="button" class="btn btn-primary" onclick="updateCategory({{ $kategori->id }})">Simpan</button>
            <a href="{{ route('kategoris.index') }}" class="btn btn-secondary ms-2">Batal</a>
        </form>
        
    </div>

    <!-- SweetAlert2 JavaScript -->

    <script>
        function updateCategory(id) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Kategori ini akan diperbarui dari.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, perbarui!',
                cancelButtonText: 'Batal',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    // Submit form jika pengguna klik 'Ya, perbarui'
                    document.getElementById('update-form-' + id).submit();
                }
            });
        }
    </script>
    
@endsection
