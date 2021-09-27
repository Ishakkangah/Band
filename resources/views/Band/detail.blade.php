@extends('layouts.backend')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap text-white align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3 class="text-uppercase">DETAIL {{ $band->name }}</h3>
    <br>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                <img src="{{ $band->takeImage }}" class="card-img" style="object-fit: cover; object-position: center; weight: 200px;">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">{{ $band->name }}</h5>
                    <option class="text-secondary">Genres music :</option>
                    <ol>
                        @foreach ($band->genres as $genre)
                        <li class="small text-secondary"><a href="#" class="text-secondary">{{ $genre->name }}</a></li>
                        @endforeach
                    </ol>
                    <p class="card-text"><small class="text-muted">Last updated {{ $band->created_at->diffForHumans() }}</small></p>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection