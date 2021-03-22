<?php require_once($_SERVER['DOCUMENT_ROOT']).'/templates/admin/inc/header.php'; ?>	
<?php 
		$nameCatOld ='';
		if(isset($_POST['submit'])){
			$nameAddCat = $_POST['name'];
			$sqlAddCat = "INSERT INTO cat(name) VALUES('{$nameAddCat}')";
			$resultAddCat = $mysqli->query($sqlAddCat);
			if($resultAddCat){
				header('Location:/admin/cat?msg=SUCCESS');
			}else{
				echo 'Có lỗi trong quá trình thêm';
			}
		}

?>
<div class="content-wrapper">
    <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Quản lý danh mục</h4>
            </div>
        </div>
            <div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                          Thêm danh mục tin
                        </div>
                        <div class="panel-body">
                            <form role="form" action="" method="post">
                                <input type="hidden" name="_token" value="">
                                <div class="form-group">
									<label>Tên danh mục tin</label>
									<input class="form-control" type="text" name="name" value="<?php echo $nameCatOld; ?>" />
                                    <p class="help-block"><i style="color:red"></i></p>
                                </div>
                                <input type="submit" name="submit" value="Thêm" class="btn btn-info" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<?php require_once($_SERVER['DOCUMENT_ROOT']).'/templates/admin/inc/footer.php'; ?>	