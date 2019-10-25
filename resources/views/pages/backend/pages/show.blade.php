@extends('layouts.backend.master')

@section('content')

<div class="page-title">
    <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <h5 class="title">{{ ucfirst($page->title) }}</h5>
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
                    <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Pages</a></li>
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
                                        <h3 class="form-label" style="color: darkgrey">Page</h3>
                                        <hr>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><h5>ID</h5></label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control" id="inputReadOnly" value="{{ $page->id }}">
                                        </div>
                                    </div>

									<div class="form-group row">
										<label class="col-sm-2 col-form-label"><h5>Title</h5></label>
										<div class="col-sm-10">
											<input type="text" readonly class="form-control" value="{{ $page->title }}">
										</div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><h5>Slug</h5></label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control" value="{{ $page->slug }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
										<label class="col-sm-2 col-form-label"><h5>Content</h5></label>
										<div class="col-sm-10">
											<textarea readonly cols="30" rows="10" class="form-control">{{ strip_tags($page->content) }}</textarea>
										</div>
                                    </div>

                                    <div class="form-group row ">
                                        <label class="col-sm-2 col-form-label"><h5>Published</h5></label>
                                        <div class="col-sm-10">
                                            @if($page->is_published == true)
                                                <span class="badge badge-pill badge-success">Yes</span>
                                            @else
                                                <span class="badge badge-pill badge-dark">No</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><h5>Order No.</h5></label>
                                        <div class="col-sm-10">
                                            <span class="badge badge-pill badge-dark">{{ $page->order_no }}</span>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><h5>Meta Title</h5></label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control" value="{{ $page->meta_title }}">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
										<label class="col-sm-2 col-form-label"><h5>Meta Description</h5></label>
										<div class="col-sm-10">
											<textarea readonly cols="20" rows="5" class="form-control">{{ $page->meta_desc }}</textarea>
										</div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><h5>OG Title</h5></label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control" value="{{ $page->og_title }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
										<label class="col-sm-2 col-form-label"><h5>OG Description</h5></label>
										<div class="col-sm-10">
											<textarea readonly cols="20" rows="5" class="form-control">{{ $page->og_desc }}</textarea>
										</div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><h5>OG Image</h5></label>
                                        <div class="col-sm-10">
                                            <div class="card">
                                                <img src="/storage/{{ $page->og_image }}" class="w-50">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><h5>OG Url</h5></label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control" value="{{ $page->og_url }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><h5>Twitter Title</h5></label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control" value="{{ $page->twitter_title }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
										<label class="col-sm-2 col-form-label"><h5>Twitter Description</h5></label>
										<div class="col-sm-10">
											<textarea readonly cols="20" rows="5" class="form-control">{{ $page->twitter_desc }}</textarea>
										</div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><h5>Twitter Image</h5></label>
                                        <div class="col-sm-10">
                                            <div class="card">
                                                <img src="/storage/{{ $page->twitter_image }}" class="w-50">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><h5>Twitter Card</h5></label>
                                        <div class="col-sm-10">
                                            <div class="card">
                                                <img src="/storage/{{ $page->twitter_card }}" class="w-50">
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="pt-3">
                                        <a href="{{ route('pages.edit', $page->slug) }}"class="btn btn-secondary btn-rounded" style="float:left"> Edit </a>
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