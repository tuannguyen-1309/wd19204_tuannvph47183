<?php
  functionc($tenloai){
    $sql = "INSERT INTO danhmuc (name) VALUES ('$tenloai')";
    pdo_execute($sql);
  }
  function delete_danhmuc($id){
    $sql="delete from danhmuc where id =".$id;
    pdo_execute($sql);
  }
  function loadAll_danhmuc(){
    $sql = "SELECT * FROM danhmuc ORDER BY id DESC";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
  }
  function loadOne_danhmuc($id){
    $sql="select*from danhmuc where id =".$id;
    $dm=pdo_query_one($sql);
    return $dm;
  }
  function update_danhmuc($id,$tenloai){
    $sql = "UPDATE danhmuc SET name='".$tenloai."' WHERE id=".$id;
    pdo_execute($sql);
  }
?>