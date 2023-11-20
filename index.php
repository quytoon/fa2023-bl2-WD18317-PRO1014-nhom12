<?php
include "view/header.php";
include "view/home.php";
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/binhluan.php";
include "model/taikhoan.php";
include "global.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
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
            include "view/giohang.php";
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
            if (isset($_POST['dangnhap'])) {
                $loginMess = dangnhap($_POST['TenTaiKhoan'], $_POST['MatKhau']);
            }
            include "view/taikhoan/dangnhap.php";
            break;
        case "dangky":
            
            if(isset($_POST['dangky']) && ($_POST['dangky']!="")){
                $TenTaiKhoan = $_POST['TenTaiKhoan'];
                $Email = $_POST['Email'];
                $MatKhau = $_POST['MatKhau'];
                dangky($TenTaiKhoan,$Email,$MatKhau);
                $thongbao="Đăng ký thành công";
            }
            include "view/taikhoan/dangky.php";
            break;     
            
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
?>