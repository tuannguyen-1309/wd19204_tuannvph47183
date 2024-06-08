<div class="row">
        <div class="row form-title"><h1>DANH SÁCH TÀI KHOẢN</h1></div>
        <div class="row form-content">
          <form action="" method="post">
            <div class="row mb10 form-dsLoai">
              <table>
                <tr>
                  <th></th>
                  <th>MÃ TÀI KHOẢN</th>
                  <th>TÊN ĐĂNG NHẬP</th>
                  <th>MẬT KHẨU</th>
                  <th>EMAIL</th>
                  <th>ĐỊA CHỈ</th>
                  <th>ĐIỆN THOẠI</th>
                  <th>VAI TRÒ</th>
                  <th></th>
                </tr>
                <?php
                  foreach($listtaikhoan as $taikhoan){
                    extract($taikhoan);
                    $suatk="index.php?act=suatk&id=".$id;
                    $xoatk="index.php?act=xoatk&id=".$id;
                    echo ' <tr>
                            <td><input type="checkbox" name="" id="" /></td>
                            <td>'.$id.'</td>
                            <td>'.$user.'</td>
                            <td>'.$pass.'</td>
                            <td>'.$email.'</td>
                            <td>'.$address.'</td>
                            <td>'.$tel.'</td>
                            <td>'.$role.'</td>
                            <td>
                              <a href="'.$suatk.'"><input type="button" value="Sửa" /></a>
                              <a onclick="return confirm(\'Bạn có chắc muốn xóa?\')" href="'.$xoatk.'"><input type="button" value="Xóa" /></a>
                            </td>
                                              
                          </tr>';
                  }
                ?>
                
              </table>
              
            </div>
            <div class="row mb10">
              <input type="button" name="btn_all" value="Chọn tất cả" />
              <input type="button" name="btn_remove_all" value="Bỏ chọn tất cả" />
              <input type="button" name="btn_delete_all" value="Xóa các mục đã chọn" />
            </div>
          </form> 
        </div>
      </div>