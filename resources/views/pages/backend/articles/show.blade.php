@extends('layouts.backend.master')

@section('content')

<div class="page-title">
    <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <h5 class="title">{{ ucfirst($article->title) }}</h5>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="daterange-container pr-5">
                {{-- <a class="btn btn-secondary btn-rounded" href="{{ route('types.create') }}"><span class="icon-add"></span> New Type</a> --}}
            </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="icon-area-graph"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('articles.index') }}">Articles</a></li>
                    <li class="breadcrumb-item active" aria-current="page">View</li>
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
                    <div class="card-body">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-body">
                                    <div class="col-lg-10 pt-7">
                                        <h3 class="form-label" style="color: darkgrey">Article</h3>
                                        <hr>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><h5>ID</h5></label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control" id="inputReadOnly" value="{{ $article->id }}">
                                        </div>
                                    </div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label"><h5>Title</h5></label>
										<div class="col-sm-10">
											<input type="text" readonly class="form-control" value="{{ $article->title }}">
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><h5>Slug</h5></label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control" value="{{ $article->slug }}">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
										<label class="col-sm-2 col-form-label"><h5>Content</h5></label>
										<div class="col-sm-10">
											<textarea readonly cols="30" rows="10" class="form-control">{{ strip_tags($article->body) }}</textarea>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><h5>Author</h5></label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control" value="{{ $article->user->name }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><h5>Banner Image</h5></label>
                                        <div class="col-sm-10">
                                            <div class="card">
                                                <img src="/storage/{{ $article->featured_image }}" class="w-50">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="col-sm-2 col-form-label"><h5>Featured on Homepage</h5></label>
                                        <div class="col-sm-10">
                                            @if($article->is_featured == true)
                                                <span class="badge badge-pill badge-success">Yes</span>
                                            @else
                                                <span class="badge badge-pill badge-dark">No</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><h5>Author</h5></label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control" value="{{ $article->user->name }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><h5>Logo Title</h5></label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control" value="{{ $article->logo_title }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><h5>Logo</h5></label>
                                        <div class="col-sm-10">
                                            <img src="/storage/{{ $article->logo }}">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="col-sm-2 col-form-label"><h5>Toogled</h5></label>
                                        <div class="col-sm-10">
                                            @if($article->is_toggled == true)
                                                <span class="badge badge-pill badge-success">Yes</span>
                                            @else
                                                <span class="badge badge-pill badge-dark">No</span>
                                            @endif
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-lg-10 pt-7">
                                        <h3 class="form-label" style="color: darkgrey">Company Details</h3>
                                        <hr>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><h5>Company Name</h5></label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control" value="{{ $article->company_name }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><h5>Email</h5></label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control" value="{{ $article->email }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><h5>Url</h5></label>
                                        <div class="col-sm-10">
                                            <a href="{{ $article->url }}" target="_blank" class="form-control">{{ $article->url }}</a>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><h5>Phone Number</h5></label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control" value="{{ $article->phone }}">
                                        </div>
                                    </div>
                                    <div class="pt-3">
                                        <a href="{{ route('articles.edit', $article->slug) }}"class="btn btn-secondary btn-rounded" style="float:left"> Edit </a>
                                    </div>
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection