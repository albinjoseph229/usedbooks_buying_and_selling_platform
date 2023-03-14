@extends('layout/adminmaster')
@section('content')
<div class="content-wrapper" style="min-height: 2056.4px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View More Career</h1>
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
                            <h3 class="card-title">Read Mail</h3>

                            <div class="card-tools">
                                <a href="#" class="btn btn-tool" title="Previous"><i
                                        class="fas fa-chevron-left"></i></a>
                                <a href="#" class="btn btn-tool" title="Next"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="mailbox-read-info">
                                <h5>Title:{{$career->ctitle}}</h5>
                                <h6>Date:{{$career->created_at}}</h6>
                            </div>

                            <!-- /.mailbox-controls -->
                            <div class="mailbox-read-message">
                                <p>{{$career->description}}</p>

                            </div>
                            <!-- /.mailbox-read-message -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer bg-white">
                            <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
                                <li>
                                    <span class="mailbox-attachment-icon has-img"><img
                                            src="{{asset('cimages/'.$career->image.'')}}" alt="Attachment"></span>

                                    <div class="mailbox-attachment-info">
                                        <a href="{{asset('cimages/'.$career->image.'')}}" class="mailbox-attachment-name"><i class="fas fa-camera"></i>
                                            photo1.png</a>
                                        <span class="mailbox-attachment-size clearfix mt-1">
                                            <a href="{{asset('cimages/'.$career->image.'')}}" class="btn btn-default btn-sm float-right"><i
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
                            <button type="button" class="btn btn-default"><i class="far fa-trash-alt"></i>
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
    @endsection