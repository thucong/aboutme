<?php require_once($_SERVER['DOCUMENT_ROOT']).'/templates/admin/inc/header.php'; ?>	
<div class="content-wrapper">
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
                          Thêm người dùng
                        </div>
                        <div class="panel-body">
							<?php 
								if(isset($_POST['submit'])){
									
									$user = $_POST['username'];
									$pass = md5($_POST['password']);
									$name = $_POST['fullname'];
									$chucvu = $_POST['role'];
									$sqlAdd = "INSERT INTO user(id,username,password,fullname,chucvu) VALUES('{$id}','{$user}','{$pass}','{$name}','{$chucvu}')";
									$resultAdd = $mysqli->query($sqlAdd);
									if($resultAdd){
											header('location:/admin/user?msg=success');
										}else{
											echo "Có lỗi trong quá trình thêm, vui lòng thử lại!";
										}
									
								}
							
							?>
                            <form role="form" action="" method="post">
                                <input type="hidden" name="_token" value="4ozPPF7MfGDevY123iD36GwmJ2KOmatLozeX7Wdm">
								
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" type="text" name="username" value="" />
                                            <p class="help-block"> <i style="color:red">

                                      
                                </i></p>
                                        </div>
                                         <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" type="password" name="password" value="" />
                                            <p class="help-block"> <i style="color:red">

                                      
                                </i></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Họ và tên</label>
                                            <input class="form-control" type="text" name="fullname" value="" />
                                            <p class="help-block"> <i style="color:red">

                                      
                                </i></p>
                                        </div>
                                         <div class="form-group">
                                            <label>Chức vụ</label>
                                            <select class="form-control" name="role">	
												<?php 
													$sql = "SELECT * FROM chucvu ";
													$result = $mysqli->query($sql);
													$selected = "";
													while($ar = mysqli_fetch_assoc($result)){
														$item = $ar['id_chucvu'];
														$name = $ar['chucvu'];
													if($chucvu == $item){
														$selected = "selected = 'selected'";
													}else{
														$selected = "";
													}
													
												?>
                                                <option <?php echo $selected;?> value='<?php echo $item;?>'><?php echo $name;?></option>
                                                <?php }?>
                                            </select>
                                           
                                        </div>
                                        <input type="submit" name="submit" value="Thêm" class="btn btn-info" />

                                    </form>
                            </div>
                        </div>
                            </div>
            </div>
                <!-- /. ROW  -->
           
    </div>
    </div>
<?php require_once($_SERVER['DOCUMENT_ROOT']).'/templates/admin/inc/footer.php'; ?>	