<?php
  include './view/header.php';

  if(isset($_GET['act'])&&($_GET['act']!="")){
    $act = $_GET['act'];
    switch ($variable) {
      case 'value':
        # code...
        break;
      
      default:
        # code...
        break;
    }
  }

  include './view/home.php';
  include './view/footer.php';
?>