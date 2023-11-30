<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/binhluan.php";
include "model/taikhoan.php";
include "model/giohang.php";
include "model/donhang.php";
include "model/validate.php";
include "view/header.php";
include "global.php";
$spnew = loadall_sanpham_home();
$dmhome = load_dm_home();
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
            if(isset($_POST['guibl']) && $_POST['guibl']) {
                $IdTaiKhoan = $_SESSION['TenTaiKhoan']["IdTaiKhoan"];
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
        case "chitietdonhang":
            if(isset($_GET['IdDonHang']) && $_GET['IdDonHang'] > 0) {
                $donhang = load_chitietdonhang($_GET['IdDonHang']);
                include "view/chitietdonhang.php";
            } else {
                include "view/home.php";
            }
            break;
        case "huydonhang":
            if(isset($_SESSION['TenTaiKhoan']) && $_SESSION['TenTaiKhoan'] != '') {
                if(isset($_GET['IdDonHang']) && $_GET['IdDonHang'] > 0) {
                    $huy_giohang = huy_donhang($_GET['IdDonHang']);
                    $load_donhang = loadall_donhang($_GET['IdDonHang']);
                    include "view/donhang.php";
                } else {
                    include "view/home.php";
                }
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
        case "donhang":
            $load_donhang = loadall_donhang($_SESSION['TenTaiKhoan']['IdTaiKhoan']);
            include "view/donhang.php";
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
            $productExists = false;
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
                        $insert_giohang = insert_giohang($_GET['idsp'], $_SESSION['TenTaiKhoan']['IdTaiKhoan'] );
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
            if(isset($_SESSION['TenTaiKhoan']) && $_SESSION['TenTaiKhoan'] != '') {
                $thongtinuser = loadall_thongtinuser(($_SESSION['TenTaiKhoan']['IdTaiKhoan']));
                $load_giohang = loadall_giohang(($_SESSION['TenTaiKhoan']['IdTaiKhoan']));
                include "view/thanhtoan.php";
            }
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
                echo "<meta http-equiv='refresh' content='0;url=index.php'>";
            }
            include "view/taikhoan/dangnhap.php";

            break;
        case "dangky":
            if(isset($_POST['dangky']) && !empty($_POST['dangky'])) {
                $TenTaiKhoan = trim($_POST['TenTaiKhoan']);
                $Email = trim($_POST['Email']);
                $MatKhau = trim($_POST['MatKhau']);
                $MatKhau2 = trim($_POST['MatKhau2']);

                if(!empty($TenTaiKhoan) && !empty($Email) && !empty($MatKhau) && !empty($MatKhau2)) {
                    if($MatKhau == $MatKhau2) {
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
            echo "<meta http-equiv='refresh' content='0;url=index.php'>";

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
        case "xacnhanthanhtoan":
            if(isset($_POST["optradio"]) && $_POST["optradio"] == "2") {
                $currentDate = date("Y-m-d");
                $load_giohang = loadall_giohang(($_SESSION['TenTaiKhoan']['IdTaiKhoan']));
                $load_donhang = loadall_donhang(($_SESSION['TenTaiKhoan']['IdTaiKhoan']));
                $diachi = $_POST["thanhpho"].','.$_POST["quanhuyen"].','.$_POST["xa"].','.$_POST["diachi"];
                insert_donhang($currentDate, $load_giohang['0']['tong_bill'], $_SESSION['TenTaiKhoan']['IdTaiKhoan'], $load_giohang['0']['tong_sl'], $diachi);
                $load_giohang = loadall_giohang(($_SESSION['TenTaiKhoan']['IdTaiKhoan']));
                $load_donhang = loadall_donhang(($_SESSION['TenTaiKhoan']['IdTaiKhoan']));
                foreach ($load_giohang as $key) {
                    insert_chitietdonhang($load_donhang['0']['IdDonHang'],$key['IdSanPham'],$key['SoLuongSp'],$key['Gia']);
                }
                $delete_giohang = xoagiohang(($_SESSION['TenTaiKhoan']['IdTaiKhoan']));

                include "view/thanhtoanthanhcong.php";
            }
            if(isset($_POST["optradio"]) && $_POST["optradio"] == "1") {

            }
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
?>