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
include "model/giamgia.php";
include "view/header.php";
include "global.php";
$spnew = loadall_sanpham_home();
$dmhome = load_dm_home();
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
            if (isset($_POST['guibl']) && $_POST['guibl']) {
                $IdTaiKhoan = $_SESSION['TenTaiKhoan']["IdTaiKhoan"];
                $IdSanPham = $_POST["IdSanPham"];
                $NoiDung = $_POST["noidung"];
                $DiemDanhGia = isset($_POST["rating"]) ? (int) $_POST["rating"] : 0;
                them_binhluan($IdSanPham, $IdTaiKhoan, $NoiDung, $DiemDanhGia);
            }
            if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
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
            if (isset($_GET['IdDonHang']) && $_GET['IdDonHang'] > 0) {
                $donhang = load_chitietdonhang($_GET['IdDonHang']);
                include "view/chitietdonhang.php";
            } else {
                include "view/home.php";
            }
            break;
        case "huydonhang":
            if (isset($_SESSION['TenTaiKhoan']) && $_SESSION['TenTaiKhoan'] != '') {
                if (isset($_GET['IdDonHang']) && $_GET['IdDonHang'] > 0) {
                    $load_donhang = loadall_donhang($_SESSION['TenTaiKhoan']['IdTaiKhoan']);
                    $ttdh = checkstatus_dh($_GET['IdDonHang']);
                    if ($ttdh['TrangThai'] == 3 || $ttdh['TrangThai'] == 2) {
                        $thongbao = "Thao tác của bạn chưa được thực hiện do trạng thái đơn hàng đã thay đổi ";
                        echo "<script>";
                        echo "alert('$thongbao');";
                        echo "</script>";
                        include "view/donhang.php";
                    } else {
                        var_dump($ttdh['TrangThai']);
                        $huy_giohang = huy_donhang($_GET['IdDonHang']);
                        $donhang = load_chitietdonhang($_GET['IdDonHang']);
                        foreach ($donhang as $key) {
                            $update_slsp = update_slsp_huydh($key['sl'], $key['IdMauSac'], $key['IdSizeGiay'], $key['IdSanPham']);
                        }
                        include "view/donhang.php";
                    }
                } else {
                    include "view/home.php";
                }
            }
            break;
        case "donhang":
            $load_donhang = loadall_donhang($_SESSION['TenTaiKhoan']['IdTaiKhoan']);
            include "view/donhang.php";
            break;
        case "giohang":
            if (isset($_SESSION['TenTaiKhoan']) && $_SESSION['TenTaiKhoan'] != '') {
                if (isset($_POST['update']) && $_POST['update'] != '') {
                    $soluong = $_POST['quantity'];
                    $idsp = $_POST['idsp'];
                    $load_giohang = loadall_giohang($_SESSION['TenTaiKhoan']['IdTaiKhoan']);
                    foreach ($soluong as $k => $v) {
                        foreach ($v as $v1 => $v2) {
                            foreach ($v2 as $v3 => $v4) {
                                if ($v4 > 0) {
                                    foreach ($load_giohang as $key) {
                                        $checkslsp = checkslsp($key['IdSanPham'], $key['IdMauSac'], $key['IdSizeGiay']);
                                        $checkdk = true;
                                        $v4 = (int) $v4;
                                        if ($checkslsp['SoLuong'] < $v4) {
                                            $checkdk = false;
                                        }
                                        if ($checkdk == false) {
                                            $thongbao = "Số lượng sản phẩm trong kho không đủ";
                                            echo "<script>";
                                            echo "alert('$thongbao');";
                                            echo "</script>";
                                            break;
                                        } else {
                                            update_giohang($v4, $k, $_SESSION['TenTaiKhoan']['IdTaiKhoan'], $v1, $v3);
                                        }

                                    }
                                } else if ($v4 == 0) {
                                    $delete_giohang = delete_sp_giohang($k, $_SESSION['TenTaiKhoan']['IdTaiKhoan'], $v3, $v1);
                                    echo "<meta http-equiv='refresh' content='0;url=index.php?act=giohang'>";
                                } else {
                                    $thongbao = "Số lượng sản phẩm phải lớn hơn không";
                                    echo "<script>";
                                    echo "alert('$thongbao');";
                                    echo "</script>";
                                }
                            }
                        }
                    }
                }
                $load_giohang = loadall_giohang($_SESSION['TenTaiKhoan']['IdTaiKhoan']);
                include "view/giohang.php";
            } else {
                include "view/taikhoan/dangnhap.php";
            }
            break;
        case "themgiohang":
            $productExists = false;
            if (isset($_SESSION['TenTaiKhoan']) && $_SESSION['TenTaiKhoan'] != '') {
                if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                    $load_giohang = loadall_giohang($_SESSION['TenTaiKhoan']['IdTaiKhoan']);
                    $IdMauSac = $_POST['IdMauSac'];
                    $IdSizeGiay = $_POST['IdSizeGiay'];
                    $SoLuong = $_POST["quantity"];
                    $checkslsp = checkslsp($_GET['idsp'], $_POST['IdMauSac'], $_POST['IdSizeGiay']);
                    $checkslsp_gh = checkslsp_gh($_SESSION['TenTaiKhoan']['IdTaiKhoan'], $_GET['idsp'], $_POST['IdMauSac'], $_POST['IdSizeGiay']);
                    if (isset($checkslsp_gh) && $checkslsp_gh != "") {
                        $slsp = $checkslsp['SoLuong'] - $checkslsp_gh['SoLuongSp'] - $_POST["quantity"];
                    } else {
                        $slsp = $checkslsp['SoLuong'] - $_POST["quantity"];
                    }
                    foreach ($load_giohang as $key) {
                        if ($SoLuong <= 0) {
                            $thongbao = "Số lượng sản phẩm phải lớn hơn 0 ";
                            echo "<script>";
                            echo "alert('$thongbao');";
                            echo "window.location.href = 'index.php?act=chitietsanpham&idsp=" . $_GET['idsp'] . "';";
                            echo "</script>";
                        }
                        if ($_GET['idsp'] == $key['IdSanPham'] && $_POST['IdSizeGiay'] == $key['IdSizeGiay'] && $_POST['IdMauSac'] == $key['IdMauSac'] && $slsp >= 0) {
                            $insert_soLuong = insert_soLuong_gioHang($_GET['idsp'], $_SESSION['TenTaiKhoan']['IdTaiKhoan'], $SoLuong, $IdSizeGiay, $IdMauSac);
                            $productExists = true;
                            echo "<meta http-equiv='refresh' content='0;url=index.php?act=giohang'>";
                            break;
                        }
                        if ($slsp < 0) {
                            $thongbao = "Số lượng sản phẩm trong kho không đủ. Vui lòng chọn sản phẩm khác.";
                            echo "<script>";
                            echo "alert('$thongbao');";
                            echo "window.location.href = 'index.php?act=chitietsanpham&idsp=" . $_GET['idsp'] . "';";
                            echo "</script>";
                        }
                    }
                    if (!$productExists) {
                        if (isset($_POST['themgiohang'])) {
                            if (!$productExists) {
                                $productExists = tim_sp_id($_GET['idsp'], $IdSizeGiay, $IdMauSac);
                                if ($productExists) {
                                    if ($slsp >= 0) {
                                        $insert_giohang = insert_giohang($_GET['idsp'], $_SESSION['TenTaiKhoan']['IdTaiKhoan'], $IdMauSac, $IdSizeGiay, $SoLuong);
                                    }
                                } else {
                                    // Sản phẩm không tồn tại trong cơ sở dữ liệu
                                    $thongbao = "Sản phẩm đã hết. Vui lòng chọn sản phẩm khác.";
                                    echo "<script>";
                                    echo "alert('$thongbao');";
                                    echo "window.location.href = 'index.php?act=chitietsanpham&idsp=" . $_GET['idsp'] . "';";
                                    echo "</script>";
                                }
                            }
                        }
                        $load_giohang = loadall_giohang($_SESSION['TenTaiKhoan']['IdTaiKhoan']);
                        echo "<meta http-equiv='refresh' content='0;url=index.php?act=giohang'>";
                    }
                } else {
                    include "view/home.php";
                }
            } else {
                include "view/taikhoan/dangnhap.php";
            }
            break;
        case "xoagiohang":
            if (isset($_SESSION['TenTaiKhoan']) && $_SESSION['TenTaiKhoan'] != '') {
                if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                    $delete_giohang = delete_sp_giohang($_GET['idsp'], $_SESSION['TenTaiKhoan']['IdTaiKhoan'], $_GET['size'], $_GET['mau']);
                    $load_giohang = loadall_giohang($_SESSION['TenTaiKhoan']['IdTaiKhoan']);
                    echo "<meta http-equiv='refresh' content='0;url=index.php?act=giohang'>";
                } else {
                    include "view/home.php";
                }
            } else {
                include "view/taikhoan/dangnhap.php";
            }
            break;
        case "thongtintaikhoan":
            if (isset($_SESSION['TenTaiKhoan']) && $_SESSION['TenTaiKhoan'] != '') {
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
            if (isset($_SESSION['TenTaiKhoan']) && $_SESSION['TenTaiKhoan'] != '') {
                $thongtinuser = loadall_thongtinuser(($_SESSION['TenTaiKhoan']['IdTaiKhoan']));
                $load_giohang = loadall_giohang(($_SESSION['TenTaiKhoan']['IdTaiKhoan']));
                include "view/thanhtoan.php";
            }
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
                    echo "<meta http-equiv='refresh' content='0;url=index.php'>";

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

                if (empty($TenTaiKhoan)) {
                    $thongbao1 = check_Validate("Vui lòng điền đầy đủ thông tin");

                }
                if (!empty($TenTaiKhoan) && (strlen($TenTaiKhoan) < 6)) {
                    $thongbao1 = check_Validate("Tên đăng nhập phải có ít nhất 6 ký tự ");
                }
                if (empty($Email)) {
                    $thongbao2 = check_Validate("Vui lòng điền đầy đủ thông tin");
                }
                if (empty($MatKhau) || empty($MatKhau2)) {
                    $thongbao = check_Validate("Vui lòng điền đầy đủ thông tin");
                }
                if ($MatKhau != $MatKhau2) {
                    $thongbao = check_Validate("Mật khẩu không khớp");
                } else if (!empty($TenTaiKhoan) && !empty($Email) && !empty($MatKhau) && !empty($MatKhau2) && strlen($TenTaiKhoan) >= 6) {
                    dangky($TenTaiKhoan, $Email, $MatKhau);
                    $thongbao3 = "Đăng ký thành công";
                }
            }
            include "view/taikhoan/dangky.php";
            break;

        case "dangxuat":
            dangxuat();
            echo "<meta http-equiv='refresh' content='0;url=index.php'>";

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
        case "xacnhanthanhtoan":
            if (isset($_POST["optradio"]) && $_POST["optradio"] == "2") {
                $currentDate = date("Y-m-d");
                $load_giohang = loadall_giohang(($_SESSION['TenTaiKhoan']['IdTaiKhoan']));
                $load_donhang = loadall_donhang(($_SESSION['TenTaiKhoan']['IdTaiKhoan']));
                $diachi = $_POST["thanhpho"] . ',' . $_POST["quanhuyen"] . ',' . $_POST["xa"] . ',' . $_POST["diachi"];
                $checkdk = true;
                foreach ($load_giohang as $key) {
                    $checkslsp = checkslsp($key['IdSanPham'], $key['IdMauSac'], $key['IdSizeGiay']);
                    $checkslsp_gh = checkslsp_gh($_SESSION['TenTaiKhoan']['IdTaiKhoan'], $key['IdSanPham'], $key['IdMauSac'], $key['IdSizeGiay']);
                    if (isset($checkslsp_gh) && $checkslsp_gh != "") {
                        $slsp = $checkslsp['SoLuong'] - $checkslsp_gh['SoLuongSp'];
                    } else {
                        $slsp = $checkslsp['SoLuong'];
                    }
                    if ($slsp < 0) {
                        $checkdk = false;
                        break;
                    }
                }
                if ($checkdk == true) {
                    insert_donhang($currentDate, $load_giohang['0']['tong_bill'], $_SESSION['TenTaiKhoan']['IdTaiKhoan'], $load_giohang['0']['tong_sl'], $diachi, $_POST['hoten'], $_POST['sdt'], $_POST['email'], "");
                    $load_giohang = loadall_giohang(($_SESSION['TenTaiKhoan']['IdTaiKhoan']));
                    $load_donhang = loadall_donhang(($_SESSION['TenTaiKhoan']['IdTaiKhoan']));
                    foreach ($load_giohang as $key) {
                        insert_chitietdonhang($load_donhang['0']['IdDonHang'], $key['IdSanPham'], $key['SoLuongSp'], $key['Gia'], $key['IdMauSac'], $key['IdSizeGiay']);
                        update_luotmua_sp($key['SoLuongSp'], $key['IdSanPham']);
                        update_luotmua_bienthe($key['SoLuongSp'], $key['IdSanPham'], $key['IdMauSac'], $key['IdSizeGiay']);
                    }
                    foreach ($load_giohang as $key) {
                        delete_spdonhang($key['SoLuongSp'], $key['IdSanPham']);
                        delete_spbienthe($key['SoLuongSp'], $key['IdSanPham'], $key['IdMauSac'], $key['IdSizeGiay']);
                    }
                    $delete_giohang = xoagiohang(($_SESSION['TenTaiKhoan']['IdTaiKhoan']));
                } else {
                    $thongbao = "Số lượng sản phẩm trong kho không đủ do đã có sự thay đổi(người khác đã mua hàng)";
                    echo "<script>";
                    echo "alert('$thongbao');";
                    echo "window.location.href = 'index.php?act=giohang';";
                    echo "</script>";
                }

                include "view/thanhtoanthanhcong.php";
            } else if (isset($_POST["optradio"]) && $_POST["optradio"] == "1") {
                $currentDate = date("Y-m-d");
                $load_giohang = loadall_giohang(($_SESSION['TenTaiKhoan']['IdTaiKhoan']));
                $load_donhang = loadall_donhang(($_SESSION['TenTaiKhoan']['IdTaiKhoan']));
                $diachi = $_POST["thanhpho"] . ',' . $_POST["quanhuyen"] . ',' . $_POST["xa"] . ',' . $_POST["diachi"];
                include "vnpay_php/vnpay_create_payment.php";
            }
            break;
        case "thanhtoanthanhcong":
            $currentDate = date("Y-m-d");
            $load_giohang = loadall_giohang(($_SESSION['TenTaiKhoan']['IdTaiKhoan']));
            $load_donhang = loadall_donhang(($_SESSION['TenTaiKhoan']['IdTaiKhoan']));
            $diachi = $_SESSION['post_data']['thanhpho'] . ',' . $_SESSION['post_data']['quanhuyen'] . ',' . $_SESSION['post_data']['xa'] . ',' . $_SESSION['post_data']['diachi'];
            $checkdk = true;
            foreach ($load_giohang as $key) {
                $checkslsp = checkslsp($key['IdSanPham'], $key['IdMauSac'], $key['IdSizeGiay']);
                $checkslsp_gh = checkslsp_gh($_SESSION['TenTaiKhoan']['IdTaiKhoan'], $key['IdSanPham'], $key['IdMauSac'], $key['IdSizeGiay']);
                if (isset($checkslsp_gh) && $checkslsp_gh != "") {
                    $slsp = $checkslsp['SoLuong'] - $checkslsp_gh['SoLuongSp'];
                } else {
                    $slsp = $checkslsp['SoLuong'];
                }
                if ($slsp < 0) {
                    $checkdk = false;
                    break;
                }
            }
            if ($checkdk == true) {
                insert_donhang($currentDate, $load_giohang['0']['tong_bill'], $_SESSION['TenTaiKhoan']['IdTaiKhoan'], $load_giohang['0']['tong_sl'], $diachi, $_SESSION['post_data']['hoten'], $_SESSION['post_data']['sdt'], $_SESSION['post_data']['email'], $_SESSION['post_data']['iddh']);
                $load_giohang = loadall_giohang(($_SESSION['TenTaiKhoan']['IdTaiKhoan']));
                $load_donhang = loadall_donhang(($_SESSION['TenTaiKhoan']['IdTaiKhoan']));
                foreach ($load_giohang as $key) {
                    insert_chitietdonhang($load_donhang['0']['IdDonHang'], $key['IdSanPham'], $key['SoLuongSp'], $key['Gia'], $key['IdMauSac'], $key['IdSizeGiay']);
                    update_luotmua_sp($key['IdSanPham'], $key['SoLuongSp']);
                    update_luotmua_bienthe($key['IdSanPham'], $key['SoLuongSp'], $key['IdMauSac'], $key['IdSizeGiay']);
                }
                foreach ($load_giohang as $key) {
                    delete_spdonhang($key['SoLuongSp'], $key['IdSanPham']);
                    delete_spbienthe($key['SoLuongSp'], $key['IdSanPham'], $key['IdMauSac'], $key['IdSizeGiay']);
                }
                $delete_giohang = xoagiohang(($_SESSION['TenTaiKhoan']['IdTaiKhoan']));
            } else {
                $thongbao = "Số lượng sản phẩm trong kho không đủ do đã có sự thay đổi(người khác đã mua hàng)";
                echo "<script>";
                echo "alert('$thongbao');";
                echo "window.location.href = 'index.php?act=giohang';";
                echo "</script>";
            }
            include "view/thanhtoanthanhcong.php";
            break;
        case "giamgiafree":
            $dsgiamgia = loadall_giamgia();
            include "view/giamgiafree.php";
            break;
        case "nhanma":

            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
?>