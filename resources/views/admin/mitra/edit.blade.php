@extends('admin.layoutAdmin')

@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Edit Mitra</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('mitra.update', $mitra->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="image" class="form-label">Upload New Image (Optional)</label>
                            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" accept="image/*">
                            @if ($mitra->image)
                                <small class="d-block">Current Image:</small>
                                <img src="{{ asset('storage/' . $mitra->image) }}" alt="Current Image"
                                    class="img-thumbnail mb-2" style="max-width: 200px;">
                            @endif
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
