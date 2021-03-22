<?php require_once($_SERVER['DOCUMENT_ROOT']).'/templates/admin/inc/header.php'; ?>
<?php 
	$id_cat = $_GET['id'];
	$sqlCat = "SELECT name FROM cat WHERE id='{$id_cat}'";
	$resultCat = $mysqli->query($sqlCat);
	$arrCat = mysqli_fetch_assoc($resultCat);
	$nameCat = $arrCat['name'];
	if(isset($_POST['submit'])){
		$nameCat = $_POST['name'];
		$sqlEditCat = "UPDATE cat SET name = '{$nameCat}' WHERE id = '{$id_cat}'";
		$resultEditCat = $mysqli->query($sqlEditCat);
		if($resultEditCat){
			header('Location:/admin/cat?msg=SUCCESS');
		}	else {
				echo 'Co loi trong qua trinh sửa';
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
                        Sửa danh mục
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="post">
							<input type="hidden" name="_token" value="">
							<div class="form-group">
								<label>Tên danh mục</label>                                        
								<input class="form-control" type="text" name="name" value="<?php echo $nameCat; ?>" />
								<p class="help-block"><i style="color:red"></i>
							</div>
							<input type="submit" name="submit" value="Sửa" class="btn btn-info" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once($_SERVER['DOCUMENT_ROOT']).'/templates/admin/inc/footer.php'; ?>