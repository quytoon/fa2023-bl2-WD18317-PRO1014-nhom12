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
include "model/validate.php";
include "global.php";
$spnew = loadall_sanpham_home();
$dmhome=load_dm_home();
if(isset($_GET['act']) && ($_GET['act'] != "")) {
    ;
    $act = $_GET['act'];
    switch($act) {
        case "sanpham":
            if(isset($_POST['keyword']) && $_POST['keyword'] != 0) {
                $kyw = $_POST['keyword'];
            } else {
                $kyw = "";
            }
            if(isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $dsdm = loadall_danhmuc();
            include "view/sanpham.php";
            break;
        case "chitietsanpham":
            if (isset($_POST['guibl']) && $_POST['guibl']) {
                $IdTaiKhoan = $_SESSION['IdTaiKhoan'];
                $IdSanPham = $_POST["IdSanPham"];
                $NoiDung = $_POST["noidung"];
                $DiemDanhGia = isset($_POST["rating"]) ? (int)$_POST["rating"] : 0;
                them_binhluan($IdSanPham, $IdTaiKhoan, $NoiDung, $DiemDanhGia);
            }
            if(isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                $sanpham = load_chitietsanpham($_GET['idsp']);
                $mausac = loadall_mausac();
                $sizegiay = loadall_size();
                $anhsp = loadall_anhsp($_GET['idsp']);
                $sanphamcl = load_sanpham_cungloai($_GET['idsp'], $sanpham['iddm']);
                $binhluan = loadall_binhluan($_GET['idsp']);
                include "view/chitietsanpham.php";
            } else {
                include "view/home.php";
            }
            break;
        case "giohang":
            if(isset($_SESSION['TenTaiKhoan']) && $_SESSION['TenTaiKhoan'] != '') {
                $load_giohang = loadall_giohang($_SESSION['TenTaiKhoan']['IdTaiKhoan']);
                include "view/giohang.php";
            } else {
                include "view/taikhoan/dangnhap.php";
            }
            break;
        case "themgiohang":
            $productExists = false ;
            if(isset($_SESSION['TenTaiKhoan']) && $_SESSION['TenTaiKhoan'] != '') {
                if(isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                    $load_giohang = loadall_giohang($_SESSION['TenTaiKhoan']['IdTaiKhoan']);
                    foreach($load_giohang as $key) {
                        if($_GET['idsp'] == $key['IdSanPham']) {
                            $insert_soLuong = insert_soLuong_gioHang($_GET['idsp'], $_SESSION['TenTaiKhoan']['IdTaiKhoan']);
                            $productExists = true;
                            break;
                        }
                    }
                    if(!$productExists){
                        $insert_giohang = insert_giohang($_GET['idsp'], $_SESSION['TenTaiKhoan']['IdTaiKhoan']);
                    }
                    $load_giohang = loadall_giohang($_SESSION['TenTaiKhoan']['IdTaiKhoan']);
                    include "view/giohang.php";
                } else {
                    include "view/home.php";
                }
            } else {
                include "view/taikhoan/dangnhap.php";
            }
            break;
        case "xoagiohang":
            if(isset($_SESSION['TenTaiKhoan']) && $_SESSION['TenTaiKhoan'] != '') {
                if(isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                    $delete_giohang = delete_sp_giohang($_GET['idsp'], $_SESSION['TenTaiKhoan']['IdTaiKhoan']);
                    $load_giohang = loadall_giohang($_SESSION['TenTaiKhoan']['IdTaiKhoan']);
                    include "view/giohang.php";
                } else {
                    include "view/home.php";
                }
            } else {
                include "view/taikhoan/dangnhap.php";
            }
            break;
        case "thongtintaikhoan":
            if(isset($_SESSION['TenTaiKhoan']) && $_SESSION['TenTaiKhoan'] != '') {
                include "view/taikhoan/thongtintaikhoan.php";
            } else {
                include "view/taikhoan/dangnhap.php";
            }
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
            if(isset($_POST['dangnhap'])) {
                // $loginMess = dangnhap($_POST['TenTaiKhoan'],$_POST['MatKhau']);
                $TenTaiKhoan = $_POST['TenTaiKhoan'];
                $MatKhau = $_POST['MatKhau'];
                $checkuser = checkuser($TenTaiKhoan, $MatKhau);
                if(is_array($checkuser)) {
                    $_SESSION['TenTaiKhoan'] = $checkuser;

                    // include "index.php";
                } else {
                    $loginMess = "dang nhap khong thanh cong";
                }
            }
            include "view/taikhoan/dangnhap.php";

            break;
        case "dangky":
            if (isset($_POST['dangky']) && !empty($_POST['dangky'])) {
                $TenTaiKhoan = trim($_POST['TenTaiKhoan']);
                $Email = trim($_POST['Email']);
                $MatKhau = trim($_POST['MatKhau']);
                $MatKhau2 = trim($_POST['MatKhau2']);

                if (!empty($TenTaiKhoan) && !empty($Email) && !empty($MatKhau) && !empty($MatKhau2)) {
                    if ($MatKhau == $MatKhau2) {
                        dangky($TenTaiKhoan, $Email, $MatKhau);
                        $thongbao = "Đăng ký thành công";
                    } else {
                        $thongbao = "Mật khẩu không khớp";
                    }
                } else {

                    $thongbao = check_Validate("Vui lòng điền đầy đủ thông tin");
                }
            }
            include "view/taikhoan/dangky.php";
            break;

        case "dangxuat":
            dangxuat();
            include "view/home.php";
            break;
        case "quenmk":
            if(isset($_POST['guimail'])) {
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