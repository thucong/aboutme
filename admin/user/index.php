<?php require_once($_SERVER['DOCUMENT_ROOT']).'/templates/admin/inc/header.php'; ?>
 <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Quản lý người dùng</h4>
                  
                  <a href="add.php" class="btn btn-success">Thêm</a>
                  
            </div>
                                 
        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Danh sách người dùng
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" >
                                    <thead>
                                        <tr>
                                            <th width="15%">ID người dùng</th>
                                            <th width="20%">Username</th> 
                                            <th width="30%">Fullname</th>  
                                            <th width="20%">Chức vụ</th>                                        
                                            <th width="15%" >Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php 
											$sqlUser = "SELECT * FROM user INNER JOIN chucvu WHERE user.id_chucvu = chucvu.id_chucvu";
											$resultUser = $mysqli->query($sqlUser);
											while($arUser = mysqli_fetch_assoc($resultUser)){
												$id = $arUser['id'];
												$user = $arUser['username'];
												$full = $arUser['fullname'];
												$chucvu = $arUser['chucvu'];
										?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $id;?></td>
                                            <td>
                                                <?php echo $user;?>
                                            </td>
                                             <td><?php echo $full?></td>
                                             <td><?php echo $chucvu;?></td>
                                            <td align="center">
                                                <a href="edit.php?id=<?php echo $id;?>" class="btn btn-primary">Sửa</a>
												<a href="del.php?id=<?php echo $id;?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" class="btn btn-danger">Xóa</a>
                                            </td>                                          
                                        </tr>
											<?php }?>
                                       
                                                                            </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
           
    </div>
    </div>
<?php require_once($_SERVER['DOCUMENT_ROOT']).'/templates/admin/inc/footer.php'; ?>