@extends('layouts.master')
@section('content')
     <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>Edit</small>
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
                        <form action="admin/loaibien/sualoaibien/{{$loaibien->id}}" method="POST">
                             {{ csrf_field()}}
                            <div class="form-group">
                                <label>Tên loại biển báo</label>
                                <input class="form-control" name="tenloaibien" placeholder="{{$loaibien->name}}" />
                            </div>                           
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea class="form-control" rows="3" name="mota"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Trạng thái</label>
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