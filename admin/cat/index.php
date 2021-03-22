<?php require_once($_SERVER['DOCUMENT_ROOT']).'/templates/admin/inc/header.php'; ?>
 <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Quản lý danh mục</h4>
                  
                  <a href="add.php" class="btn btn-success">Thêm</a>
                  
            </div>
                                 
        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Danh sách danh mục
                        </div>
                       
                        <div class="panel-body">
                            <div class="table-responsive">
								<?php 
									if(isset($_GET['msg'])){
										echo "<span style='color:red'>{$_GET['msg']}</span>";
									}
								?>
                                <table class="table table-striped table-bordered table-hover" >
                                    <thead>
                                        <tr>
                                            <th width="15%">ID danh mục</th>
                                            <th width="20%">Tên danh mục</th>                                     
                                            <th width="15%" >Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									 <?php 
										$sqlCat = "SELECT * FROM cat";
										$resultCat = $mysqli->query($sqlCat);
										while($arrCat = mysqli_fetch_assoc($resultCat)){
											$nameCat = $arrCat['name'];
											$id_cat = $arrCat['id'];
									?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $id_cat; ?></td>
                                             <td><?php echo $nameCat; ?></td>
                                            <td align="center">
                                                <a href="edit.php?id=<?php echo $id_cat; ?>" class="btn btn-primary">Sửa</a>
												<a href="del.php?id=<?php echo $id_cat; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" class="btn btn-danger">Xóa</a>
                                            </td>                                          
                                        </tr>
										<?php } ?>	
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