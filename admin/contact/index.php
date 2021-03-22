<?php require_once($_SERVER['DOCUMENT_ROOT']).'/templates/admin/inc/header.php'; ?>	 
<div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Quản lý liên hệ</h4>
                  
                  
            </div>
                                 
        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Danh sách liên hệ
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" >
                                    <thead>
                                        <tr>
                                            <th width="10%">ID</th>
                                            <th width="10%">Name</th> 
                                            <th width="15%">Email</th> 
                                            <th width="15%">Địa chỉ</th>  
                                            <th width="10%">Số điện thoại</th>                                        
                                            <th width="20%">Nội dung</th>                                        
                                         <th width="15%" >Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <tr class="odd gradeX">
                                            <td>16</td>
                                            <td>
                                                tran van phuc
                                            </td>
                                             <td>phuctran13051996@gmail.com</td>
                                             <td>Đà Nẵng</td>
                                             <td>123456789</td>
                                             <td>
                                
                                                      text
                                        
 

                                               
                                             </td>
                                            <td align="center">
                                                 <a class="btn btn-success btn-md" type="a" class="btn btn-primary" data-toggle="modal" data-target="#add-16">Liên hệ</a>
                                                                                                      
                                                <a href="http://aboutme.vinaenter.edu.vn/admincp/contact/del/16" onclick="return confirm('Bạn có chắc chắn muốn xóa')" class="btn btn-danger">Xóa</a>
                                                                                                                                            </td>                                          
                                        </tr>
                                         <div class="modal fade" id="add-16" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <a type="a" class="close" data-dismiss="modal">&times;</a>
                            <h4 class="modal-title">Liên hệ</h4>
                          </div>
                          <div class="modal-body">
                            <div class="col-md-12">
                              <form action="http://aboutme.vinaenter.edu.vn/admincp/contact/sentmail"  method="post" enctype="multipart/form-data">
                               <input type="hidden" name="_token" value="5mAu0tsroyDijbW0whcCyKFsichJtetNNJX3obgc">
                               <div class="form-group">
                                <br> <label>Người nhận</label>
                                 <input readonly type="text" name="email" id="email" value="phuctran13051996@gmail.com" class="form-control" />
                                 <label>Tiêu đề</label>
                                 <input type="text" name="name" id="name" value="" class="form-control" />
                                 <label>Nội dung</label>
                                 <textarea name="noidung" rows="5" cols="72" id="noidung"></textarea>
                               </div>
                               <input type="submit" name="submit"  value="Gửi" class="btn btn-success btn-md"  />
                             </form>



                           </div>
                         </div>
                         <div class="modal-footer">
                          <a type="a" class="btn btn-default" data-dismiss="modal">Đóng</a>
                        </div>
                      </div>
                    </div>  
                  </div>
                                                                                <tr class="odd gradeX">
                                            <td>18</td>
                                            <td>
                                                ád
                                            </td>
                                             <td>hbl160303@gmail.com</td>
                                             <td>sđs</td>
                                             <td>dđ</td>
                                             <td>
                                
                                                      fsfff
                                        
 

                                               
                                             </td>
                                            <td align="center">
                                                 <a class="btn btn-success btn-md" type="a" class="btn btn-primary" data-toggle="modal" data-target="#add-18">Liên hệ</a>
                                                                                                      
                                                <a href="http://aboutme.vinaenter.edu.vn/admincp/contact/del/18" onclick="return confirm('Bạn có chắc chắn muốn xóa')" class="btn btn-danger">Xóa</a>
                                                                                                                                            </td>                                          
                                        </tr>
                                         <div class="modal fade" id="add-18" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <a type="a" class="close" data-dismiss="modal">&times;</a>
                            <h4 class="modal-title">Liên hệ</h4>
                          </div>
                          <div class="modal-body">
                            <div class="col-md-12">
                              <form action="http://aboutme.vinaenter.edu.vn/admincp/contact/sentmail"  method="post" enctype="multipart/form-data">
                               <input type="hidden" name="_token" value="5mAu0tsroyDijbW0whcCyKFsichJtetNNJX3obgc">
                               <div class="form-group">
                                <br> <label>Người nhận</label>
                                 <input readonly type="text" name="email" id="email" value="hbl160303@gmail.com" class="form-control" />
                                 <label>Tiêu đề</label>
                                 <input type="text" name="name" id="name" value="" class="form-control" />
                                 <label>Nội dung</label>
                                 <textarea name="noidung" rows="5" cols="72" id="noidung"></textarea>
                               </div>
                               <input type="submit" name="submit"  value="Gửi" class="btn btn-success btn-md"  />
                             </form>



                           </div>
                         </div>
                         <div class="modal-footer">
                          <a type="a" class="btn btn-default" data-dismiss="modal">Đóng</a>
                        </div>
                      </div>
                    </div>  
                  </div>
                                                                                <tr class="odd gradeX">
                                            <td>19</td>
                                            <td>
                                                ădsad
                                            </td>
                                             <td>d@gamiul.com</td>
                                             <td>ádsa</td>
                                             <td>đá</td>
                                             <td>
                                
                                                      ádd
                                        
 

                                               
                                             </td>
                                            <td align="center">
                                                 <a class="btn btn-success btn-md" type="a" class="btn btn-primary" data-toggle="modal" data-target="#add-19">Liên hệ</a>
                                                                                                      
                                                <a href="http://aboutme.vinaenter.edu.vn/admincp/contact/del/19" onclick="return confirm('Bạn có chắc chắn muốn xóa')" class="btn btn-danger">Xóa</a>
                                                                                                                                            </td>                                          
                                        </tr>
                                         <div class="modal fade" id="add-19" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <a type="a" class="close" data-dismiss="modal">&times;</a>
                            <h4 class="modal-title">Liên hệ</h4>
                          </div>
                          <div class="modal-body">
                            <div class="col-md-12">
                              <form action="http://aboutme.vinaenter.edu.vn/admincp/contact/sentmail"  method="post" enctype="multipart/form-data">
                               <input type="hidden" name="_token" value="5mAu0tsroyDijbW0whcCyKFsichJtetNNJX3obgc">
                               <div class="form-group">
                                <br> <label>Người nhận</label>
                                 <input readonly type="text" name="email" id="email" value="d@gamiul.com" class="form-control" />
                                 <label>Tiêu đề</label>
                                 <input type="text" name="name" id="name" value="" class="form-control" />
                                 <label>Nội dung</label>
                                 <textarea name="noidung" rows="5" cols="72" id="noidung"></textarea>
                               </div>
                               <input type="submit" name="submit"  value="Gửi" class="btn btn-success btn-md"  />
                             </form>



                           </div>
                         </div>
                         <div class="modal-footer">
                          <a type="a" class="btn btn-default" data-dismiss="modal">Đóng</a>
                        </div>
                      </div>
                    </div>  
                  </div>
                                                                                <tr class="odd gradeX">
                                            <td>20</td>
                                            <td>
                                                ădsad
                                            </td>
                                             <td>d@gamiul.com</td>
                                             <td>ádsa</td>
                                             <td>đá</td>
                                             <td>
                                
                                                      ádd
                                        
 

                                               
                                             </td>
                                            <td align="center">
                                                 <a class="btn btn-success btn-md" type="a" class="btn btn-primary" data-toggle="modal" data-target="#add-20">Liên hệ</a>
                                                                                                      
                                                <a href="http://aboutme.vinaenter.edu.vn/admincp/contact/del/20" onclick="return confirm('Bạn có chắc chắn muốn xóa')" class="btn btn-danger">Xóa</a>
                                                                                                                                            </td>                                          
                                        </tr>
                                         <div class="modal fade" id="add-20" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <a type="a" class="close" data-dismiss="modal">&times;</a>
                            <h4 class="modal-title">Liên hệ</h4>
                          </div>
                          <div class="modal-body">
                            <div class="col-md-12">
                              <form action="http://aboutme.vinaenter.edu.vn/admincp/contact/sentmail"  method="post" enctype="multipart/form-data">
                               <input type="hidden" name="_token" value="5mAu0tsroyDijbW0whcCyKFsichJtetNNJX3obgc">
                               <div class="form-group">
                                <br> <label>Người nhận</label>
                                 <input readonly type="text" name="email" id="email" value="d@gamiul.com" class="form-control" />
                                 <label>Tiêu đề</label>
                                 <input type="text" name="name" id="name" value="" class="form-control" />
                                 <label>Nội dung</label>
                                 <textarea name="noidung" rows="5" cols="72" id="noidung"></textarea>
                               </div>
                               <input type="submit" name="submit"  value="Gửi" class="btn btn-success btn-md"  />
                             </form>



                           </div>
                         </div>
                         <div class="modal-footer">
                          <a type="a" class="btn btn-default" data-dismiss="modal">Đóng</a>
                        </div>
                      </div>
                    </div>  
                  </div>
                                                                                <tr class="odd gradeX">
                                            <td>21</td>
                                            <td>
                                                ădsad
                                            </td>
                                             <td>d@gamiul.com</td>
                                             <td>ádsa</td>
                                             <td>đá</td>
                                             <td>
                                
                                                      ádd
                                        
 

                                               
                                             </td>
                                            <td align="center">
                                                 <a class="btn btn-success btn-md" type="a" class="btn btn-primary" data-toggle="modal" data-target="#add-21">Liên hệ</a>
                                                                                                      
                                                <a href="http://aboutme.vinaenter.edu.vn/admincp/contact/del/21" onclick="return confirm('Bạn có chắc chắn muốn xóa')" class="btn btn-danger">Xóa</a>
                                                                                                                                            </td>                                          
                                        </tr>
                                         <div class="modal fade" id="add-21" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <a type="a" class="close" data-dismiss="modal">&times;</a>
                            <h4 class="modal-title">Liên hệ</h4>
                          </div>
                          <div class="modal-body">
                            <div class="col-md-12">
                              <form action="http://aboutme.vinaenter.edu.vn/admincp/contact/sentmail"  method="post" enctype="multipart/form-data">
                               <input type="hidden" name="_token" value="5mAu0tsroyDijbW0whcCyKFsichJtetNNJX3obgc">
                               <div class="form-group">
                                <br> <label>Người nhận</label>
                                 <input readonly type="text" name="email" id="email" value="d@gamiul.com" class="form-control" />
                                 <label>Tiêu đề</label>
                                 <input type="text" name="name" id="name" value="" class="form-control" />
                                 <label>Nội dung</label>
                                 <textarea name="noidung" rows="5" cols="72" id="noidung"></textarea>
                               </div>
                               <input type="submit" name="submit"  value="Gửi" class="btn btn-success btn-md"  />
                             </form>



                           </div>
                         </div>
                         <div class="modal-footer">
                          <a type="a" class="btn btn-default" data-dismiss="modal">Đóng</a>
                        </div>
                      </div>
                    </div>  
                  </div>
                                                                                <tr class="odd gradeX">
                                            <td>22</td>
                                            <td>
                                                ădsad
                                            </td>
                                             <td>d@gamiul.com</td>
                                             <td>ádsa</td>
                                             <td>đá</td>
                                             <td>
                                
                                                      ádd
                                        
 

                                               
                                             </td>
                                            <td align="center">
                                                 <a class="btn btn-success btn-md" type="a" class="btn btn-primary" data-toggle="modal" data-target="#add-22">Liên hệ</a>
                                                                                                      
                                                <a href="http://aboutme.vinaenter.edu.vn/admincp/contact/del/22" onclick="return confirm('Bạn có chắc chắn muốn xóa')" class="btn btn-danger">Xóa</a>
                                                                                                                                            </td>                                          
                                        </tr>
                                         <div class="modal fade" id="add-22" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <a type="a" class="close" data-dismiss="modal">&times;</a>
                            <h4 class="modal-title">Liên hệ</h4>
                          </div>
                          <div class="modal-body">
                            <div class="col-md-12">
                              <form action="http://aboutme.vinaenter.edu.vn/admincp/contact/sentmail"  method="post" enctype="multipart/form-data">
                               <input type="hidden" name="_token" value="5mAu0tsroyDijbW0whcCyKFsichJtetNNJX3obgc">
                               <div class="form-group">
                                <br> <label>Người nhận</label>
                                 <input readonly type="text" name="email" id="email" value="d@gamiul.com" class="form-control" />
                                 <label>Tiêu đề</label>
                                 <input type="text" name="name" id="name" value="" class="form-control" />
                                 <label>Nội dung</label>
                                 <textarea name="noidung" rows="5" cols="72" id="noidung"></textarea>
                               </div>
                               <input type="submit" name="submit"  value="Gửi" class="btn btn-success btn-md"  />
                             </form>



                           </div>
                         </div>
                         <div class="modal-footer">
                          <a type="a" class="btn btn-default" data-dismiss="modal">Đóng</a>
                        </div>
                      </div>
                    </div>  
                  </div>
                                                                                <tr class="odd gradeX">
                                            <td>23</td>
                                            <td>
                                                JAVA 32
                                            </td>
                                             <td>anhptno@yahoo.com.vn</td>
                                             <td>ádddđ</td>
                                             <td>324234</td>
                                             <td>
                                
                                                      saaaaaaaaa
                                        
 

                                               
                                             </td>
                                            <td align="center">
                                                 <a class="btn btn-success btn-md" type="a" class="btn btn-primary" data-toggle="modal" data-target="#add-23">Liên hệ</a>
                                                                                                      
                                                <a href="http://aboutme.vinaenter.edu.vn/admincp/contact/del/23" onclick="return confirm('Bạn có chắc chắn muốn xóa')" class="btn btn-danger">Xóa</a>
                                                                                                                                            </td>                                          
                                        </tr>
                                         <div class="modal fade" id="add-23" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <a type="a" class="close" data-dismiss="modal">&times;</a>
                            <h4 class="modal-title">Liên hệ</h4>
                          </div>
                          <div class="modal-body">
                            <div class="col-md-12">
                              <form action="http://aboutme.vinaenter.edu.vn/admincp/contact/sentmail"  method="post" enctype="multipart/form-data">
                               <input type="hidden" name="_token" value="5mAu0tsroyDijbW0whcCyKFsichJtetNNJX3obgc">
                               <div class="form-group">
                                <br> <label>Người nhận</label>
                                 <input readonly type="text" name="email" id="email" value="anhptno@yahoo.com.vn" class="form-control" />
                                 <label>Tiêu đề</label>
                                 <input type="text" name="name" id="name" value="" class="form-control" />
                                 <label>Nội dung</label>
                                 <textarea name="noidung" rows="5" cols="72" id="noidung"></textarea>
                               </div>
                               <input type="submit" name="submit"  value="Gửi" class="btn btn-success btn-md"  />
                             </form>



                           </div>
                         </div>
                         <div class="modal-footer">
                          <a type="a" class="btn btn-default" data-dismiss="modal">Đóng</a>
                        </div>
                      </div>
                    </div>  
                  </div>
                                                                            </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
           
    </div>
    </div>
	<?php require_once($_SERVER['DOCUMENT_ROOT']).'/templates/admin/inc/footer.php'; ?>	 