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
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Tên biển báo</label>
                                <input class="form-control" name="txtName" placeholder="Nhập tên biển báo" />
                            </div>
                            <div class="form-group">
                                <label>Biển số:</label>
                                <input class="form-control" name="txtPrice" placeholder="Nhập biển số bao nhiêu" />
                            </div>
                            <div class="form-group">
                                <label>Loại</label>
                                 <select class="form-control">
                                    <option value="0">Chọn loại biển báo</option>
                                    <option value="">Biển cấm</option>
                                    <option value="">Biển báo nguy hiểm</option>
                                    <option value="">Biển chỉ dẫn</option>
                                    <option value="">Biển hiệu lệnh</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea class="form-control" rows="3" name="txtContent"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Ảnh</label>
                                <input type="file" name="fImages">
                            </div>
                            <div class="form-group">
                                <label>Keywords</label>
                                <input class="form-control" name="txtOrder" placeholder="Please Enter Category Keywords" />
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
@endsection