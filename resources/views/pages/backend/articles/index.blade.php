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
    <script>
        $(document).ready(function() {
            $(document).on('click', '.article-delete', function(event) {
                event.preventDefault();
                var slug = $(this).attr('slug')

                Swal.fire({
                  title: 'Are you sure?',
                  text: "You won't be able to revert this!",
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                  if (result.value) {
                    $.ajax({
                        url: "{{ url()->current() }}/"+slug,
                        type: 'DELETE',
                        data: {
                            '_token': "{{ csrf_token() }}"
                        },
                    })
                    .done(function(data) {
                        Swal.fire(
                          'Deleted!',
                          'Your file has been deleted.',
                          'success'
                        )
                        location.reload();
                    })
                    .fail(function(xhr,status,error) {
                        console.log(xhr.responseText);
                    });
                    
                  }
                })
            }); 
        });
    </script>
@endpush

@section('content')
    
<div class="page-title">
    <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <h5 class="title">Articles</h5>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="daterange-container pr-5">
                <a class="btn btn-secondary btn-rounded" href="{{ route('articles.create') }}"><span class="icon-add"></span> New Article</a>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="icon-area-graph"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Articles</li>
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
                                    <th>Title</th>
                                    <th>Article Link</th>
                                    <th>Description</th>
                                    <th>Author</th>
                                    <th>Featured</th>
                                    <th>Toggled</th>
                                    <th>Category/Categories</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($articles as $article)
                                <tr>
                                    <td>{{ $article->id }}</td>
                                    <td>{{ $article->title }}</td>
                                    <td><a href="{{ route('article.show',$article->slug) }}" target="_blank">View</a></td>
                                    <td>{{ str_limit(strip_tags($article->body), $limit = 50, $end = '...') }}</td>
                                    <td>{{ $article->user->name }}</td>
                                    <td>
                                        @if($article->is_featured == true)
                                            <span class="badge badge-pill badge-success">Yes</span>
                                        @else
                                            <span class="badge badge-pill badge-dark">No</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($article->is_toggled == true)
                                            <span class="badge badge-pill badge-success">Yes</span>
                                        @else
                                            <span class="badge badge-pill badge-dark">No</span>
                                        @endif
                                    </td>
                                    <td>
                                        @foreach($article->categories->take(3) as $category)
                                            {{ $loop->first ? '' : ', ' }}
                                            {{ $category->name }}
                                        @endforeach
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button name="button" class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown">
                                                <i class="fa fa-cogs mr-2"></i>Actions
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('articles.show', $article->slug) }}">View</a>
                                                <a class="dropdown-item" href="{{ route('articles.edit',$article->slug) }}">Edit</a>
                                                <a slug="{{ $article->slug }}" class="article-delete dropdown-item" href="javascript:;">Delete</a>
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

