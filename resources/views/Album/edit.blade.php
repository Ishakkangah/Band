@extends('layouts.backend')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center text-white pt-3 pb-2 mb-3 border-bottom">
    <h3> EDIT A ALBUM</h3>
    <br>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card-header">
                <div class="card-body">
                    <form action="{{ route('album.update', $album->slug) }}" method="post">
                        @csrf
                        @method('put')
                        {{-- form-control --}}
                        @include('Album.partials.form-control')
                        <button type="submit" class="btn btn-primary text-white font-weight-bolder mt-2">{{ $submitLabel }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection