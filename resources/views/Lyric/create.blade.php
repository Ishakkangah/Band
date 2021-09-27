@extends('layouts.backend')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center text-white pt-3 pb-2 mb-3 border-bottom">
    <h3>CREATE A NEW LYRIC</h3>
    <br>
</div>

<div class="container">
    <div class="row">
        <div class="card-body">
            <form action="{{ route('bands.create') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            
            <div class="form-group">
                <label for="band_id" class="text-white">Band</label>
                <select type="text" band_id="band_id" id="band_id" class="form-control @error('band_id') is-invalid @enderror">
                    @foreach ($bands as $band)
                    <option>
                        <a  velue="{{ $band->id }}">{{ $band->name }}</a>
                    </option>
                    @endforeach
                </select>
                @error('band_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="album_id" class="text-white">Album</label>
                <select type="text" album_id="album_id" id="album_id" class="form-control @error('album_id') is-invalid @enderror">
                    @foreach ($bands as $band)
                        @foreach ($band->albums as $album)
                            <option {{ $band->id == $album->band_id ? 'selected' : '' }} value="">{{ $album->name }}</option>
                        @endforeach
                    @endforeach
                </select>
                @error('album_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="title" class="text-white">Title</label>
                <input type="text" title="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" autofocus>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body" class="text-white">Choose genre</label>
                <textarea type="text" name="body[]" id="body" class="form-control @error('body') is-invalid @enderror" multiple>
                </textarea>
                @error('body')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary text-white font-weight-bolder">Create lyric</button>
            </div>
            </form>
        </div>
    </div>
</div>
    
@endsection