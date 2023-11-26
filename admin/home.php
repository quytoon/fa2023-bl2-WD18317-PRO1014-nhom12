<?php
  var_dump($_SESSION);
    if(isset($_SESSION['TenTaiKhoan']) && ($_SESSION['role'] == 1)){
        
    }else{
        echo "ban khong the truy cap vao admin";
    }
?>