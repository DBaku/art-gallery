@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Artwork</h1>
        <form action="{{ route('artworks.update', $artwork->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $artwork->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $artwork->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $artwork->price }}" required>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image">
                <img src="{{ asset('storage/' . $artwork->image_path) }}" alt="{{ $artwork->title }}" class="img-thumbnail mt-2" width="150">
            </div>
            <button type="submit" class="btn btn-primary">Update Artwork</button>
        </form>
    </div>
@endsection