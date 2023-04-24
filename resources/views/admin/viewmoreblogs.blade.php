@extends('layout/adminmaster')
@section('content')
<div class="content-wrapper" style="min-height: 2056.4px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View Full Blog</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('adminhome')}}">Home</a></li>
                        <li class="breadcrumb-item active">VIew Blogs/View Full Blog>
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
                  

                            <div class="card-tools">
                                <a href="#" class="btn btn-tool" title="Previous"><i
                                        class="fas fa-chevron-left"></i></a>
                                <a href="#" class="btn btn-tool" title="Next"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="mailbox-read-info">
                                <h5>Title:{{$blogs->blog_title}}</h5>
                                <h6>User:{{$blogs->name}}</h6>
                                <h6>Date:{{$blogs->bdate}}</h6>
                            </div>

                            <!-- /.mailbox-controls -->
                            <div class="mailbox-read-message">
                                <p>{{$blogs->blog_description}}</p>

                            </div>
                            <!-- /.mailbox-read-message -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer bg-white">
                            <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
                                <li>
                                    <span class="mailbox-attachment-icon has-img"><img
                                            src="{{asset('blogimages/'.$blogs->bimage1.'')}}" alt="Attachment"></span>

                                    <div class="mailbox-attachment-info">
                                        <a href="{{asset('blogimages/'.$blogs->bimage1.'')}}" class="mailbox-attachment-name"><i class="fas fa-camera"></i>
                                            photo1.png</a>
                                        <span class="mailbox-attachment-size clearfix mt-1">
                                            <a href="{{asset('blogimages/'.$blogs->bimage1.'')}}" class="btn btn-default btn-sm float-right"><i
                                                    class="fas fa-cloud-download-alt"></i></a>
                                        </span>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <!-- /.card-footer -->
                      
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