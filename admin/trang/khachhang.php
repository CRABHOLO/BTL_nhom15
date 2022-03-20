
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Khách hàng</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Quản trị khách hàng
                </div>
                <div class="col-sm-3" style="float: right">
                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Thêm khách hàng</span></a>

                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Họ và tên</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>IDUser</th>
                                <th>Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php include '../../connected.php';

                            $sql="SELECT * FROM khachhang ORDER BY HoTen ASC";
                            $query=mysqli_query($link,$sql);

                            while ($row=mysqli_fetch_array($query)) {
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $row['HoTen'] ?></td>
                                <td><?php echo $row['Email'] ?></td>
                                <td><?php echo $row['SDT'] ?></td>
                                <td><?php echo $row['DiaChi'] ?></td>
                                <td class="center"><?php echo $row['IDUser'] ?></td>
                                <td style="text-align: center; ">
                                    <a style="cursor: pointer" class="delete" onclick="confirmXoaKH(<?php echo $row['IDUser']?>)" ><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                </td>
                            </tr>
                            <?php }?>
                            </tbody>
                        </table>

                    </div>




                    <!-- Mẫu thêm khách hàng HTML -->
                    <div id="addEmployeeModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form name="formThemKH" id="formThemKH">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Thêm khách hàng</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="hoten-dk">Họ tên</label>
                                            <input type="text" class="form-control" id="hoten-dk" required>
                                            <small id="err-name" class="thongbao-loiform"></small>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" id="email-dk" required>
                                            <small id="err-email" class="thongbao-loiform"></small>
                                        </div>
                                        <div class="form-group">
                                            <label>Mật khẩu</label>
                                            <input type="password" class="form-control" id="matkhau-dk" required/>
                                            <small id="err-mk" class="thongbao-loiform"></small>
                                        </div>
                                        <div class="form-group">
                                            <label>Địa chỉ</label>
                                            <textarea class="form-control" id="diachi-dk" required></textarea>
                                            <small id="err-diachi" class="thongbao-loiform"></small>
                                        </div>
                                        <div class="form-group">
                                            <label>Số điện thoại</label>
                                            <input type="text" class="form-control" id="sodienthoai-dk" required>
                                            <small id="err-sodien" class="thongbao-loiform"></small>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Hủy bỏ"/>
                                        <button type="button" class="btn btn-success" id="btnThemKH" >Thêm</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>



                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <script src="../../public/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/event/dieuhuong.js" type="javascript"></script>



