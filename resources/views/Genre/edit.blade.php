@extends('layouts.backend')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center text-white pt-3 pb-2 mb-3 border-bottom">
    <h3>EDIT GENRE</h3>
    <br>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('genre.update', $genre->slug) }}" method="post">
                @csrf
                @method('put')
                {{-- Form-control --}}
                @include('Genre.partials.form-control')
                <div class="form-group">
                    <button type="submit" class="btn btn-primary font-weight-bolder text-white">Create new genre</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection