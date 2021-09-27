<div class="form-group">
    <label for="name" class="text-white">Genre name</label>
    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ?? $genre->name }}">
    @error('name')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
