<?php
include './header.php';
include './model/pdo.php';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            if (isset($_POST['themmoi']) &&  $_POST['themmoi']) {
                $tenloai = $_POST['tenloai'];
                them_danhmuc($tenloai);
                $thongbao = 'them thanh cong';
            }
            include 'danhmuc/add.php';
            break;
        }
    } else {
        include './home.php';
    }
    include './footer.php';