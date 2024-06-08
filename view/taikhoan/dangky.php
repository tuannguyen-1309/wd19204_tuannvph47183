<div class="row mb">
  <div class="box-left mr"> 
    <div class="row mb">
      <div class="box-title">ĐĂNG KÝ THÀNH VIÊN</div>
      <div class="box-content row formTaiKhoan ">
        <form action="index.php?act=dangky" method="post">
          <div class="row mb10">
            Email
            <input type="email" name="email" id="">
          </div>
          <div class="row mb10">
            User
            <input type="text" name="user" id="">
          </div>  
          <div class="row mb10">
            Password
            <input type="password" name="pass" id="">
          </div>  
          <div class="row mb10">
            <input type="submit" value="Đăng ký" name="dangky">
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
