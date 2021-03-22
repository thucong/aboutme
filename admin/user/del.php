<?php require_once($_SERVER['DOCUMENT_ROOT']).'/templates/admin/inc/header.php'; ?>
<?php 
	if(isset($_GET['id'])){
		$id_user = $_GET['id'];
		$sqlDelUser = "DELETE FROM user WHERE id = {$id_user}";
		$resultDelUser = $mysqli->query($sqlDelUser);
		if($resultDelUser){
			header('Location:/admin/user?msg=SUCCESS');
		}else{
			echo 'Co loi trong qua trinh xoa';
		}
	}else {
			header('Location:/aboutme');
	}

?>
<?php require_once($_SERVER['DOCUMENT_ROOT']).'/templates/admin/inc/footer.php'; ?>