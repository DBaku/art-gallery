@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $artwork->title }}</h1>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('storage/' . $artwork->image_path) }}" alt="{{ $artwork->title }}" class="img-fluid">
            </div>
            <div class="col-md-6">
                <p>{{ $artwork->description }}</p>
                <p><strong>Price: ${{ $artwork->price }}</strong></p>
            </div>
        </div>
        <a href="{{ route('artworks.index') }}" class="btn btn-primary">Back to Artworks</a>
    </div>
@endsection