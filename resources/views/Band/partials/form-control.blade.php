<div class="form-group">
    <label for="thumbnail" class="text-white">Thumbnail</label>
    <input type="file" name="thumbnail" id="thumbnail" class="form-control-file @error('thumbnail') is-invalid @enderror">
    @error('thumbnail')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="name" class="text-white">Name</label>
    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ?? $band->name }}">
    @error('name')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="genres" class="text-white">Choose genre</label>
    <select type="text" name="genres[]" id="genres" class="form-control select2multiple @error('genres') is-invalid @enderror" multiple>
        @foreach ($genres as $genre)
            <option class="option" {{ $band->genres()->find($genre->id) ? 'selected' : '' }} value="{{ $genre->id }}">{{ $genre->name }} </option>
        @endforeach
    </select>
    @error('genres')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
