<div class="row mb">
          <div class="box-left mr"> 
            <div class="row mb">
             
              <div class="box-title">SẢN PHẨM \ <span style="text-transform:uppercase; font-weight:700" ><?=$tendm?></span></div>
              <div class="box-content row ">
                <?php
                  $i=0;
                  foreach ($dssp as $sp) {
                    extract($sp);
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    $formatted_price = number_format($price, 0, ',', '.');
                    // $img lấy tên từ cột database
                    $hinh = $img_path.$img;
                    if(($i==2)||($i==5 )||($i==8)||($i==11)){
                      $mr="";
                    }else{
                      $mr="mr";
                    }
                    echo '<div class="box-sp '.$mr.'">
                            <div class="img row"><a href="'.$linksp.'"><img src="'.$hinh.'" alt="" /></a></div>
                            <p>'.$formatted_price.'VND</p>
                            <a href="'.$linksp.'">'.$name.' </a>
                          </div>';
                        $i+=1;
                  }
                ?>
              </div>
            </div>
            </div>
          <div class="box-right">
            <?php include "boxright.php"; ?>
          </div>
