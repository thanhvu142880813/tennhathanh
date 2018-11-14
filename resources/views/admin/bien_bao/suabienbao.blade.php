@extends('layouts.master')
@section('content')
     <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Biển báo
                            <small>Sửa</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <div class="panel-body">
                            @if(count($errors)>0)
                                <div class="alert alert-danger" style="text-align: center;">
                                    @foreach ($errors->all() as $err)
                                        {{$err}} <br>
                                    @endforeach
                                </div>
                    
                            @endif
                            @if(session('thongbao'))
                            <div class="alert alert-success" style="text-align: center;">
                                {{session('thongbao')}}
                            </div>
                            @endif
                        </div>
                        <form action="admin/bienbao/suabienbao/{{$signal->id}}" method="POST">
                             {{ csrf_field()}}
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="signal_name" placeholder="Enter signal's name" value="{{$signal->signal_name}}"/>
                            </div>
                            <div class="form-group">
                                <label>Number</label>
                                <input class="form-control" name="signal_number" placeholder="Ex: P.101, W.202,..." value="{{$signal->signal_number}}"/>
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                 <select class="form-control" name='signal_category_id'>
                                    @foreach ($cate as $item)
                                    @if ($signal->signal_category_id == $item->id)
                                    <option value="{{ $item->id }}" checked >{{ $item->category_name }}</option>
                                    @endif
                                    <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea class="form-control" rows="3" name="signal_content">{{$signal->signal_content}}</textarea>
                            </div>
                            <div class="form-group">
                            <img src="source/img/{{ $signal->signal_image }}">
                                <label>Image</label>
                                <input type="file" name="signal_image" value="{{$signal->signal_image}}">
                            </div>
                            <div class="form-group">
                                <label>Keywords</label>
                                <input class="form-control" name="signal_slug" placeholder="Ex: duong-cam, cam-di-nguoc-chieu, ...." value="{{$signal->signal_slug}}" />
                            </div>
                            <div class="form-group">
                                <label></label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="1" checked="" type="radio">Hiện
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="2" type="radio">Ẩn
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection