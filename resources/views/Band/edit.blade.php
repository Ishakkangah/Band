@extends('layouts.backend', ['title' => 'Edit Band | Ishaq'])
@push('scripts')
    <script>
        $(document).ready(function() {
            $('.select2multiple').select2({
                placeholder: 'Choose any genres'
            });
        });
    </script>
@endpush
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center text-white pt-3 pb-2 mb-3 border-bottom">
    <h3>EDIT A NEW BAND</h3>
    <br>
</div>


<div class="container">
        @include('alert.alert')
       
        <div class="row">
            <div class="card-body">
                <form action="{{ route('bands.update', $band->slug ) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                {{-- Include form-control --}}
                @include('Band.partials.form-control')
                <div class="form-group">
                    <button type="submit" class="btn btn-primary font-weight-bolder text-white">{{ $submitLabel }}</button>
                </div>
                </form>
            </div>
        </div>
</div>
    
@endsection