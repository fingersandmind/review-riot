@extends('layouts.backend.master')


@section('content')

<div class="page-title">
    <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <h5 class="title">Edit Page</h5>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="icon-area-graph"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Pages</a></li>
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
                <form action="{{ route('pages.update', $page->slug) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="card-header">
                        <h3>Pages</h3>
                    </div>
                    <div class="card-header">
                        <div class="form-group">
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Title Here" value="{{ old('title') ?? $page->title }}" required>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="card-body">

                        <textarea name="content" class="texteditor @error('content') is-invalid @enderror" placeholder="Content here">{{ old('content') ?? $page->content }}</textarea>
                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="custom-control custom-switch pt-4 pb-4">
                                    <input type="checkbox" class="custom-control-input" name="is_published" id="customSwitch3" 
                                    @if($page->is_published === 1) 
                                    checked 
                                    @endif>
                                    <label class="custom-control-label" for="customSwitch3" title="Publish this page">Publish Page</label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="custom-control custom-switch pt-4 pb-4 flex">
                                    <input type="number" class="form-control @error('order_no') is-invalid @enderror" name="order_no" id="orderNumber" placeholder="Order No." value="{{ old('order_no') ?? $page->order_no }}">
                                    @error('order_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-header">
                        <h3>For SEO Section</h3>
                    </div>
                    <div class="card-body">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="meta_title">Meta Title</label>
                                <input type="text" id="meta_title" name="meta_title" class="form-control @error('meta_title') is-invalid @enderror" value="{{ old('meta_title') ?? $page->meta_title }}">
                                @error('meta_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="meta_desc">Meta Description</label>
                                <textarea name="meta_desc" class="form-control @error('meta_desc') is-invalid @enderror" id="" cols="30" rows="5">{{ old('meta_desc') ?? $page->meta_desc }}</textarea>
                                </small>
                                @error('meta_desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="og_title">Og Title</label>
                                <input type="text" id="og_title" name="og_title" class="form-control @error('og_title') is-invalid @enderror" value="{{ old('og_title') ?? $page->og_title }}">
                                @error('og_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="og_desc">Og Description</label>
                                <textarea name="og_desc" class="form-control @error('og_desc') is-invalid @enderror" id="" cols="30" rows="5">{{ old('og_desc') ?? $page->og_desc }}</textarea>
                                </small>
                                @error('og_desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="og_url">Og Url</label>
                                <input type="text" id="og_url" name="og_url" class="form-control @error('og_url') is-invalid @enderror" value="{{ old('og_url') ?? $page->og_url }}">
                                @error('og_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                    </div>
                                    <div class="custom-file pb-4">
                                        <input type="file" class="custom-file-input @error('og_image') is-invalid @enderror" id="inputBannerImage" name="og_image" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputBannerImage">Og Image</label>
                                    </div>
                                </div>
                                <div class="pt-2 pb-2">
                                    <small class="text-muted">
                                        Must be a valid image.
                                    </small>
                                </div>
                                @error('image')
                                <p><code>{{ $message }}</code></p>
                                @enderror
                            </div>
                            <hr>

                            <div class="form-group pt-5">
                                <label for="twitter_title">Twitter Title</label>
                                <input type="text" id="twitter_title" name="twitter_title" class="form-control @error('twitter_title') is-invalid @enderror" value="{{ old('twitter_title') ?? $page->twitter_title }}">
                                @error('twitter_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="twitter_desc">Twitter Description</label>
                                <textarea name="twitter_desc" class="form-control @error('twitter_desc') is-invalid @enderror" id="" cols="30" rows="5">{{ old('twitter_desc') ?? $page->twitter_desc }}</textarea>
                                </small>
                                @error('twitter_desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                    </div>
                                    <div class="custom-file pb-4">
                                        <input type="file" class="custom-file-input @error('twitter_image') is-invalid @enderror" id="inputBannerImage" name="twitter_image" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputBannerImage">Twitter Image</label>
                                    </div>
                                </div>
                                <div class="pt-2 pb-2">
                                    <small class="text-muted">
                                        Must be a valid image.
                                    </small>
                                </div>
                                @error('twitter_image')
                                <p><code>{{ $message }}</code></p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                    </div>
                                    <div class="custom-file pb-4">
                                        <input type="file" class="custom-file-input @error('twitter_card') is-invalid @enderror" id="inputBannerImage" name="twitter_card" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputBannerImage">Twitter Card</label>
                                    </div>
                                </div>
                                <div class="pt-2 pb-2">
                                    <small class="text-muted">
                                        Must be a valid image.
                                    </small>
                                </div>
                                @error('twitter_card')
                                <p><code>{{ $message }}</code></p>
                                @enderror
                            </div>
                            <hr>
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
        },'code');
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