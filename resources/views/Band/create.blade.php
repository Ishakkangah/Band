@extends('layouts.backend', ['title' => 'Create Band | Ishaq'])
@push('scripts')
    <script>
        $(document).ready(function() {
            $('.select2multiple').select2({
                placeholder: 'Choose any genres',
            });
        });
    </script>
@endpush
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap text-white align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3>CREATE A NEW BAND</h3>
    <br>
</div>


<div class="container">
        <div class="row">
            <div class="card-body">
                <form action="{{ route('bands.create') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                {{-- form-control --}}
                @include('Band.partials.form-control')
                <div class="form-group">
                    <button type="submit" class="btn btn-primary text-white font-weight-bolder">{{ $submitLabel }}</button>
                </div>
                </form>
            </div>
        </div>
</div>
    
@endsection