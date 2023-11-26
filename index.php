<?php
session_start(); 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "view/header.php";
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/binhluan.php";
include "model/taikhoan.php";
include "model/giohang.php";
include "global.php";
$spnew = loadall_sanpham_home();
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    ;
    $act = $_GET['act'];
    switch ($act) {
        case "sanpham":
            if (isset($_POST['keyword']) && $_POST['keyword'] != 0) {
                $kyw = $_POST['keyword'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $dsdm = loadall_danhmuc();
            include "view/sanpham.php";
            break;
        case "chitietsanpham":
            if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                $sanpham = load_chitietsanpham($_GET['idsp']);
                $mausac = loadall_mausac();
                $sizegiay = loadall_size();
                $sanphamcl = load_sanpham_cungloai($_GET['idsp'], $sanpham['iddm']);
                $binhluan = loadall_binhluan($_GET['idsp']);
                include "view/chitietsanpham.php";
            } else {
                include "view/home.php";
            }
            break;
        case "giohang":
            $load_giohang = loadall_giohang(1);
            include "view/giohang.php";
            break;
        case "themgiohang":
            if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                $insert_giohang = insert_giohang($_GET['idsp'], 1);
                $load_giohang = loadall_giohang(1);

                include "view/giohang.php";
            } else {
                include "view/home.php";
            }
            break;
        case "xoagiohang":
            if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                $delete_giohang = delete_sp_giohang($_GET['idsp'], 1);
                $load_giohang = loadall_giohang(1);
                include "view/giohang.php";
            } else {
                include "view/home.php";
            }
            break;
        case "trangyeuthich":
            $listyeuthich = loadall_sanpham_yeuthich();
            include "view/trangyeuthich.php";
            break;
        case "thongtintaikhoan":
            include "view/taikhoan/thongtintaikhoan.php";
            break;
        case "thongtin":
            include "view/thongtin.php";
            break;
        case "lienhe":
            include "view/lienhe.php";
            break;
        case "thanhtoan":
            include "view/thanhtoan.php";
            break;
        case "dangnhap":
            // include "view/taikhoan/dangnhap.php"; 
            if (isset($_POST['dangnhap'])) {
                // $loginMess = dangnhap($_POST['TenTaiKhoan'],$_POST['MatKhau']);
                $TenTaiKhoan = $_POST['TenTaiKhoan'];
                $MatKhau = $_POST['MatKhau'];
                $checkuser = checkuser($TenTaiKhoan, $MatKhau);
                if (is_array($checkuser)) {
                    $_SESSION['TenTaiKhoan'] = $checkuser;
                   
                    // include "index.php";
                } else {
                    $loginMess = "dang nhap khong thanh cong";
                }
                // header("Location:view/home.php"); 
                // include "view/taikhoan/dangnhap.php";     

                // include "view/home.php";header("Location:index.php");     
            }
            include "view/taikhoan/dangnhap.php";
            // if(!isset($_POST['dangnhap']) && isset($_POST['TenTaiKhoan'])) {
            //     $loginMess = dangnhap($_POST['TenTaiKhoan'],$_POST['MatKhau']);
            //      include "view/home.php";
            // }
            // include "view/taikhoan/dangnhap.php"; 

            break;
        case "dangky":
            if (isset($_POST['dangky']) && ($_POST['dangky'] != "")) {
                $TenTaiKhoan = $_POST['TenTaiKhoan'];
                $Email = $_POST['Email'];
                $MatKhau = $_POST['MatKhau'];
                $MatKhau2 = $_POST['MatKhau2'];
                if ($_POST['MatKhau'] == $_POST['MatKhau2']) {
                    dangky($TenTaiKhoan, $Email, $MatKhau);
                } else {
                    echo "dang ky that bai";
                }
                $thongbao = "Đăng ký thành công";
            }
            include "view/taikhoan/dangky.php";
            break;
        case "dangxuat":
            dangxuat();
            include "view/home.php";
            break;
        case "quenmk":
            if (isset($_POST['guimail'])) {
                $Email = $_POST['Email'];
                $sendMailMess = sendMail($Email);
                // $checkemail = checkemail($Email);
                // if (is_array($sendMailMess)) {
                //     $thongbao = "mat khau cua ban la: " . $sendMailMess['MatKhau'];
                // } else {
                //     $thongbao = "email khong ton tai";
                // }
            }
            include "view/taikhoan/quenmatkhau.php";
            break;

    }
} else {
    include "view/home.php";
}
include "view/footer.php";
?>