@extends('layout/adminmaster')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View Books</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('adminhome')}}">Home</a></li>
                        <li class="breadcrumb-item active">View Books</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">View Books</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                                @elseif(session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                                @endif
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Title</th>
                                                <th>User Name</th>
                                                <th>Price</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    <tbody>
                                        @php $i=1; @endphp
                                        @foreach($books as $book)
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$book->bookname}}</td>
                                            <td>{{$book->name}}</td>
                                            <td>{{$book->price}}</td>
                                            <td>{{$book->created_at}}</td>


                                            <td>
                                                <button title="Delete Book" class="btn btn-danger btn-sm deleteme"
                                                    data-value="{{$book->id}}" data-toggle="modal"
                                                    data-target="#modal-primary"><i class="fa fa-trash"></i></button>
                                                <a title="View more " href="{{url('admin.viewbooks/'.$book->id.'')}}"
                                                    class="btn btn-sm btn-warning"><i class="fa fa-eye"></i></a>
                                                <a title="View complaints" href="{{ route('admin.viewcomplaints',$book->id)}}"
                                                    class="btn btn-sm btn-warning"><i class=" 	fas fa-frown"></i></a>
                                                   
                                            </td>
                                            </td>
                                        </tr>
                                        @php $i++; @endphp
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Title</th>
                                            <th>User Name</th>
                                            <th>Price</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<div class="modal fade" id="modal-primary" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-danger">
            <div class="modal-header">
                <h4 class="modal-title">Delete Books</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="post" action="{{route('admin.deletebooks')}}">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="dodelete" name="dodelete" />
                    <p>Are You Sure ?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-light">OK</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endsection