@extends('admin.layoutAdmin')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Create New Configuration</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('konfigurasi.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    id="title" name="title" value="{{ old('title') }}" required>
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                    rows="3" required>{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Upload Image (Optional)</label>
                                <input class="form-control @error('image') is-invalid @enderror" type="file"
                                    id="image" name="image" accept="image/*">
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (session('success'))
        <script>
            console.log('SweetAlert should trigger');
            Swal.fire({
                icon: 'success',
                title: 'Konfigurasi Berhasil Ditambahkan',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 1500
            }).then(function() {
                window.location = "{{ route('konfigurasi.index') }}";
            });
        </script>
    @endif
@endsection
