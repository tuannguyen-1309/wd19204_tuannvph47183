<div class="row mb">
        <div class="box-left mr">
          <div class="row">
            <div class="slideshow-container">

              <!-- Full-width images with number and caption text -->
              <div class="mySlides fade">
                <img src="view./images/banner.webp" style="width:100%">
              </div>
              <div class="mySlides fade">
                <img src="view./images/banner2.webp" style="width:100%">
              </div>

              <div class="mySlides fade">
                <img src="view./images/banner3.webp" style="width:100%">
              </div>

              <!-- Next and previous buttons -->
              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1)">&#10095;</a>
              </div>
              <br>

              <!-- The dots/circles -->
              <div style="text-align:center">
              <span class="dot" onclick="currentSlide(1)"></span>
              <span class="dot" onclick="currentSlide(2)"></span>
              <span class="dot" onclick="currentSlide(3)"></span>
              </div>
            
          </div>
          <div class="row mt">
            <?php
            $i=0;
              foreach ($spnew as $sp) {
                extract($sp);
                $linksp="index.php?act=sanphamct&idsp=".$id;
                $formatted_price = number_format($price, 0, ',', '.');
                // $img lấy tên từ cột database
                $hinh = $img_path.$img;
                if(($i==2)||($i==5 )||($i==8)){
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
            <!-- <div class="box-sp mr">
              <div class="img row"><img src="view./images/sp1.webp" alt="" /></div>
              <p>$30</p>
              <a href="#">Vợt Cầu Lông Felet TJ Power | Bộ 3 siêu phẩm </a>
            </div>
            <div class="box-sp mr">
              <div class="img row"><img src="view./images/sp1.webp" alt="" /></div>
              <p>$30</p>
              <a href="#">Vợt Cầu Lông Felet TJ Power | Bộ 3 siêu phẩm </a>
            </div>
            <div class="box-sp ">
              <div class="img row"><img src="view./images/sp1.webp" alt="" /></div>
              <p>$30</p>
              <a href="#">Vợt Cầu Lông Felet TJ Power | Bộ 3 siêu phẩm </a>
            </div>
            <div class="box-sp mr">
              <div class="img row"><img src="view./images/sp1.webp" alt="" /></div>
              <p>$30</p>
              <a href="#">Vợt Cầu Lông Felet TJ Power | Bộ 3 siêu phẩm </a>
            </div>
            <div class="box-sp mr">
              <div class="img row"><img src="view./images/sp1.webp" alt="" /></div>
              <p>$30</p>
              <a href="#">Vợt Cầu Lông Felet TJ Power | Bộ 3 siêu phẩm </a>
            </div>
            <div class="box-sp ">
              <div class="img row"><img src="view./images/sp1.webp" alt="" /></div>
              <p>$30</p>
              <a href="#">Vợt Cầu Lông Felet TJ Power | Bộ 3 siêu phẩm </a>
            </div>
            <div class="box-sp mr">
              <div class="img row"><img src="view./images/sp1.webp" alt="" /></div>
              <p>$30</p>
              <a href="#">Vợt Cầu Lông Felet TJ Power | Bộ 3 siêu phẩm </a>
            </div>
            <div class="box-sp mr">
              <div class="img row"><img src="view./images/sp1.webp" alt="" /></div>
              <p>$30</p>
              <a href="#">Vợt Cầu Lông Felet TJ Power | Bộ 3 siêu phẩm </a>
            </div>
            <div class="box-sp ">
              <div class="img row"><img src="view./images/sp1.webp" alt="" /></div>
              <p>$30</p>
              <a href="#">Vợt Cầu Lông Felet TJ Power | Bộ 3 siêu phẩm </a>
            </div> -->
          </div>
        </div>
        <div class="box-right">
          <?php include "boxright.php"; ?>
        </div>
</div>