@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Pokédex</h1>
    <form action="{{ route('pokedex.search') }}" method="POST" class="mb-3">
        @csrf
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search Pokémon" required>
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </div>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    @isset($pokemon)
        <div class="card">
            <div class="card-header">
                <h2>{{ ucfirst($pokemon['name']) }}</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ $pokemon['sprites']['front_default'] }}" alt="{{ $pokemon['name'] }}" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <p><strong>Height:</strong> {{ $pokemon['height'] }}</p>
                        <p><strong>Weight:</strong> {{ $pokemon['weight'] }}</p>
                        <p><strong>Base Experience:</strong> {{ $pokemon['base_experience'] }}</p>
                        <p><strong>Types:</strong>
                            @foreach ($pokemon['types'] as $type)
                                {{ $type['type']['name'] }}
                                @if (!$loop->last)
                                    ,
                                @endif
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endisset
</div>
@endsection