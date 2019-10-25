@extends('layouts.backend.master')

@section('content')

<div class="page-title">
    <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <h5 class="title">Edit List</h5>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="icon-area-graph"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('listings.index') }}">Listings</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
    
<div class="content-wrapper">
    <!-- Row start -->
    <div class="row gutters">

        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <form action="{{ route('listings.update', $listing->slug) }}" method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="card-header">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Listing Name" value="{{ old('name') ?? $listing->name }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Select Category</label>
                            <select name="category_id" class="form-control">
                                <option selected disabled>--------</option>
                                @foreach($categories as $key => $value)
                                    <option value="{{ $key }}"
                                    @if($listing->category_id == $key)
                                    selected
                                    @endif
                                    >{{ $value }}</option>
                                @endforeach
                            </select>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="status" class="form-label">Published</label>
                            <input type="checkbox" name="status" 
                            @if($listing->status === 'Published')
                                checked
                            @endif>
                        </div>

                        <button class="btn btn-primary" name="action" value="save" type="submit">Save</button>
                        <button class="btn btn-primary" name="action" value="continue" type="submit">Save and Continue</button>
                    </div>                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
