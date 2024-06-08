<?php

  include "../model/danhmuc.php";
  include "../model/sanpham.php";
  include "../model/taikhoan.php";
  include "../model/binhluan.php";
  include "../model/thongke.php";
  include '../model/pdo.php';
  include 'header.php';
  //controller
  if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act) {
      
      case 'adddm':
        //Kiểm tra người dùng có click vào nút Add hay không
        if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
          $tenloai=$_POST['tenloai'];
          insert_danhmuc($tenloai);
          $thongbao="Thêm thành công";
        }
        include './danhmuc/add.php';
        break;
      case 'listdm':
        $listdanhmuc=loadAll_danhmuc();
        include './danhmuc/list.php';
        break;
      case 'xoadm':
        if(isset($_GET['id'])&&($_GET['id']>0)){
          delete_danhmuc($_GET['id']);
        }
        $listdanhmuc=loadAll_danhmuc();
        include './danhmuc/list.php';
        break;
      case 'suadm':
        if(isset($_GET['id'])&&($_GET['id']>0)){
          $dm= loadOne_danhmuc($_GET['id']);
        }
        include "./danhmuc/update.php";
        break;
      case 'updatedm':
        if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
          $tenloai=$_POST['tenloai'];
          $id=$_POST['id'];
          update_danhmuc($id,$tenloai);
          $thongbao="Cập nhật thành công";
        }
        $listdanhmuc=loadAll_danhmuc();
        include './danhmuc/list.php';
        break;
        // SẢN PHẨM
      case 'addsp':
        //Kiểm tra người dùng có click vào nút Add hay không
        if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
          $iddm=$_POST['iddm'];
          $tensp=$_POST['tensp'];
          $giasp=$_POST['giasp'];
          $mota=$_POST['mota'];
          $target_dir = "../upload/";
          $hinh=$_FILES['hinh']['name'];
          $target_file = $target_dir . basename($_FILES['hinh']['name']);
          if(move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)){
            // echo 'The file'. htmlspecialchars( basename( $_FILES['hinh']['name'])). 'has been uploaded.';
          }else{
            // echo 'Sorry, there was an error uploading your file.';
          }
          insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
          $thongbao="Thêm thành công";
        }
        $listdanhmuc=loadAll_danhmuc();
        include './sanpham/add.php';
        break;
      case 'listsp':
        if(isset($_POST['listOK'])&&($_POST['listOK'])){
          $kyw=$_POST['kyw'];
          $iddm=$_POST['iddm'];
        }else{
          $kyw='';
          $iddm=0;
        }
        $listdanhmuc=loadAll_danhmuc();
        $listsanpham=loadAll_sanpham($kyw,$iddm);
        include './sanpham/list.php';
        break;
      case 'xoasp':
        if(isset($_GET['id'])&&($_GET['id']>0)){
          delete_sanpham($_GET['id']);
        }
        $listsanpham=loadAll_sanpham("",0);
        include './sanpham/list.php';
        break;
      case 'suasp':
        if(isset($_GET['id'])&&($_GET['id']>0)){
          $sanpham= loadOne_sanpham($_GET['id']);
        }
        $listdanhmuc=loadAll_danhmuc();
        include "./sanpham/update.php";
        break;
      case 'updatesp':
        if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
          $id=$_POST['id'];
          $iddm=$_POST['iddm'];
          $tensp=$_POST['tensp'];
          $giasp=$_POST['giasp'];
          $mota=$_POST['mota'];
          $hinh=$_FILES['hinh']['name'];
          $target_dir = "../upload/";
          $target_file = $target_dir . basename($_FILES['hinh']['name']);
          if(move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)){
            // echo 'The file'. htmlspecialchars( basename( $_FILES['hinh']['name'])). 'has been uploaded.';
          }else{
            // echo 'Sorry, there was an error uploading your file.';
          }
          update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);
        }
        $listdanhmuc=loadAll_danhmuc();
        $listsanpham=loadAll_sanpham("",0);
        include './sanpham/list.php';
        break;
        case 'dskh':
          $listtaikhoan=loadAll_taikhoan();
          include "./taikhoan/list.php";
          break;
          case 'xoatk':
            if(isset($_GET['id'])&&($_GET['id']>0)){
              delete_taikhoan($_GET['id']);
            }
            $listtaikhoan=loadAll_taikhoan();
            include './taikhoan/list.php';
            break;
          case 'suatk':
            if(isset($_GET['id'])&&($_GET['id']>0)){
              $taikhoan= loadOne_taikhoan($_GET['id']);
            }
            $listtaikhoan=loadAll_taikhoan();
            include "./taikhoan/update.php";
            break;
          case 'updatetk':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
              $id=$_POST['id'];
              $user=$_POST['user'];
              $pass=$_POST['pass'];
              $email=$_POST['email'];
              $address=$_POST['address'];
              $tel=$_POST['tel'];
              update_taikhoan($id,$user,$pass,$email,$address,$tel);
            }
            $listtaikhoan=loadAll_taikhoan();
            include './taikhoan/list.php';
            break;
        case 'dsbl':
          $listbinhluan=loadAll_binhluan(0);
          include "./binhluan/list.php";
          break;
        case 'xoabl':
            if(isset($_GET['id'])&&($_GET['id']>0)){
              delete_binhluan($_GET['id']);
            }
            $listbinhluan=loadAll_binhluan(0);
            include './binhluan/list.php';
            break;
          case 'suabl':
            if(isset($_GET['id'])&&($_GET['id']>0)){
              $binhluan= loadOne_binhluan($_GET['id']);
            }
            $listbinhluan=loadAll_binhluan(0);
            include "./binhluan/update.php";
            break;
          case 'updatebl':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
              $id=$_POST['id'];
              $noidung=$_POST['noidung'];
              $iduser=$_POST['iduser'];
              $idpro=$_POST['idpro'];
              $ngaybinhluan=$_POST['ngaybinhluan'];
              update_binhluan($id,$noidung,$iduser,$idpro,$ngaybinhluan);
            }
            $listbinhluan=loadAll_binhluan(0);
            include './binhluan/list.php';
            break;
            case 'thongke':
              $listthongke=loadall_thongke();
              include 'thongke/list.php';
              break;
            case 'bieudo':
              $listthongke=loadall_thongke();
              include 'thongke/bieudo.php';
              break;
      default:
        include 'home.php';
        break;
    }
  }else{
    include 'home.php';
  }


  include 'footer.php';
?>