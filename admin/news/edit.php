<?php require_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/header.php'; ?>

<?php require_once $_SERVER['DOCUMENT_ROOT'].'/utils/fileutils.php'?>


<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Chỉnh sửa tin tức</h2>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-md-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
								<?php
									if(isset($_GET['id'])){
											$newsId = $_GET['id'];
									}
									$sqlNews = "SELECT * FROM tintuc WHERE id_tintuc = {$newsId}";
									$resultNews = $mysqli -> query($sqlNews);
									$arNews = mysqli_fetch_assoc($resultNews);
									$nameOld = $arNews['name'];
									$NewsIdOld = $arNews['id_danhmuc'];
									$previewOld = $arNews['preview_text'];
									$detailOld = $arNews['detail_text'];
									$pictureOld = $arNews['hinhanh'];
									if(isset($_POST['submit'])){
										$name = $_POST['name'];
										$news_id = $_POST['cat'];
										$preview_text = $_POST['preview_text'];
										$detail_text = $_POST['detail_text'];
										$arFile=$_FILES['picture'];
										$fileName=$arFile['name'];
										if($fileName!=''){
										//doi ten file anh
											$fileName=renameFile($fileName);
											$tmpName=$arFile['tmp_name'];
											$pathUpload= $_SERVER['DOCUMENT_ROOT'].'/'.DIR_UPLOAD.'/'.$fileName;
											move_uploaded_file($tmpName,$pathUpload);
											$sqlEditStory= "UPDATE tintuc SET name='{$name}',id_danhmuc='{$news_id}',preview_text='{$preview_text}',
											detail_text='{$detail_text}',hinhanh = '{$fileName}' WHERE id_tintuc='{$newsId}'";
											
										}else{
											if($pictureOld!=''){
												$sqlEditStory= "UPDATE tintuc SET name='{$name}',id_danhmuc='{$news_id}',preview_text='{$preview_text}',
												detail_text='{$detail_text}',hinhanh = '{$pictureOld}' WHERE id_tintuc='{$newsId}'";
											}else{
												$sqlEditStory= "UPDATE tintuc SET name='{$name}',id_danhmuc='{$news_id}',preview_text='{$preview_text}',
												detail_text='{$detail_text}' WHERE id_tintuc='{$newsId}'";
											}
											
										}
										
										$arEditStory = $mysqli->query($sqlEditStory);
										if($arEditStory){
											//echo $sqlEditStory;
											header('Location:/admin/news?msg=success');
											}
										else{
											$nameOld = $name;
											$previewOld=$preview_text;
											$detailOld=$detail_text;
											$NewsIdOld = $news_id;
										}
										//echo $NewsIdOld;
									
									}
								?>
                                 <form role="form" action="" enctype="multipart/form-data" method="post" class="frmEdit">
                                <input type="hidden" name="_token" value="Zyjm7QrxbspWpRj8k361XULgqFuptRCDAn7fX6y7">
                                        <div class="form-group">
                                            <label>Tên tin</label>
                                            <input class="form-control" type="text" name="name" value="<?php echo $nameOld;?>" />
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
													if($NewsIdOld == $itemCatId){
														$selected = "selected = 'selected'";
													}else{
														$selected = "";
													}
													
											?>
                                                <option <?php echo $selected;?> value="<?php echo $NewsIdOld;?>"><?php echo $nameCat;?></option>
												<?php }?>   
												
                                               
                                            </select>
                                            <p class="help-block"></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Hình ảnh</label>
                                            <input type="file"  name="picture" value="<?php echo $pictureOld;?>" />
											<img src="/files/<?php echo $pictureOld;?>" />
                                            <p class="help-block"></p>
                                        </div>
                                          <div class="form-group">
                                            <label>Mô tả</label>
                                            <textarea class="form-control" rows="3" name="preview_text" value="<?php echo $previewOld;?>"></textarea>
                                            <i style="color:red">

                                      
                                </i>
                                        </div>
                                          <div class="form-group">
                                            <label>Chi tiết</label>
                                            <textarea class="form-control"  class="ckeditor" id="editor1" rows="3" name="detail_text" value="<?php echo $detailOld;?>" ></textarea>
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
                                  
                                 
                                        <input type="submit" name="submit" value="Sửa" class="btn btn-info" />

                                    </form>
									<script>
									$(document).ready(function(){
										$('.frmEdit').validate({
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