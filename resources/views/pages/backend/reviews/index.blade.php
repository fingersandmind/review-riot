@extends('layouts.backend.master')

@push('additionalCSS')
    <link rel="stylesheet" href="{{ asset('assets/backend/vendor/datatables/dataTables.bs4.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/backend/vendor/datatables/dataTables.bs4-custom.css') }}" />
@endpush

@push('additionalJS')
    <script src="{{ asset('assets/backend/vendor/datatables/dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/backend/vendor/datatables/dataTables.bootstrap.min.js') }}"></script>

    <!-- Custom Data tables -->
    <script src="{{ asset('assets/backend/vendor/datatables/custom/custom-datatables.js') }}"></script>
    <script src="{{ asset('assets/backend/vendor/datatables/custom/fixedHeader.js') }}"></script>
    <script>
        $(function(e) {
            $('#datatables').DataTable();
        } );
    </script>
@endpush

@section('content')
    
<div class="page-title">
    <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <h5 class="title">Reviews</h5>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="daterange-container pr-5">
                <a class="btn btn-secondary btn-rounded" href="{{ route('reviews.create') }}"><span class="icon-add"></span> New Review</a>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="icon-area-graph"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Reviews</li>
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
                    <div class="table-responsive">
                        <table id="datatables" class="table m-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Content</th>
                                    <th>Listing</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reviews as $review)
                                <tr>
                                    <td>{{ $review->id }}</td>
                                    <td>{{ str_limit(strip_tags($review->content), $limit=50, $end = '...') }}</td>
                                    <td>{{ $review->listing->name }}</td>
                                    <td>
                                        @if( $review->status === 'Published' )
                                            <span class="badge badge-pill badge-success">{{ $review->status }}</span>
                                        @elseif( $review->status === 'Draft' )
                                            <span class="badge badge-pill badge-danger">{{ $review->status }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button name="button" class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown">
                                                <i class="fa fa-cogs mr-2"></i>Actions
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View</a>
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <form action="{{ route('reviews.destroy',$review->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button article="submit" class="dropdown-item" onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


