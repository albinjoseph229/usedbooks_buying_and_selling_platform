@extends('layout/adminmaster')
@section('content')
<div class="content-wrapper" style="min-height: 2056.4px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View Book Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('adminhome')}}">Home</a></li>
                        <li class="breadcrumb-item active">VIew More Career>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!--main content-->
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">More Book Deatails</h3>
                            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @elseif(session('failed'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('failed') }}
                        </div>
                        @endif
                            <div class="card-tools">
                                <a href="#" class="btn btn-tool" title="Previous"><i
                                        class="fas fa-chevron-left"></i></a>
                                <a href="#" class="btn btn-tool" title="Next"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="mailbox-read-info">
                                <h5>Book Name:{{$book->bookname}}</h5>
                                <h6>Date & Time:{{$book->created_at}}</h6>
                            </div>

                            <!-- /.mailbox-controls -->
                            <div class="mailbox-read-message">
                                <p>Book Description:{{$book->bookdescription}}</p>

                            </div>
                            <!-- /.mailbox-read-message -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer bg-white">
                            <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
                                <li>
                                    <span class="mailbox-attachment-icon has-img"><img
                                            src="{{asset('bookimages/'.$book->coverpage1.'')}}" alt="Attachment"></span>

                                    <div class="mailbox-attachment-info">
                                        <a href="{{asset('bookimages/'.$book->coverpage1.'')}}"
                                            class="mailbox-attachment-name"><i class="fas fa-camera"></i>
                                            photo1.png</a>
                                        <span class="mailbox-attachment-size clearfix mt-1">
                                            <a href="{{asset('bookimages/'.$book->coverpage1.'')}}"
                                                class="btn btn-default btn-sm float-right"><i
                                                    class="fas fa-cloud-download-alt"></i></a>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <span class="mailbox-attachment-icon has-img"><img
                                            src="{{asset('bookimages/'.$book->coverpage2.'')}}" alt="Attachment"></span>

                                    <div class="mailbox-attachment-info">
                                        <a href="{{asset('bookimages/'.$book->coverpage2.'')}}"
                                            class="mailbox-attachment-name"><i class="fas fa-camera"></i>
                                            photo1.png</a>
                                        <span class="mailbox-attachment-size clearfix mt-1">
                                            <a href="{{asset('bookimages/'.$book->coverpage2.'')}}"
                                                class="btn btn-default btn-sm float-right"><i
                                                    class="fas fa-cloud-download-alt"></i></a>
                                        </span>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <!-- /.card-footer -->
                        <div class="card-footer">
                            <div class="float-right">
                                <button type="button" class="btn btn-default"><i class="fas fa-reply"></i>
                                    Reply</button>
                                <button type="button" class="btn btn-default"><i class="fas fa-share"></i>
                                    Forward</button>
                            </div>
                            <button data-toggle="modal" data-target="#modal-primary" title="Delete"
                             type="button" class="btn btn-sm btn-danger deleteme" data-value="{{$book->id}}"><i
                                    class="fa fa-trash"></i>
                            Delete</button>
                            <button type="button" class="btn btn-default"><i class="fas fa-print"></i> Print</button>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
</div>
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
    </<div>
    @endsection