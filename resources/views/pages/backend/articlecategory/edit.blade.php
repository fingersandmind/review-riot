@extends('layouts.backend.master')

@section('content')

<div class="page-title">
    <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <h5 class="title">Edit Category</h5>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="icon-area-graph"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('articlecategory.index') }}">Article Categories</a></li>
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
                <form action="{{ route('articlecategory.update',$articlecategory->slug) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="card-header">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Category Name" value="{{ old('name') ?? $articlecategory->name }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div> 
                    <div class="card-body">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="logoImage">Upload</span>
                                </div>
                                <div class="custom-file pb-4">
                                    <input type="file" class="custom-file-input @error('logo') is-invalid @enderror" id="inputLogo" name="logo" aria-describedby="logoImage">
                                    <label class="custom-file-label" for="inputLogo">Logo</label>
                                </div>
                            </div>
                            @error('logo')
                            <p><code>{{ $message }}</code></p>
                            @enderror
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
