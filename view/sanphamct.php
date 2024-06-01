<div class="row mb">
          <div class="box-left mr"> 
            <div class="row mb">
              <?php
                extract($onesp);
              ?>
              <div class="box-title"><?=$name?></div>
              <div class="box-content row "><?php
                  $img=$img_path.$img;
                  echo '<div class="row mb spct "><img src="'.$img.'"></div>';
                  echo '<p class="mota">'.$mota.'</p>'; 
                ?>
              </div>
            </div>
            <div class="row mb">
              <div class="box-title">BÌNH LUẬN</div>
              <div class="box-content row"></div>
            </div>
            <div class="row mb">
              <div class="box-title">SẢN PHẨM CÙNG LOẠI</div>
              <div class="box-content row">
                <?php
                  foreach ($sp_cung_loai as $sp_cung_loai) {
                    extract($sp_cung_loai);
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    echo '<li class="mb">
                            <a href="'.$linksp.'">'.$name.'</a>
                          </li>';                    
                  }
                ?>
              </div>
            </div>
          </div>
          <div class="box-right">
            <?php include "boxright.php"; ?>
          </div>
</div>
