<?php require_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/header.php'; ?>

<?php
	if(isset($_GET['id'])){
		//lấy id từ form
		$storyId = $_GET['id'];
		//delete file
		$sqlGetStory = "SELECT hinhanh FROM tintuc WHERE id_tintuc ={$storyId}";
		$resultGetStory = $mysqli -> query($sqlGetStory);
		$arStory = mysqli_fetch_assoc($resultGetStory);
		$oldPicture = $arStory['hinhanh'];
		if(!empty($oldPicture)){  //kiểm tra có tồn tại file ko
			$pathUpload = $_SERVER['DOCUMENT_ROOT'].'/'.DIR_UPLOAD.'/'.$oldPicture;
			unlink($pathUpload); // xóa file
		}
		//handle insert database
		$sqlDelStory = "DELETE FROM tintuc WHERE id_tintuc ={$storyId}";
		$resultDelStory = $mysqli -> query($sqlDelStory);
		if($resultDelStory){
			//echo "Thêm danh mục thành công";
			header('location: /admin/news?msg=success');
		}else{
			echo "Có lỗi trong quá trình xóa, vui lòng kiểm tra lại";
		}
	}else{
		header('location:/');
	}
?>

<?php require_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/footer.php'; ?>