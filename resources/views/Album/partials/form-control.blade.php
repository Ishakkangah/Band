<div class="form-group">
    <label for="band" class="text-white">Bands</label>
    <select type="text" name="band" id="band" class="form-control @error('band') is-invalid @enderror">
    <option disabled selected>Choose a band</option>
    @foreach ($bands as $band)
        <option class="bg-dark text-white" {{ $album->band()->find($band->id) ? 'selected' : '' }} value="{{ $band->id }}">{{ $band->name }}</option>
    @endforeach
    </select>
    @error('band')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
    
<div class="form-group">
    <label for="name" class="text-white">Album name</label>
    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ?? $album->name }}">
    @error('name')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>


<div class="form-group">
    <label for="year" class="text-white">Year</label>
    <select type="yeara" name="year" id="year" class="form-control @error('year') is-invalid @enderror">
        <option disabled selected>Choose a year</option>
        @for ($i = 2000; $i <= date('Y'); $i++)
        <option class="bg-dark text-white" {{ $i == $album->year ? 'selected' : '' }} value="{{ $i }}">{{ $i }}</option>
        @endfor
    </select>
    @error('year')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

