@extends('layouts.backend')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center text-white pt-3 pb-2 mb-3 border-bottom">
    <h3> ALBUMS TABLE</h3>
    <br>
</div>

{{-- SEARCH --}}
    <form action="{{ route('album.search') }}" method="get" class="form-inline  my-2 my-lg-0">
        <input type="search" name="search" class="form-control col-md-6" placeholder="Searching here" >
        <button type="submit" class="btn btn-primary ml-1 font-weight-bolder" id="submit">Search</button>
    </form>

<div class="container">
   <div class="row">
      
       <table class="table table-hover small mt-2">
           <thead class="bg-secondary text-white">
             <tr>
               <th scope="col">#</th>
               <th scope="col">BANDS</th>  
               <th scope="col">ALBUM NAME</th>  
               <th scope="col">YEAR</th>
               <th scope="col">ACTIONS</th>
             </tr>
           </thead>
           <tbody>
               @forelse ($albums as $index => $album)
           <tr>
                <th scope="row" class="text-white">{{ $albums->count() * ( $albums->currentPage() - 1 ) + $loop->iteration }}</th>
                <td><a href="#" class="text-white">{{ $album->band->name }}</a></td>
                <td><a href="#" class="text-white">{{ $album->name }}</a></td>
                <td class="text-white">{{ $album->year }}</td>
                <td>
                    <a href="{{ route('album.edit', $album->slug) }}" class="badge btn-primary"><span data-feather="edit"></span></a>
                    <form action="{{ route('album.delete', $album->slug) }}" method="post" class="d-inline">
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
             {{ $albums->links() }}
       </div>
   </div>   
</div>
    
@endsection