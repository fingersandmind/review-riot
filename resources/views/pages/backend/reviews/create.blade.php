@extends('layouts.backend.master')

@section('content')

<div class="page-title">
    <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <h5 class="title">Create a Review</h5>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="icon-area-graph"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('reviews.index') }}">Reviews</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create a Review</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
    
<div class="content-wrapper">
    <!-- Row start -->
    <div class="row gutters">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <form action="{{ route('reviews.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        <textarea name="content" class="texteditor @error('content') is-invalid @enderror" placeholder="Content here">{{ old('content') }}</textarea>
                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label">Select a Listing</label>
                        <select name="listing_id" class="form-control">
                            <option selected disabled>--------</option>
                            @foreach($listings as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <hr>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="status" class="form-label">Publish: </label>
                        <input type="checkbox" value="1" id="status" name="status">
                        <hr>
                    </div>
                    <div class="form-group col-md-6">
                        <button class="btn btn-primary" name="action" value="save" type="submit">Save</button>
                        <button class="btn btn-primary" name="action" value="continue" type="submit">Save and Continue</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('additionalCSS')
{{--  Summernote  --}}
<link rel="stylesheet" href="{{ asset('assets/backend/vendor/summernote/summernote-bs4.css') }}" />
@endpush


@push('additionalJS')
{{--  Summernote  --}}
<script src="{{ asset('assets/backend/vendor/summernote/summernote-bs4.js') }}"></script>

<script>
    $(function() {
        $( ".texteditor" ).summernote({  
            'height': 300,
            'tabsize': 2
        });
    });
</script>
@endpush
