@extends('layouts.master')
@section('content')
	<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại biển báo
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                            
                            <div class="form-group">
                                <label>Tên loại biển báo</label>
                                <input class="form-control" name="txtCateName" placeholder="Nhập tên loại biển báo" />
                            </div>                          
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Trạng thái</label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="1" checked="" type="radio">Ẩn
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="2" type="radio">Hiện
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm loại biển báo</button>
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