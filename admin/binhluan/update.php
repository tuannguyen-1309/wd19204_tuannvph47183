<?php
  if(is_array($binhluan)){
    extract($binhluan);
  }
?>
<div class="row">
        <div class="row form-title"><h1>CẬP NHẬT BÌNH LUẬN</h1></div>
        <div class="row form-content">
        <form action="index.php?act=updatebl" method="post" enctype="multipart/form-data">
            <div class="row mb10">
              Nội dung <br />
              <input type="text" name="noidung" id="" value="<?=$noidung?>" />
            </div>
            <div class="row mb10">
              Id User<br />
              <input type="text" name="iduser" id="" value="<?=$iduser?>" />
            </div>
            <div class="row mb10">
              Id Pro<br />
              <input type="text" name="idpro" id="" value="<?=$idpro?>" />
            </div>
            <div class="row mb10">
              Ngày bình luận<br />
              <input type="date" name="ngaybinhluan" id="" value="<?=$ngaybinhluan?>" />
            </div>
            <div class="row mb10">
              <input type="hidden" name="id" value="<?=$id?>">
              <input type="submit" name="capnhat" value="Cập nhật" />
              <input type="reset" name="nhaplai" value="Nhập lại" />
              <a href="index.php?act=dsbl"
                ><input type="button" name="btn_list" value="Danh sách"
              /></a>
            </div>
            <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
          </form>
        </div>
      </div>
    </div>