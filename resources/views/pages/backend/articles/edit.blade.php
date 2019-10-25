@extends('layouts.backend.master')

@section('content')

<div class="page-title">
    <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <h5 class="title">Article Edit</h5>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="icon-area-graph"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('articles.index') }}">Articles</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
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
                    <form action="{{ route('articles.update', $article->slug) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="card-header">
                            <div class="form-group">
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Title Here" value="{{ old('title') ?? $article->title }}">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="card-body">
    
                            <textarea name="body" class="texteditor @error('title') is-invalid @enderror" placeholder="Content here">{{ old('body') ?? $article->body }}</textarea>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="pt-2 pb-2">
                                        <small class="text-muted">
                                            Must be a valid image.
                                        </small>
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                        </div>
                                        <div class="custom-file pb-4">
                                            <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="inputBannerImage" name="image" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="inputBannerImage">Banner Image</label>
                                        </div>
                                    </div>
                                    @error('image')
                                        <code>{{ $message }}</code>
                                    @enderror
                                    <div class="custom-control custom-switch pt-4 pb-4">
                                        <input type="checkbox" class="custom-control-input" name="is_featured" id="customSwitch3" 
                                        @if($article->is_featured == 1) value="1" checked @endif>
                                        <label class="custom-control-label" for="customSwitch3" title="Check to feature article">Feature article in Homepage</label>
                                    </div>
                                    <hr>
                                </div>
    
                                <div class="form-group">
                                    <div>
                                        <label for="" class="form-label">Logo Title:</label>
                                        <input type="text" class="form-control @error('logo_title') is-invalid @enderror" name="logo_title" placeholder="Title here.." value="{{ old('logo_title') ?? $article->logo_title }}" required>
                                        @error('logo_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="pt-2 pb-2">
                                        <small class="text-muted">
                                            Recommend size is 50x50
                                        </small>
                                    </div>
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
                                        <code>{{ $message }}</code>
                                    @enderror
                                    <div class="custom-control custom-switch pt-4 pb-4">
                                        <input type="checkbox" class="custom-control-input" name="is_toggled" id="customSwitch2" 
                                        @if($article->is_toggled == 1)value="1" checked @endif>
                                        <label class="custom-control-label" for="customSwitch2" title="Check to feature article">Toggle Logo</label>
                                    </div>
                                    <hr>
                                </div>
    
                                <div class="form-group">
                                    <label class="form-label">Add Category/Categories</label>
                                    <select name="category[]" id="multiselect" class="form-control @error('category') is-invalid @enderror" multiple>
                                        @foreach($categories as $key => $value)
                                            <option value="{{ $key }}"
                                            @foreach($article->categories as $category)
                                                @if($category->id == $key)
                                                selected
                                                @endif
                                            @endforeach
                                            >{{ $value }}</option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <h3>Company Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="company_name">Company Name</label>
                                    <input type="text" id="company_name" name="company_name" class="form-control @error('company_name') is-invalid @enderror" value="{{ old('company_name') ?? $article->company_name }}">
                                    @error('company_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') ?? $article->email }}">
                                    <small id="phone" class="text-muted">
                                        Must be a valid email address.
                                    </small>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="url">Url</label>
                                    <input type="url" id="url" name="url" class="form-control @error('url') is-invalid @enderror" placeholder="https://example.com" pattern="https://.*" value="{{ old('url') ?? $article->url }}">
                                    <small id="phone" class="text-muted">
                                        Must be a valid url.
                                    </small>
                                    @error('url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="number" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') ?? $article->phone }}">
                                    <small id="phone" class="text-muted">
                                        Must be a valid phone number.
                                    </small>
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <button class="btn btn-primary" name="action" value="save" type="submit" onclick="return confirm('Are you sure?')">Save</button>
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
{{-- Multiselect --}}
<link rel="stylesheet" href="{{ asset('assets/backend/plugins/select2/select2.min.css') }}" />

<style>
    input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button
    { 
    -webkit-appearance: none; 
    }
</style>
@endpush


@push('additionalJS')
{{--  Summernote  --}}
<script src="{{ asset('assets/backend/vendor/summernote/summernote-bs4.js') }}"></script>
{{-- Multiselect --}}
<script src="{{ asset('assets/backend/plugins/select2/select2.full.min.js') }}"></script>

<script>
    $(function() {
        $( ".texteditor" ).summernote({  
            'height': 300,
            'tabsize': 2
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#multiselect').select2({
                minimumResultsForSearch: Infinity
            });
    });
</script>
@endpush


