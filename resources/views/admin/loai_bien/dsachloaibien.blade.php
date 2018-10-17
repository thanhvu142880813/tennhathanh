@extends('layouts.master')
@section('content')
	<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại biển báo
                            <small>List</small>
                            <a href="admin/loaibien/themloaibien"><button style="float: right;" type="button" class="btn btn-primary">Thêm</button></a>
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
                                <th>Tên</th>
                                <th>Category Parent</th>
                                <th>Mô tả</th>
                                <th>Ghi chú</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($loaibien as $loaibien)
                                <tr class="odd gradeX" align="center">
                                <td>{{$loaibien->id}}</td>
                                <td>{{$loaibien->name}}</td>
                                <td>{{$loaibien->content}}</td>
                                <td>{{$loaibien->slug}}</td>
                                <td><a href="#" title="">Xem thêm</a></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/loaibien/xoaloaibien/{{$loaibien->id}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/loaibien/sualoaibien/{{$loaibien->id}}"> Sửa</a></td>
                                </tr>
                            @endforeach
                            
                            
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection
