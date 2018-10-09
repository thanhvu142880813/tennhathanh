@extends('layouts.master')
@section('content')
	 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Biển báo
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Ảnh</th>
                                <th>Tên biển báo</th>
                                <th>Biển số</th>
                                <th>Loại</th>
                                <th>Trạng thái</th>
                                <th>Chi tiết</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX" align="center">
                                <td>1</td>
                                <td><img src="../img/banned/bien-bao-cam-101.jpg"></td>
                                <td>Đường cấm</td>
                                <td>P.101</td>
                                <td>1</td>
                                <td>Hiện</td>
                                <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Biển số 101: Đường cấm</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="../img/banned/bien-bao-cam-101.jpg" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>Biển cấm</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>Báo đường cấm tất cả các loại phương tiện (cơ giới và thô sơ) đi lại cả hai hướng, trừ các xe được ưu tiên theo quy định</td>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/product_edit.html">Sửa</a></td>
                            </tr>
                            <tr class="even gradeC" align="center">
                                <td>2</td>
                                <td><img src="../img/banned/bien-bao-cam-102.jpg"></td>
                                <td>Cấm đi ngược chiều</td>
                                <td>P.102</td>
                                <td>1</td>
                                <td>Ẩn</td>
                                <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Biển số 101: Đường cấm</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="../img/banned/bien-bao-cam-101.jpg" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>Biển cấm</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>Báo đường cấm tất cả các loại phương tiện (cơ giới và thô sơ) đi lại cả hai hướng, trừ các xe được ưu tiên theo quy định</td>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/product_edit.html">Sửa</a></td>
                            </tr>
                            <tr class="even gradeC" align="center">
                                <td>3</td>
                                <td><img src="../img/banned/bien-bao-cam-103a.jpg"></td>
                                <td>Cấm ô tô</td>
                                <td>P.103a</td>
                                <td>1</td>
                                <td>Ẩn</td>
                                <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Biển số 101: Đường cấm</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="../img/banned/bien-bao-cam-101.jpg" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>Biển cấm</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>Báo đường cấm tất cả các loại phương tiện (cơ giới và thô sơ) đi lại cả hai hướng, trừ các xe được ưu tiên theo quy định</td>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/product_edit.html">Sửa</a></td>
                            </tr>
                            <tr class="even gradeC" align="center">
                                <td>4</td>
                                <td><img src="../img/banned/bien-bao-cam-103b.jpg"></td>
                                <td>Cấm ô tô rẽ phải</td>
                                <td>P.103b</td>
                                <td>1</td>
                                <td>Ẩn</td>
                                <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Biển số 101: Đường cấm</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="../img/banned/bien-bao-cam-101.jpg" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>Biển cấm</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>Báo đường cấm tất cả các loại phương tiện (cơ giới và thô sơ) đi lại cả hai hướng, trừ các xe được ưu tiên theo quy định</td>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/product_edit.html">Sửa</a></td>
                            </tr>
                            <tr class="even gradeC" align="center">
                                <td>5</td>
                                <td><img src="../img/banned/bien-bao-cam-103c.jpg"></td>
                                <td>Cấm ô tô rẽ trái</td>
                                <td>P.103c</td>
                                <td>1</td>
                                <td>Ẩn</td>
                                <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Biển số 101: Đường cấm</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="../img/banned/bien-bao-cam-101.jpg" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>Biển cấm</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>Báo đường cấm tất cả các loại phương tiện (cơ giới và thô sơ) đi lại cả hai hướng, trừ các xe được ưu tiên theo quy định</td>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/product_edit.html">Sửa</a></td>
                            </tr>
                            <tr class="even gradeC" align="center">
                                <td>6</td>
                                <td><img src="../img/banned/bien-bao-cam-104.jpg"></td>
                                <td>Cấm mô tô</td>
                                <td>P.104</td>
                                <td>1</td>
                                <td>Ẩn</td>
                                <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Biển số 101: Đường cấm</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="../img/banned/bien-bao-cam-101.jpg" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>Biển cấm</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>Báo đường cấm tất cả các loại phương tiện (cơ giới và thô sơ) đi lại cả hai hướng, trừ các xe được ưu tiên theo quy định</td>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/product_edit.html">Sửa</a></td>
                            </tr>
                            <tr class="even gradeC" align="center">
                                <td>7</td>
                                <td><img src="../img/banned/bien-bao-cam-105.jpg"></td>
                                <td>Cấm ô tô và mô tô</td>
                                <td>P.105</td>
                                <td>1</td>
                                <td>Ẩn</td>
                                <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Biển số 101: Đường cấm</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="../img/banned/bien-bao-cam-101.jpg" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>Biển cấm</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>Báo đường cấm tất cả các loại phương tiện (cơ giới và thô sơ) đi lại cả hai hướng, trừ các xe được ưu tiên theo quy định</td>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/product_edit.html">Sửa</a></td>
                            </tr>
                            <tr class="even gradeC" align="center">
                                <td>8</td>
                                <td><img src="../img/banned/bien-bao-cam-106a.jpg"></td>
                                <td>Cấm ô tô tải</td>
                                <td>P.106a</td>
                                <td>1</td>
                                <td>Ẩn</td>
                                <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Biển số 101: Đường cấm</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="../img/banned/bien-bao-cam-101.jpg" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>Biển cấm</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>Báo đường cấm tất cả các loại phương tiện (cơ giới và thô sơ) đi lại cả hai hướng, trừ các xe được ưu tiên theo quy định</td>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/product_edit.html">Sửa</a></td>
                            </tr>
                            <tr class="even gradeC" align="center">
                                <td>9</td>
                                <td><img src="../img/banned/bien-bao-cam-106b.jpg"></td>
                                <td>Cấm ô tô tải</td>
                                <td>P.106b</td>
                                <td>1</td>
                                <td>Ẩn</td>
                                <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Biển số 101: Đường cấm</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="../img/banned/bien-bao-cam-101.jpg" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>Biển cấm</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>Báo đường cấm tất cả các loại phương tiện (cơ giới và thô sơ) đi lại cả hai hướng, trừ các xe được ưu tiên theo quy định</td>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/product_edit.html">Sửa</a></td>
                            </tr>
                            <tr class="even gradeC" align="center">
                                <td>10</td>
                                <td><img src="../img/banned/bien-bao-cam-107.jpg"></td>
                                <td>Cấm xe chở hàng nguy hiểm</td>
                                <td>P.107</td>
                                <td>1</td>
                                <td>Ẩn</td>
                                <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Biển số 101: Đường cấm</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="../img/banned/bien-bao-cam-101.jpg" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>Biển cấm</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>Báo đường cấm tất cả các loại phương tiện (cơ giới và thô sơ) đi lại cả hai hướng, trừ các xe được ưu tiên theo quy định</td>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/product_edit.html">Sửa</a></td>
                            </tr>
                            <tr class="even gradeC" align="center">
                                <td>11</td>
                                <td><img src="../img/banned/bien-bao-cam-108.jpg"></td>
                                <td>Cấm ô tô  khách và ô tô  tải</td>
                                <td>P.108</td>
                                <td>1</td>
                                <td>Ẩn</td>
                                <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Biển số 101: Đường cấm</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="../img/banned/bien-bao-cam-101.jpg" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>Biển cấm</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>Báo đường cấm tất cả các loại phương tiện (cơ giới và thô sơ) đi lại cả hai hướng, trừ các xe được ưu tiên theo quy định</td>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/product_edit.html">Sửa</a></td>
                            </tr>
                            <tr class="even gradeC" align="center">
                                <td>12</td>
                                <td><img src="../img/banned/bien-bao-cam-109.jpg"></td>
                                <td>Cấm  ô tô, máy kéo kéo moóc hoặc sơ mi rơ moóc`</td>
                                <td>P.109</td>
                                <td>1</td>
                                <td>Ẩn</td>
                                <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Biển số 101: Đường cấm</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="../img/banned/bien-bao-cam-101.jpg" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>Biển cấm</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>Báo đường cấm tất cả các loại phương tiện (cơ giới và thô sơ) đi lại cả hai hướng, trừ các xe được ưu tiên theo quy định</td>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/product_edit.html">Sửa</a></td>
                            </tr>
                            <tr class="even gradeC" align="center">
                                <td>13</td>
                                <td><img src="../img/danger/bien-bao-nguy-hiem-201a.jpg"></td>
                                <td>Chỗ ngoặt nguy hiểm vòng bên trái</td>
                                <td>201a</td>
                                <td>1</td>
                                <td>Ẩn</td>
                                <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Biển số 101: Đường cấm</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="../img/banned/bien-bao-cam-101.jpg" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>Biển cấm</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>Báo đường cấm tất cả các loại phương tiện (cơ giới và thô sơ) đi lại cả hai hướng, trừ các xe được ưu tiên theo quy định</td>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/product_edit.html">Sửa</a></td>
                            </tr>
                            <tr class="even gradeC" align="center">
                                <td>14</td>
                                <td><img src="../img/danger/bien-bao-nguy-hiem-201b.jpg"></td>
                                <td>Chỗ ngoặt nguy hiểm vòng bên phải</td>
                                <td>201b</td>
                                <td>2</td>
                                <td>Ẩn</td>
                                <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Biển số 101: Đường cấm</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="../img/banned/bien-bao-cam-101.jpg" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>Biển cấm</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>Báo đường cấm tất cả các loại phương tiện (cơ giới và thô sơ) đi lại cả hai hướng, trừ các xe được ưu tiên theo quy định</td>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/product_edit.html">Sửa</a></td>
                            </tr>
                            <tr class="even gradeC" align="center">
                                <td>15</td>
                                <td><img src="../img/danger/bien-bao-nguy-hiem-202a.jpg"></td>
                                <td>Nhiều chỗ ngoặt nguy hiểm liên tiếp</td>
                                <td>202</td>
                                <td>2</td>
                                <td>Ẩn</td>
                                <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Biển số 101: Đường cấm</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="../img/banned/bien-bao-cam-101.jpg" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>Biển cấm</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>Báo đường cấm tất cả các loại phương tiện (cơ giới và thô sơ) đi lại cả hai hướng, trừ các xe được ưu tiên theo quy định</td>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/product_edit.html">Sửa</a></td>
                            </tr>
                            <tr class="even gradeC" align="center">
                                <td>16</td>
                                <td><img src="../img/danger/bien-bao-nguy-hiem-202b.jpg"></td>
                                <td>Nhiều chỗ ngoặt nguy hiểm liên tiếp</td>
                                <td>202</td>
                                <td>2</td>
                                <td>Ẩn</td>
                                <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Biển số 101: Đường cấm</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="../img/banned/bien-bao-cam-101.jpg" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>Biển cấm</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>Báo đường cấm tất cả các loại phương tiện (cơ giới và thô sơ) đi lại cả hai hướng, trừ các xe được ưu tiên theo quy định</td>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/product_edit.html">Sửa</a></td>
                            </tr>
                            <tr class="even gradeC" align="center">
                                <td>17</td>
                               <td><img src="../img/danger/bien-bao-nguy-hiem-203a.jpg"></td>
                                <td>Đường bị hẹp cả hai bên</td>
                                <td>203</td>
                                <td>2</td>
                                <td>Ẩn</td>
                                <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Biển số 101: Đường cấm</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="../img/banned/bien-bao-cam-101.jpg" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>Biển cấm</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>Báo đường cấm tất cả các loại phương tiện (cơ giới và thô sơ) đi lại cả hai hướng, trừ các xe được ưu tiên theo quy định</td>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/product_edit.html">Sửa</a></td>
                            </tr>
                             <tr class="even gradeC" align="center">
                                <td>18</td>
                               <td><img src="../img/danger/bien-bao-nguy-hiem-203b.jpg"></td>
                                <td>Đường bị hẹp về phía trái</td>
                                <td>203</td>
                                <td>2</td>
                                <td>Ẩn</td>
                                <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Biển số 101: Đường cấm</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="../img/banned/bien-bao-cam-101.jpg" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>Biển cấm</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>Báo đường cấm tất cả các loại phương tiện (cơ giới và thô sơ) đi lại cả hai hướng, trừ các xe được ưu tiên theo quy định</td>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/product_edit.html">Sửa</a></td>
                            </tr>
                             <tr class="even gradeC" align="center">
                                <td>19</td>
                               <td><img src="../img/danger/bien-bao-nguy-hiem-203c.jpg"></td>
                                <td>Đường bị hẹp về phía phải</td>
                                <td>203</td>
                                <td>2</td>
                                <td>Ẩn</td>
                                <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Biển số 101: Đường cấm</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="../img/banned/bien-bao-cam-101.jpg" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>Biển cấm</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>Báo đường cấm tất cả các loại phương tiện (cơ giới và thô sơ) đi lại cả hai hướng, trừ các xe được ưu tiên theo quy định</td>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/product_edit.html">Sửa</a></td>
                            </tr>
                             <tr class="even gradeC" align="center">
                                <td>20</td>
                               <td><img src="../img/danger/bien-bao-nguy-hiem-204.jpg"></td>
                                <td>Đường hai chiều</td>
                                <td>204</td>
                                <td>2</td>
                                <td>Ẩn</td>
                                <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Biển số 101: Đường cấm</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="../img/banned/bien-bao-cam-101.jpg" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>Biển cấm</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>Báo đường cấm tất cả các loại phương tiện (cơ giới và thô sơ) đi lại cả hai hướng, trừ các xe được ưu tiên theo quy định</td>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/product_edit.html">Sửa</a></td>
                            </tr>
                             <tr class="even gradeC" align="center">
                                <td>21</td>
                               <td><img src="../img/danger/bien-bao-nguy-hiem-205a.jpg"></td>
                                <td>Đường giao nhau cùng cấp</td>
                                <td>205</td>
                                <td>2</td>
                                <td>Ẩn</td>
                                <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Biển số 101: Đường cấm</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="../img/banned/bien-bao-cam-101.jpg" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>Biển cấm</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>Báo đường cấm tất cả các loại phương tiện (cơ giới và thô sơ) đi lại cả hai hướng, trừ các xe được ưu tiên theo quy định</td>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/product_edit.html">Sửa</a></td>
                            </tr>

                            <tr class="even gradeC" align="center">
                                <td>22</td>
                               <td><img src="../img/hieulenh/bien-hieu-lenh-301a.jpg"></td>
                                <td>Hướng đi phải theo</td>
                                <td>301</td>
                                <td>3</td>
                                <td>Hiện</td>
                                <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Biển số 101: Đường cấm</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="../img/banned/bien-bao-cam-101.jpg" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>Biển cấm</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>Báo đường cấm tất cả các loại phương tiện (cơ giới và thô sơ) đi lại cả hai hướng, trừ các xe được ưu tiên theo quy định</td>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/product_edit.html">Sửa</a></td>
                            </tr>
                            <tr class="even gradeC" align="center">
                                <td>23</td>
                               <td><img src="../img/hieulenh/bien-hieu-lenh-309.jpg"></td>
                                 <td>Ấn còi</td>
                                <td>301</td>
                                <td>3</td>
                                <td>Hiện</td>
                                <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Biển số 101: Đường cấm</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="../img/banned/bien-bao-cam-101.jpg" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>Biển cấm</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>Báo đường cấm tất cả các loại phương tiện (cơ giới và thô sơ) đi lại cả hai hướng, trừ các xe được ưu tiên theo quy định</td>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/product_edit.html">Sửa</a></td>
                            </tr>
                            <tr class="even gradeC" align="center">
                                <td>24</td>
                               <td><img src="../img/hieulenh/bien-hieu-lenh-305.jpg"></td>
                                <td>Đường dành cho người đi bộ</td>
                                <td>301</td>
                                <td>3</td>
                                <td>Hiện</td>
                                <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Biển số 101: Đường cấm</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="../img/banned/bien-bao-cam-101.jpg" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>Biển cấm</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>Báo đường cấm tất cả các loại phương tiện (cơ giới và thô sơ) đi lại cả hai hướng, trừ các xe được ưu tiên theo quy định</td>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/product_edit.html">Sửa</a></td>
                            </tr>
                            <tr class="even gradeC" align="center">
                                <td>25</td>
                               <td><img src="../img/hieulenh/bien-hieu-lenh-310a.jpg"></td>
                                <td>Hướng đi phải theo cho các xe chở hàng nguy hiểm</td>
                                <td>301</td>
                                <td>3</td>
                                <td>Hiện</td>
                                <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Biển số 101: Đường cấm</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="../img/banned/bien-bao-cam-101.jpg" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>Biển cấm</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>Báo đường cấm tất cả các loại phương tiện (cơ giới và thô sơ) đi lại cả hai hướng, trừ các xe được ưu tiên theo quy định</td>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/product_edit.html">Sửa</a></td>
                            </tr>

                             <tr class="even gradeC" align="center">
                                <td>26</td>
                               <td><img src="../img/signpost/bien-chi-dan-401.png"></td>
                                <td>Bắt đầu đường ưu tiên</td>
                                <td>401</td>
                                <td>4</td>
                                <td>Hiện</td>
                                <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Biển số 101: Đường cấm</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="../img/banned/bien-bao-cam-101.jpg" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>Biển cấm</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>Báo đường cấm tất cả các loại phương tiện (cơ giới và thô sơ) đi lại cả hai hướng, trừ các xe được ưu tiên theo quy định</td>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/product_edit.html">Sửa</a></td>
                            </tr>
                            <tr class="even gradeC" align="center">
                                <td>27</td>
                               <td><img src="../img/signpost/bien-chi-dan-402.png"></td>
                                <td>Hết đoạn đường ưu tiên</td>
                                <td>402</td>
                                <td>4</td>
                                <td>Hiện</td>
                                <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Biển số 101: Đường cấm</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="../img/banned/bien-bao-cam-101.jpg" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>Biển cấm</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>Báo đường cấm tất cả các loại phương tiện (cơ giới và thô sơ) đi lại cả hai hướng, trừ các xe được ưu tiên theo quy định</td>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/product_edit.html">Sửa</a></td>
                            </tr>
                            <tr class="even gradeC" align="center">
                                <td>28</td>
                               <td><img src="../img/signpost/bien-chi-dan-403a.png"></td>
                                <td>Đường dành cho ôtô</td>
                                <td>403a</td>
                                <td>4</td>
                                <td>Hiện</td>
                                <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Biển số 101: Đường cấm</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="../img/banned/bien-bao-cam-101.jpg" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>Biển cấm</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>Báo đường cấm tất cả các loại phương tiện (cơ giới và thô sơ) đi lại cả hai hướng, trừ các xe được ưu tiên theo quy định</td>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/product_edit.html">Sửa</a></td>
                            </tr>
                            <tr class="even gradeC" align="center">
                                <td>29</td>
                               <td><img src="../img/signpost/bien-chi-dan-403b.png"></td>
                                <td>Đường dành cho ô tô, xe máy</td>
                                <td>403b</td>
                                <td>4</td>
                                <td>Hiện</td>
                                <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Biển số 101: Đường cấm</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="../img/banned/bien-bao-cam-101.jpg" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>Biển cấm</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>Báo đường cấm tất cả các loại phương tiện (cơ giới và thô sơ) đi lại cả hai hướng, trừ các xe được ưu tiên theo quy định</td>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/product_edit.html">Sửa</a></td>
                            </tr>
                            <tr class="even gradeC" align="center">
                                <td>30</td>
                               <td><img src="../img/signpost/bien-chi-dan-404a.png"></td>
                                <td>Hết đường dành cho ô tô</td>
                                <td>404a</td>
                                <td>4</td>
                                <td>Hiện</td>
                                <td>
                                     <a data-toggle="modal" data-target="#myModal">Xem</a>
                                     <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog ">
    
                                        <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Biển số 101: Đường cấm</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped table-bordered table-hover" >
                                              <tbody>
                                                <tr>
                                                      
                                                      <td colspan="2"><center><img src="../img/banned/bien-bao-cam-101.jpg" style="height: 250px;width: 250px"></center></td>
                                                </tr>
                                                <tr>
                                                      <th>Loại</th>
                                                      <td>Biển cấm</td>
                                                </tr>
                                                <tr>
                                                      <th>Mô tả</th>
                                                      <td>Báo đường cấm tất cả các loại phương tiện (cơ giới và thô sơ) đi lại cả hai hướng, trừ các xe được ưu tiên theo quy định</td>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/product_edit.html">Sửa</a></td>
                            </tr>

                            



        

                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection