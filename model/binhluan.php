<?php
  function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
    $sql = "INSERT INTO binhluan (noidung,iduser,idpro,ngaybinhluan) VALUES ('$noidung','$iduser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
  }
  function loadAll_binhluan($idpro){
    $sql = "SELECT * FROM binhluan where 1";
    if($idpro>0) $sql.=" AND idpro='".$idpro."'"; 
    $sql.=" order by id desc"; 
    $listbl = pdo_query($sql);
    return $listbl;
  }
  function loadOne_binhluan($id){
    $sql="select * from binhluan where id =".$id;
    $bl=pdo_query_one($sql);
    return $bl;
  }
  function delete_binhluan($id){
    $sql="delete from binhluan where id =".$id;
    pdo_execute($sql);
  }
?>