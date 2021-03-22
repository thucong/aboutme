<?php require_once($_SERVER['DOCUMENT_ROOT']).'/utils/DBConnectionUtil.php'; ?>
<?php require_once($_SERVER['DOCUMENT_ROOT']).'/utils/CommonConstant.php'; ?>
<?php require_once($_SERVER['DOCUMENT_ROOT']).'/utils/fileutils.php'; ?>
<?php ob_start(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <LINK REL="SHORTCUT ICON"  HREF="/templates/admin/img/icon.png">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Aboutme-Trang chủ</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="/templates/admin/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="/templates/admin/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="/templates/admin/assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
 <link href="/templates/admin/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <script src="/library/jquery-3.4.1.min.js"></script>
     <script src="/library/ckeditor/ckeditor.js" type="text/javascript"/></script>
        <script src="/library/ckfinder/ckfinder.js" type="text/javascript"/></script>
        <style>
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}
.read-more-state {
  display: none;
}

.read-more-target {
  opacity: 0;
  max-height: 0;
  font-size: 0;
  transition: .25s ease;
}

.read-more-state:checked ~ .read-more-wrap .read-more-target {
  opacity: 1;
  font-size: inherit;
  max-height: 999em;
}

.read-more-state ~ .read-more-trigger:before {
  content: 'Xem thêm';
}

.read-more-state:checked ~ .read-more-trigger:before {
  content: 'Đóng';
}

.read-more-trigger {
  cursor: pointer;
  display: inline-block;
  padding: 0 .5em;
  color: #666;
  font-size: .9em;
  line-height: 2;
  border: 1px solid #ddd;
  border-radius: .25em;
}

</style>
</head>
<body>
    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/admincp">

                    <img src="/templates/admin/img/logo1.png" />
					
                </a>

            </div>

            <div class="right-div">
                                <span class="" style="margin-right:10px;text-transform:uppercase;font-weight: bold;padding-top:2%   ">Chào admindemo</span><a href="http://aboutme.vinaenter.edu.vn/logout" class="btn btn-danger pull-right">Đăng xuất</a>
                            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                         
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="/admin/index.php" class="menu-top-active">Trang chủ</a></li>
                              <li  class="dropdown"><a  href="/admin/news" class=" menu-top-">Quản lý bài viết &nbsp;<span  title="Có bài viết đang chờ kiểm duyệt"   class="badge ac123">4 </span></a>
                                <ul  class="dropdown-content aaa" style="list-style: none">
                                    <li  ><a href="/admin/cat" >danh mục</a></li>
                            <li ><a href="/admin/news" > tin  tức  &nbsp;<span  title="Có bài viết đang chờ kiểm duyệt"   class="badge ac123">4 </span></a></li>
                             <li ><a href="http://aboutme.vinaenter.edu.vn/admincp/comment" > Bình luận </a></li>
                                </ul>
                                 
                            </li> 
                         
                            
                              
                            <li><a href="/admin/user" class="menu-top-">Quản lý người dùng</a></li> 
                                                        <li><a href="/admin/contact" class="menu-top-">Quản lý liên hệ</a></li> 
                            <li class="dropdown"><a href="" class=" menu-top-">Quản lý thông tin</a>
                                <ul  class="dropdown-content aaa" style="list-style: none">
                                  <li  ><a href="http://aboutme.vinaenter.edu.vn/admincp/info">Thông tin</a></li> 
                                     <li  ><a href="http://aboutme.vinaenter.edu.vn/admincp/skill">Kỹ năng</a></li> 
                                      <li  ><a href="http://aboutme.vinaenter.edu.vn/admincp/project" >Dự án</a></li> 
                                      <li  ><a href="http://aboutme.vinaenter.edu.vn/admincp/aboutme">Chặng đường</a></li> 

                                </ul>
                                 
                            </li> 
                                       
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>