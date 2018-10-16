@extends('layouts.master')
@section('content')
	 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Biển báo
                            <small>Thêm</small>
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
                        <form action="admin/bien_bao/thembienbao" method="POST">
                            <div class="form-group">
                                <label>Tên biển báo</label>
                                <input class="form-control" name="signal_name" placeholder="Nhập tên biển báo" />
                            </div>
                            <div class="form-group">
                                <label>Biển số:</label>
                                <input class="form-control" name="signal_number" placeholder="Nhập biển số bao nhiêu" />
                            </div>
                            <div class="form-group">
                                <label>Loại</label>
                                 <select class="form-control" id="signal_category_id">
                                    <option value="0">Chọn loại biển báo</option>
                                    {!! $categoryOption !!}
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea class="form-control" rows="3" name="signal_content"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Ảnh</label>
                                <input type="file" name="fImages">
                            </div>
                            <div class="form-group">
                                <label>Keywords</label>
                                <input class="form-control" name="signal_slug" placeholder="Please Enter Category Keywords" />
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea class="form-control" rows="3"></textarea>
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
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection