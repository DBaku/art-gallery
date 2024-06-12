@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Artworks</h1>
        <a href="{{ route('artworks.create') }}" class="btn btn-primary">Add Artwork</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($artworks as $artwork)
                    <tr>
                        <td>{{ $artwork->title }}</td>
                        <td>{{ $artwork->description }}</td>
                        <td>${{ $artwork->price }}</td>
                        <td>
                            <a href="{{ route('artworks.show', $artwork->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('artworks.edit', $artwork->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('artworks.destroy', $artwork->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection