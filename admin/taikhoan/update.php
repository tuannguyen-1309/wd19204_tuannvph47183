<?php
  if(is_array($taikhoan)){
    extract($taikhoan);
  }
?>
<div class="row">
        <div class="row form-title"><h1>CẬP NHẬT TÀI KHOẢN</h1></div>
        <div class="row form-content">
        <form action="index.php?act=updatetk" method="post" enctype="multipart/form-data">
            <div class="row mb10">
              Tên người dùng <br />
              <input type="text" name="user" id="" value="<?=$user?>" />
            </div>
            <div class="row mb10">
              Mật khẩu<br />
              <input type="text" name="pass" id="" value="<?=$pass?>" />
            </div>
            <div class="row mb10">
              Email<br />
              <input type="text" name="email" id="" value="<?=$email?>" />
            </div>
            <div class="row mb10">
              Address<br />
              <input type="text" name="address" id="" value="<?=$address?>" />
            </div>
            <div class="row mb10">
              Telephone<br />
              <input type="text" name="tel" id="" value="<?=$tel?>" />
            </div>
            <div class="row mb10">
              <input type="hidden" name="id" value="<?=$id?>">
              <input type="submit" name="capnhat" value="Cập nhật" />
              <input type="reset" name="nhaplai" value="Nhập lại" />
            </div>
            <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
          </form>
        </div>
      </div>
    </div>