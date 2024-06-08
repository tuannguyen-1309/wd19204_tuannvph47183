<div class="row mb">
            <div class="box-title">TÀI KHOẢN</div>
            <div class="box-content formTaiKhoan">
              <?php
                if(isset($_SESSION['user'])){
                  extract($_SESSION['user']);
              ?> 
                <div class="row mb10">
                  Xin chào<br>
                  <?= $user?>
                </div>
                <div class="row mb10">
                  
                <li><a href="index.php?act=quenmk">Quên mật khẩu </a></li>
                <li><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li>
                <?php if($role==1){?>
                <li><a href="admin/index.php">Đăng nhập admin</a></li>
                <?php }?>
                <li><a href="index.php?act=thoat">Thoat</a></li>
                </div>

              <?php   
                }else{
              ?>
              <form action="index.php?act=dangnhap" method="post">
                <div class="row mb10">
                  Tên đăng nhập
                  <input type="text" name="user" id="" />
                </div>
                <div class="row mb10">
                  Mật khẩu
                  <input type="password" name="pass" id="" />
                </div>
                <div class="row mb10">
                  <input type="checkbox" name="" id="" /><span
                    >Ghi nhớ tài khoản ?</span
                  >
                </div>
                <div class="row mb10">
                  <input type="submit" value="Đăng nhập" name="dangnhap">
                </div>
                <li><a href="index.php?act=quenmk">Quên mật khẩu </a></li>
                  <li><a href="index.php?act=dangky">Đăng ký thành viên</a></li>
                <?php }?>
              </form>
            </div>
          </div>
          <div class="row mb">
            <div class="box-title">DANH MỤC</div>
            <div class="box-content2 menu-doc">
              <ul>
                <?php
                  foreach ($dsdm as $dm) {
                    extract($dm);
                    $linkdm="index.php?act=sanpham&iddm=".$id;
                    echo '<li>
                            <a href="'.$linkdm.'">'.$name.'</a>
                          </li>';
                  }
                ?>
                <!-- <li><a href="#">Vợt cầu lông</a></li>
                <li><a href="#">Giày cầu lông</a></li>
                <li><a href="#">Balo cầu lông</a></li>
                <li><a href="#">Quần áo cầu lông</a></li>
                <li><a href="#">Bao vợt cầu lông</a></li>
                <li><a href="#">Phụ kiện cầu lông</a></li> -->
              </ul>
            </div>
            <div class="box-footer search-box">
              <form action="index.php?act=sanpham" method="post">
                <input
                  type="text"
                  name="kyw"
                  id=""
                  placeholder="Từ khóa tìm kiếm"
                />
                <input type="submit" name="timkiem" value="Tìm kiếm">
              </form>
            </div>
          </div>
          <div class="row">
            <div class="box-title">DANH MỤC YÊU THÍCH</div>
            <div class="box-content row">
              <?php
                foreach ($dstop10 as $sp) {
                  extract($sp);
                  $linksp="index.php?act=sanphamct&idsp=".$id;
                  $img=$img_path.$img;
                  echo '<div class="row mb10 top10">
                          <a href="'.$linksp.'"><img src="'.$img.'" alt="" /></a>
                          <a href="'.$linksp.'">'.$name.'</a>
                        </div>';
                }
              ?>
              <!-- <div class="row mb10 top10">
                <img src="view./images/bc1.jpg" alt="" /><a href="#"
                  >Vợt Victor Auraspeed 9000
                </a>
              </div>
              <div class="row mb10 top10">
                <img src="view./images/bc2.jpg" alt="" /><a href="#"
                  >Vợt Yonex Astrox 100ZZ 2021 Kurenai</a
                >
              </div>
              <div class="row mb10 top10">
                <img src="view./images/bc3.jpg" alt="" /><a href="#"
                  >Vợt Yonex Astrox 88D Play
                </a>
              </div>
              <div class="row mb10 top10">
                <img src="view./images/bc4.jpg" alt="" /><a href="#"
                  >Giày cầu lông Yonex Mach</a
                >
              </div>
              <div class="row mb10 top10">
                <img src="view./images/bc5.jpg" alt="" /><a href="#"
                  >Giày Yonex Dominant 2</a
                >
              </div>
              <div class="row mb10 top10">
                <img src="view./images/bc6.jpg" alt="" /><a href="#"
                  >Giày cầu lông Lefus F805
                </a>
              </div>
              <div class="row mb10 top10">
                <img src="view./images/bc7.jpg" alt="" /><a href="#"
                  >Balo Victor BR8010
                </a>
              </div>
              <div class="row mb10 top10">
                <img src="view./images/bc8.jpg" alt="" /><a href="#"
                  >Balo Victor BR6013 CD</a
                >
              </div>
              <div class="row mb10 top10">
                <img src="view./images/bc9.jpg" alt="" /><a href="#"
                  >Balo Victor BR6013
                </a>
              </div>
              <div class="row mb10 top10">
                <img src="view./images/bc10.jpg" alt="" /><a href="#"
                  >Quả cầu lông Vina Star tập luyện</a
                >
              </div> -->
            </div>
        </div>            
