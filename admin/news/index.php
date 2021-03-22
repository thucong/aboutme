 <?php require_once($_SERVER['DOCUMENT_ROOT']).'/templates/admin/inc/header.php'; ?>
 <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Quản lý tin</h4>
                  
                  <a href="add.php" class="btn btn-success">Thêm</a>
                            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Danh sách tin
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" >
                                    <thead>
                                        <tr>
                                            <th width="10%">ID Tin</th>
                                            <th width="30%">Tên Tin</th>
                                            <th width="15%">Danh mục</th>
                                            <th width="15%" >Hình ảnh</th> 
                                            
                                            <th width="15%">Trạng thái</th>                                         
                                            <th width="15%" >Chức năng</th>
                                                                                   </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
											$sql = "SELECT * FROM tintuc INNER JOIN danhmuc WHERE tintuc.id_danhmuc = danhmuc.id_danhmuc";
											$result = $mysqli->query($sql);
											while($arr = mysqli_fetch_assoc($result)){
												$id_tintuc = $arr['id_tintuc'];
												$name = $arr['name'];
												$preview_text = $arr['preview_text'];
												$detail_text = $arr['detail_text'];
												$danhmuc = $arr['danhmuc'];
												$picture = $arr['hinhanh'];
												$trangthai = $arr['trangthai'];
										
										?>                                                                         
										<tr class="odd gradeX">
                                            <td><?php echo $id_tintuc;?></td>
                                            <td>
                                               <?php echo $name;?>                    
                                            </td>
                                             <td>
                                               <?php echo $danhmuc;?>                     
                                            </td>
                                            <td>
												
												<?php if($picture != ''){?>
													<img src="/files/<?php echo $picture;?>" width="120px" alt="" />   
												<?php }else{?>
												<strong>không có hình</strong>
												<?php }?>
                                            </td>
                                            
                                                  
                                            <td class="center">
                                                
                                                <span id="actice-53">
													<a href="javascript:void(0)"  onclick="active(53,1);">
                                                        <img src="/templates/admin/img/<?php echo $trangthai;?>" alt="" />
                                                    </a>
												</span> 
                                            </td>
                                                           
                                            
                                            <td align="center">
                                                <a href="edit.php?id=<?php echo $id_tintuc;?>" class="btn btn-primary">Sửa</a>
                                                <a href="del.php?id=<?php echo $id_tintuc;?>" onclick="return confirm('Bạn có chắc chắn muốn xóa')" class="btn btn-danger">Xóa</a>
                                            </td>  
                                                                                       
                                        </tr>
											<?php }?>
                                                                            </tbody>
                                </table>
                                <div align="center"><ul class="pagination">
        
                    <li class="disabled"><span>&laquo;</span></li>
        
        
                    
            
            
                                                                        <li class="active"><span>1</span></li>
                                                                                <li><a href="https://aboutme.vinaenter.edu.vn/admincp/news?page=2">2</a></li>
                                                        
        
                    <li><a href="https://aboutme.vinaenter.edu.vn/admincp/news?page=2" rel="next">&raquo;</a></li>
            </ul>
</div>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
           
    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
      <script type="text/javascript">

                    function active(nid,active)
                    {
                      var url='/admincp/news/active/'+nid+'/'+active;
                      var tmp="#actice-"+nid;
        
                  $.ajax({
                    url:url,
                    dataType: "html",
                    data: {
                               
                    },
                  success: function(data) {
                      tmp="#actice-"+nid;
                      if(active ==1){
                        var ac = "<a href='javascript:void(0)' onclick='active("+nid+" ,0);'><img src='/templates/admin/img/de.png'/></a>";
                       $(tmp).html(ac);
                      }else{
                          var de = "<a href='javascript:void(0)' onclick='active("+nid+" ,1);'><img src='/templates/admin/img/ac.png'/></a>";
                       $(tmp).html(de);
                     }
                     $('.ac123').html(data);
                    },
                  });
                 }


   </script>
   <?php require_once($_SERVER['DOCUMENT_ROOT']).'/templates/admin/inc/footer.php'; ?>