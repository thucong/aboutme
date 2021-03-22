 <?php require_once($_SERVER['DOCUMENT_ROOT']).'/templates/admin/inc/header.php'; ?>
 
 <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Quản lý người dùng</h4>
                  
                            </div>

        </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                          Sửa người dùng
                        </div>
                        <div class="panel-body">
							<?php 
								
								$idUser = $_GET['id'];
								$sqlUser = "SELECT * FROM user INNER JOIN chucvu WHERE id = {$idUser} AND user.id_chucvu = chucvu.id_chucvu";
								
								$resultUser = $mysqli->query($sqlUser);
								$arUser = mysqli_fetch_assoc($resultUser);
								$idChucvuOld = $arUser['id_chucvu'];
								$user = $arUser['username'];
								$pass = $arUser['password'];
								$name = $arUser['fullname'];
								$chucvu = $arUser['chucvu'];
								
								if(isset($_POST['submit'])){
									$user1 = $_POST['username'];
									$pass1 = $_POST['password'];
									$name1 = $_POST['fullname'];
									$chucvu1 = $_POST['role'];
									if($pass1 == ''){
										$query = "UPDATE user SET fullname = '{$name1}',id_chucvu = '{$chucvu1}' WHERE id = {$idUser}";
										echo $query;
										$ketqua = $mysqli -> query($query);
										if($ketqua){
											
											header('location:index.php?msg=success');
											die();
										}else{
											echo "Có lỗi trong quá trình thêm người dùng, vui lòng kiểm tra lại";
											die();
										}
									}else{
										$pass1 = md5($pass1);
									$query3 = "UPDATE user SET fullname = '{$name1}', password = '{$pass1}',id_chucvu = '{$chucvu1}' WHERE id = {$idUser}";
										$ketqua3 = $mysqli -> query($query3);
										if($ketqua3){
											
											header('location:index.php?msg=Sửa thành công');
											die();
										}else{
											echo "Có lỗi trong quá trình sửa người dùng, vui lòng kiểm tra lại";
											die();
										}
									}
								}
								
								
							 ?>
                            <form role="form" action="" method="post">
                                <input type="hidden" name="_token" value="ooHONztreOEi5CJh2BqCGB5CpKMbuPg7l34Y1y3b">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input readonly class="form-control" type="text" name="username" value="<?php echo $user;?>" />
                                            <p class="help-block"></p>
                                        </div>
                                         <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" type="password" name="password" value="" />
                                            <p class="help-block"></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Họ và tên</label>
                                            <input class="form-control" type="text" name="fullname" value="<?php echo $name;?>" />
                                            <p class="help-block"><i style="color:red">

                                      
                                </i></p>
                                        </div>
                                                                                <div class="form-group">
                                            <label>Chức vụ</label>
                                            <select class="form-control" name="role">
												 
											<?php
												$sql = "SELECT * FROM user INNER JOIN chucvu WHERE user.id_chucvu = chucvu.id_chucvu  ";
												$result = $mysqli -> query($sql);
												$selected = "";
												while($ar = mysqli_fetch_assoc($result)){
													$idChucvu = $ar['id_chucvu'];
													$chucvu = $ar['chucvu'];
													if($idChucvuOld == $idChucvu){
														$selected = "selected = 'selected'";
													}else{
														$selected = "";
													}
												
											?>
												
                                                <option <?php echo $selected;?> value='<?php echo $idChucvuOld;?>'><?php echo $chucvu;?></option>
                                                <?php }?>
                                            </select>
                                       
                                        </div>
                                            <input type="submit" name="submit" value="Sửa" class="btn btn-info" />

                                    </form>
                            </div>
                        </div>
                            </div>
            </div>
                <!-- /. ROW  -->
           
    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
	 <?php require_once($_SERVER['DOCUMENT_ROOT']).'/templates/admin/inc/footer.php'; ?>