<?php
  function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm){
    $sql = "INSERT INTO sanpham (name,price,img,mota,iddm) VALUES ('$tensp','$giasp','$hinh','$mota','$iddm')";
    pdo_execute($sql);
  }
  function delete_sanpham($id){
    $sql="delete from sanpham where id =".$id;
    pdo_execute($sql);
  }
  function loadAll_sanpham($kyw,$iddm){
    $sql = "SELECT * FROM sanpham where 1"; 
    if($kyw!=""){
      $sql.=" and name like '%".$kyw."%'";
    }
    if($iddm>0){
      $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" ORDER BY id DESC";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
  }
  function loadOne_sanpham($id){
    $sql="select * from sanpham where id =".$id;
    $dm=pdo_query_one($sql);
    return $dm;
  }
  function update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh)
  {
    if($hinh!=""){
      $sql = "UPDATE sanpham SET iddm='".$iddm."', name='".$tensp."',price='".$giasp."',mota='".$mota."',img='".$hinh."' WHERE id=".$id;
    }
    else {
      $sql = "UPDATE sanpham SET iddm='".$iddm."', name='".$tensp."',price='".$giasp."',mota='".$mota."' WHERE id=".$id;
    } 
    pdo_execute($sql);
  }
?>