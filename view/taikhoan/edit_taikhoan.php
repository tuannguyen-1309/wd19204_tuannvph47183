<div class="row mb">
  <div class="box-left mr"> 
    <div class="row mb">
      <div class="box-title">CẬP NHẬT TÀI KHOẢN</div>
      <div class="box-content row formTaiKhoan ">
        <?php
          if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
            extract($_SESSION['user']);

          }
        ?>
        <form action="index.php?act=edit_taikhoan" method="post">
          <div class="row mb10">
            Email
            <input type="email" name="email" value="<?=$email?>" id="">
          </div>
          <div class="row mb10">
            User
            <input type="text" name="user" value="<?=$user?>" id="">
          </div>  
          <div class="row mb10">
            Password
            <input type="password" name="pass" value="<?=$pass?>" id="">
          </div>  
          <div class="row mb10">
            Address
            <input type="text" name="address" value="<?=$address?>" id="">
          </div>  
          <div class="row mb10">
            Phone Number
            <input type="text" name="tel" value="<?=$tel?>" id="">
          </div>  
          <div class="row mb10">
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="submit" value="Cập nhật" name="capnhat">
            <input type="reset" value="Nhập lại">
          </div>  
        </form>
        <h2 class="thongbao">
        <?php
          if(isset($thongbao)&&($thongbao!="")){
            echo $thongbao;
          } 
        ?>
        </h2>
      </div>
    </div>

  </div>
  <div class="box-right">
    <?php include "view/boxright.php"; ?>
  </div>
</div>
