<?php require_once($_SERVER['DOCUMENT_ROOT']).'/templates/admin/inc/header.php'; ?>
<?php 
	if(isset($_GET['id'])){
		$id_cat = $_GET['id'];
		$sqlDelCat = "DELETE FROM cat WHERE id = {$id_cat}";
		$resultDelCat = $mysqli->query($sqlDelCat);
		if($resultDelCat){
			header('Location:/admin/cat?msg=SUCCESS');
		}else{
			echo 'Co loi trong qua trinh xoa';
		}
	}else {
			header('Location:/aboutme');
	}

?>
<?php require_once($_SERVER['DOCUMENT_ROOT']).'/templates/admin/inc/footer.php'; ?>