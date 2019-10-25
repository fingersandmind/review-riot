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
            $(document).on('click', '.page-delete', function(event) {
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
            <h5 class="title">Pages</h5>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="daterange-container pr-5">
                <a class="btn btn-secondary btn-rounded" href="{{ route('pages.create') }}"><span class="icon-add"></span> New Page</a>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="icon-area-graph"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pages</li>
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
                                    <th>Page Link</th>
                                    <th>Status</th>
                                    <th>Order No.</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pages as $page)
                                <tr>
                                    <td>{{ $page->id }}</td>
                                    <td>{{ $page->title }}</td>
                                    <td><a href="{{ route('page.show', $page->slug) }}" target="_blank">View</a></td>
                                    <td>
                                        @if($page->is_published == true)
                                            <span class="badge badge-pill badge-success">Published</span>
                                        @else
                                            <span class="badge badge-pill badge-dark">Unpublished</span>
                                        @endif
                                    </td>
                                    <td>{{ $page->order_no }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button name="button" class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown">
                                                <i class="fa fa-cogs mr-2"></i>Actions
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('pages.show', $page->slug) }}">View</a>
                                                <a class="dropdown-item" href="{{ route('pages.edit',$page->slug) }}">Edit</a>
                                                <a slug="{{ $page->slug }}" class="page-delete dropdown-item" href="javascript:;">Delete</a>
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

