<?php
  function insert_taikhoan($user,$pass,$email){
    $sql="insert into taikhoan(user,pass,email) values('$user','$pass','$email')";
    pdo_execute($sql);
  }
  function checkuser($user,$pass){
    $sql="select * from taikhoan where user='".$user."' AND pass='".$pass."'";
    $sp=pdo_query_one($sql);
    return $sp;
  }
  function checkemail($email){
    $sql="select * from taikhoan where email='".$email."'";
    $sp=pdo_query_one($sql);
    return $sp;
  }
  function update_taikhoan($id,$user,$pass,$email,$address,$tel)
  {
    
      $sql = "UPDATE taikhoan SET user='".$user."', pass='".$pass."',email='".$email."',address='".$address."',tel='".$tel."' WHERE id=".$id;
    
    pdo_execute($sql);
  }
  function loadAll_taikhoan(){
    $sql = "SELECT * FROM taikhoan ORDER BY id DESC";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
  }
  function loadOne_taikhoan($id){
    $sql="select * from taikhoan where id =".$id;
    $tk=pdo_query_one($sql);
    return $tk;
  }
  function delete_taikhoan($id){
    $sql="delete from taikhoan where id =".$id;
    pdo_execute($sql);
  }
?>