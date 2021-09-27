@extends('layouts.backend', ['title' => 'Create Band | Ishaq'])
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center text-white pt-3 pb-2 mb-3 border-bottom">
    <h3>LIST BANDS</h3>
    <br>
</div>


<div class="container">
     @include('alert.alert')
    <div class="row">
        <table class="table table-hover small">
            <thead class="bg-secondary text-white">
              <tr>
                <th scope="col">#</th>
                <th scope="col">BANDS NAME</th>
                <th scope="col">GENRES</th>
                <th scope="col">ACTIONS</th>
              </tr>
            </thead>
            <tbody>
            @forelse ($Bands as $index => $band)
            <tr>
                <th scope="row" class="text-white">{{ $Bands->count() * ($Bands->currentPage() - 1) + $loop->iteration }}</th>
                <td><a href="{{ route('bands.show', $band->slug) }}" class="text-white">{{ $band->name }}</a></td>
                <td class="text-white">{{ $band->genres()->get()->implode('name', ' , ') }}</td>
                <td>
                    <a href="{{ route('bands.edit', $band->slug ) }}" class="badge btn-primary"><span data-feather="edit"></span></a>
                    <form action="{{ route('bands.delete', $band->slug ) }}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="badge btn-danger border-0" onclick="return confirm('Are you sure ?')"><span data-feather="trash-2"></span></button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                 <td ><p class="alert alert-danger"> There is not data</p></td>
            </tr>
            @endforelse
            </tbody>
        </table>
        <div class="small">
              {{ $Bands->links() }}
        </div>
    </div>   
</div>
@endsection