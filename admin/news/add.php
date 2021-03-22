<?php require_once($_SERVER['DOCUMENT_ROOT']).'/templates/admin/inc/header.php'; ?>	 
 <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Quản lý tin tức</h4>
                  
                            </div>

        </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                          Thêm tin
                        </div>
                        <div class="panel-body">
						<?php
							$name="";
							if(isset($_POST['submit'])){
									
									$name = $_POST['name'];
									$preview_text = $_POST['preview_text'];
									$detail_text = $_POST['detail_text'];
									$danhmuc = $_POST['cat'];
									
									$arFile = $_FILES['picture'];
									$fileName = $arFile['name'];
										if($fileName != ''){
											// đổi lại file name của picture
											$fileName = renameFile($fileName);
											$tmpName = $arFile['tmp_name'];
											$pathUpload = $_SERVER['DOCUMENT_ROOT'].'/'.DIR_UPLOAD.'/'.$fileName;
											move_uploaded_file($tmpName,$pathUpload);
											
										}
										//insert into database
										$sqlAdd = "INSERT INTO tintuc(name, preview_text, detail_text, hinhanh, id_danhmuc)
										VALUES('{$name}','{$preview_text}','{$detail_text}','{$fileName}',{$danhmuc})";
										echo $sqlAdd;
										//echo $sqlAdd;
										$resultAdd = $mysqli->query($sqlAdd);
										if($resultAdd){
											header('location:/admin/news?msg=success');
										}else{
											echo "Có lỗi trong quá trình thêm, vui lòng thử lại. ";
										}
								}
						?>
                            <form role="form" action="add.php" enctype="multipart/form-data" method="post" class="frmAdd">
                                <input type="hidden" name="_token" value="Zyjm7QrxbspWpRj8k361XULgqFuptRCDAn7fX6y7">
                                        <div class="form-group">
                                            <label>Tên tin</label>
                                            <input class="form-control" type="text" name="name" value="" />
                                            <p class="help-block"><i style="color:red">

                                      
                                </i></p>
                                        </div>
                                         <div class="form-group">
                                            <label>Danh mục</label>
                                             <select class="form-control" name="cat">    
												<?php
													$sqlCat = "SELECT * FROM danhmuc";
													//echo $sqlCat;
													$resultCat = $mysqli->query($sqlCat);
													$selected = "";
													while($arCat = mysqli_fetch_assoc($resultCat)){
														$itemCatId = $arCat['id_danhmuc'];
														$nameCat = $arCat['danhmuc'];
													if($danhmuc == $itemCatId){
														$selected = "selected = 'selected'";
													}else{
														$selected = "";
													}
													
											?>
                                                <option <?php echo $selected;?> value="<?php echo $itemCatId;?>"><?php echo $nameCat;?></option>
												<?php }?>   
												
                                               
                                            </select>
                                            <p class="help-block"></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Hình ảnh</label>
                                            <input type="file"  name="picture" value="" />
                                            <p class="help-block"></p>
                                        </div>
                                          <div class="form-group">
                                            <label>Mô tả</label>
                                            <textarea class="form-control" rows="3" name="preview_text"></textarea>
                                            <i style="color:red">

                                      
                                </i>
                                        </div>
                                          <div class="form-group">
                                            <label>Chi tiết</label>
                                            <textarea class="form-control"  class="ckeditor" id="editor1" rows="3" name="detail_text"></textarea>
                                            <i style="color:red">
											<script type="text/javascript">

											  CKEDITOR.replace( 'editor1',

											  {

												filebrowserBrowseUrl: '/library/ckfinder/ckfinder.html',

												filebrowserImageBrowseUrl: '/library/ckfinder/ckfinder.html?type=Images',

												filebrowserUploadUrl: '/library/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

												filebrowserImageUploadUrl: '/library/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'

											  });

											</script>
                                      
                                </i>
                                        </div>
                                  
                                 
                                        <input type="submit" name="submit" value="Thêm" class="btn btn-info" />

                                    </form>
									<script>
									$(document).ready(function(){
										$('.frmAdd').validate({
											rules:{
												name:{
													required: true
												},
												cat:{
													required: true
												},
												preview_text:{
													required: true
												},
												detail_text:{
													required: true
												}
											},
											messages:{
												name:{
													required: "Vui lòng nhập tên tin tuc"
												},
												cat:{
													required: "Vui lòng chọn danh mục tin"
												},
												preview_text:{
													required: "Vui lòng nhập mô tả"
												},
												detail_text:{
													required: "Vui lòng nhập chi tiết"
												}
											}
										});
									});
								</script>
                            </div>
                        </div>
                            </div>
            </div>
                <!-- /. ROW  -->
           
    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
	  
  <?php require_once($_SERVER['DOCUMENT_ROOT']).'/templates/admin/inc/header.php'; ?>	  