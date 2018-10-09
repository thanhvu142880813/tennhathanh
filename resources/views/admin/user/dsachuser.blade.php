@extends('layouts.master')
@section('content')
	   <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>List</small>
                            <a href="admin/user/themuser"><button style="float: right;" type="button" class="btn btn-primary">Thêm</button></a>
                        </h1>
                    </div>
                     
                        @if(session('thongbao'))
                        <div class="alert alert-success" style="text-align: center;">
                            {{session('thongbao')}}
                        </div>
                        @endif
                 
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>username</th>
                                <th>email</th>
                                <th>password</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr class="odd gradeX" align="center">
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->password}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{ route('xoauser',$user->id)}}"> Xóa</a></td>
                                <!-- <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/xoauser/{{$user->id}}"> Xóa</a></td> -->
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Sửa</a></td>
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

@section('js')
    
@endsection
