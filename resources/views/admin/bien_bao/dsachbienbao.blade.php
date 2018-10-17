@extends('layouts.master')
@section('content')
	 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Biển báo
                            <small>Danh sách</small>
                            <a href="admin/bienbao/thembienbao"><button style="float: right;" type="button" class="btn btn-primary">Thêm</button></a>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="panel-body">
                        @if(session('thongbao'))
                        <div class="alert alert-success" style="text-align: center;">
                            {{session('thongbao')}}
                        </div>
                        @endif
                    </div>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>Ảnh</th>
                                <th style="width: 150px">Tên biển báo</th>
                                <th>Biển số</th>
                                <th>Loại</th>
                                <th>Chi tiết</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                          @if ($signals && count($signals) > 0)
                          @foreach ($signals as $item)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $item->signal_id }}</td>
                                <td><img src="source/img/{{ $item->signal_image }}"></td>
                                <td>{{ $item->signal_name }}</td>
                                <td>{{ $item->signal_number }}</td>
                                <td>{{ $item->signal_category_id }}</td>
                                 <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">{{ $item->signal_name }}</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="source/img/{{ $item->signal_image }}" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>{{ $item->signal_name }}</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>{{ $item->signal_content }}</td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/bienbao/xoabienbao/{{$item->signal_id}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/bienbao/suabienbao/{{$item->signal_id}}">Sửa</a></td>
                            </tr>
                          @endforeach
                          @endif

                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection