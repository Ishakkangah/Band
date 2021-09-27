@extends('layouts.backend')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center text-white pt-3 pb-2 mb-3 border-bottom">
    <h3>LIST GENRE'S</h3>
    <br>
</div>



<div class="container">
    <div class="row">
       
        <table class="table table-hover small mt-2">
            <thead class="bg-secondary text-white">
              <tr>
                <th scope="col">#</th>
                <th scope="col">GENRES NAME</th>  
                <th scope="col">ACTIONS</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($genres as $index => $genre)
            <tr>
                 <th scope="row" class="text-white">{{ $genres->count() * ( $genres->currentPage() - 1 ) + $loop->iteration }}</th>
                 <td><a href="#" class="text-white">{{ $genre->name }}</a></td>
                 <td>
                     <a href="{{ route('genre.edit', $genre->slug) }}" class="badge btn-primary"><span data-feather="edit"></span></a>
                     <form action="{{ route('genre.delete', $genre->slug) }}" method="post" class="d-inline">
                         @csrf
                         @method('delete')
                         <button type="submit" class="badge btn-danger border-0" onclick="return confirm('Are you sure ?')"><span data-feather="trash-2"></span></button>
                     </form>
                 </td>
                @empty
                <tr>
                     <td ><p class="alert alert-danger"> There is not data</p></td>
                </tr>
             </tr>
             @endforelse
            </tbody>
        </table>
        <div class="small">
              {{ $genres->links() }}
        </div>
    </div>   
 </div>
     

@endsection