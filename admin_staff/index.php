<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'header.php';
include '../model/pdo.php';
include '../model/danhmuc.php';
include '../model/taikhoan.php';
include '../model/thongke.php';
include '../model/giohang.php';
include '../global.php';
include '../model/sanpham.php';
include '../model/binhluan.php';
include '../model/donhang.php';
include '../model/validate.php';
if(isset($_SESSION['TenTaiKhoan']) && ($_SESSION['TenTaiKhoan']['role'] == 2 || $_SESSION['TenTaiKhoan']['role'] == 1)){
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddanhmuc':
            if (isset($_POST['themDanhMuc']) && ($_POST['themDanhMuc'])) {
                $name = $_POST['tenDanhMuc'];
                insert_danhmuc($name);
                $thongbao = "Thêm thành công";
            };
            include 'danhmuc/adddanhmuc.php';
            break;
        case 'listdanhmuc':
            $listdanhmuc = loadall_danhmuc_admin();
            include 'danhmuc/listdanhmuc.php';
            break;
        case 'updatedanhmuc':
            if (isset($_GET['idDanhMuc']) && ($_GET['idDanhMuc']) > 0) {
                $chitietdm = loadone_danhmuc($_GET['idDanhMuc']);
            }
            include 'danhmuc/updatedanhmuc.php';
            break;
        case 'suadanhmuc':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['idDanhMuc'];
                $name = $_POST['tenDanhMuc'];
                update_danhmuc($name, $id);
                $thongbao = "Cập nhật thành công ";
            }
            $listdanhmuc = loadall_danhmuc_admin();
            include "danhmuc/listdanhmuc.php";
            break;
        case 'xoadm':
            if (isset($_GET['idDanhMuc'])) {
                delete_dm($_GET['idDanhMuc']);
            }
            $listdanhmuc = loadall_danhmuc_admin();
            include "danhmuc/listdanhmuc.php";
            break;
        case 'xoamemdm':
            if(isset($_GET['idDanhMuc'])){
                xoamem_dm($_GET['idDanhMuc']);
            }    
            $listdanhmuc = loadall_danhmuc_admin();
            include "danhmuc/listdanhmuc.php";
            break;    
        case 'listtaikhoan':
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/listtaikhoan.php";
            break;    
        case 'xoataikhoan':
            if(isset($_GET['IdTaiKhoan']) && ($_GET['IdTaiKhoan']>0)){
                delete_taikhoan($_GET['IdTaiKhoan']);
            }
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/listtaikhoan.php";
            break;
        case 'addtaikhoan':
            if(isset($_POST['themtaikhoan']) && ($_POST['themtaikhoan'])){
                $TenTaiKhoan = $_POST['TenTaiKhoan'];
                $MatKhau = $_POST['MatKhau'];
                $HoTen = $_POST['HoTen'];
                $DiaChi = $_POST['DiaChi'];
                $Email = $_POST['Email'];
                $SoDienThoai = $_POST['SoDienThoai'];
                $role = $_POST['role'];
                $avatarUser = $_FILES['avatarUser']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['avatarUser']['name']);
                if (move_uploaded_file($_FILES['avatarUser']['tmp_name'], $target_file)) {
                    // Upload thành công
                    // echo "Bạn đã upload ảnh thành công";
                } else {
                    // Upload không thành công
                    // echo "Upload ảnh không thành công";
                }
                insert_taikhoan($TenTaiKhoan,$MatKhau,$HoTen,$DiaChi,$Email,$SoDienThoai,$avatarUser,$role);
                $thongbao = "Thêm thành công";
            }     
            include 'taikhoan/addtaikhoan.php';
            break;
        case 'updatetaikhoan':
            if (isset($_GET['IdTaiKhoan']) && ($_GET['IdTaiKhoan']) > 0) {
                $chitiettaikhoan = loadone_taikhoan($_GET['IdTaiKhoan']);
            }
            include 'taikhoan/updatetaikhoan.php';
            break;
        case 'suataikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $TenTaiKhoan = $_POST['TenTaiKhoan'];
                $IdTaiKhoan=$_POST['IdTaiKhoan'];
                $MatKhau = $_POST['MatKhau'];
                $HoTen = $_POST['HoTen'];
                $DiaChi = $_POST['DiaChi'];
                $Email = $_POST['Email'];
                $SoDienThoai = $_POST['SoDienThoai'];
                $role = $_POST['role'];
                $avatarUser = $_FILES['avatarUser']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['avatarUser']['name']);
                if (move_uploaded_file($_FILES['avatarUser']['tmp_name'], $target_file)) {
                    // Upload thành công
                    // echo "Bạn đã upload ảnh thành công";
                } else {
                    // Upload không thành công
                    // echo "Upload ảnh không thành công";
                }
                update_taikhoan($TenTaiKhoan,$MatKhau,$HoTen,$DiaChi,$Email,$SoDienThoai,$avatarUser,$role,$IdTaiKhoan);
                $thongbao = "Cập nhật thành công ";
            }
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/listtaikhoan.php";
            break;   
        case 'thongketaikhoan':
            $listthongketaikhoan = loadthongke_taikhoan();
            include "thongke/thongketaikhoan.php";
            break;
        case 'bieudotaikhoan':
            $listthongketaikhoan = loadthongke_taikhoan();
            include "thongke/bieudotaikhoan.php";  
            break;
        //het taikhoan    
        case 'thongkedanhmuc':
            $thongkedm = loadthongke_danhmuc();
            include 'thongke/thongkedanhmuc.php';
            break;
        case 'bieudodanhmuc':
            $thongkedm = loadthongke_danhmuc();
            include 'thongke/bieudodanhmuc.php';
            break;
        case 'thongkegiohang':
            $thongkegiohang = loadthongke_giohang();
            include 'thongke/thongkegiohang.php';
            break;
        case 'bieudogiohang';
            $thongkegiohang = loadthongke_giohang();
            include 'thongke/bieudogiohang.php';
            break;
        case 'listgiohang':
            $listgiohang = loadthongke_giohang();
            include 'giohang/listgiohang.php';
            break;
        case 'chitietgiohang':
            if (isset($_GET['IdTaiKhoan']) && ($_GET['IdTaiKhoan']) != "") {
                $chitietgiohang = loadall_giohang($_GET["IdTaiKhoan"]);
            }
            include 'giohang/chitietgiohang.php';
            break;
        case 'xoaspgiohang':
            if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                $delete_giohang = delete_sp_giohang($_GET['idsp'], $_GET["IdTaiKhoan"]);
                $chitietgiohang = loadall_giohang($_GET["IdTaiKhoan"]);
                include 'giohang/chitietgiohang.php';
            }
            break;
        case 'xoagiohang':
            if (isset($_GET['IdTaiKhoan']) && $_GET['IdTaiKhoan'] > 0) {
                $delete_giohang = delete_giohang($_GET["IdTaiKhoan"]);
                $listgiohang = loadthongke_giohang();
                include 'giohang/listgiohang.php';
            }
        //het danh mục
        case 'addsp':
            if (isset($_REQUEST['themmoi']) && $_REQUEST['themmoi']) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $soluong = $_POST['soluong'];
                $trangthai = $_POST['trangthai'];
                $anhsp = $_FILES['anhsp']['name'];
                if (empty($tensp) || empty($giasp) || empty($mota) || empty($soluong) || empty($trangthai)) {
                    $thongbao = check_Validate('Vui lòng điền đầy đủ thông tin!');
                } else if (checkSp($tensp)) {
                    $thongbao = check_Validate("Tên sản phẩm đã tồn tại!");
                } elseif (!is_numeric($giasp) || $giasp < 0) {
                    $thongbao = check_Validate('Giá sản phẩm không hợp lệ!');
                } elseif (!is_numeric($soluong) || $soluong < 0) {
                    $thongbao = check_Validate('Số lượng sản phẩm không hợp lệ!');
                } else {
                    $target_dir = '../upload/';
                    $target_file = $target_dir . basename($_FILES['anhsp']['name']);
                    if ($_FILES['anhsp']['size'] > 5 * 1024 * 1024) {
                        $thongbao = check_Validate('Kích thước ảnh quá lớn, vui lòng chọn ảnh khác!');
                    } elseif (move_uploaded_file($_FILES['anhsp']['tmp_name'], $target_file)) {
                        // Thêm sản phẩm sau khi kiểm tra hết các điều kiện
                        them_sanpham($tensp, $giasp, $anhsp, $mota, $iddm, $soluong, $trangthai);
                        $thongbao = 'Thêm thành công';
                    } else {
                        $thongbao = check_Validate('Upload ảnh không thành công');
                    }

                }
            }

            $listdanhmuc = loadall_danhmuc_admin();
            include 'sanpham/add.php';
            break;
        case 'lissp':
            if (isset($_POST['listok']) && $_POST['listok']) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = "";
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include 'sanpham/list.php';
            break;
        case 'xoasp':
            if (isset($_GET['IdSanPham']) && ($_GET['IdSanPham'] > 0)) {
                xoa_sanpham($_GET['IdSanPham']);
            }
            $listsanpham = loadall_sanpham("", 0);
            include 'sanpham/list.php';
            break;
        case 'xoamemsp':
            if(isset($_GET['IdSanPham'])){
                xoamem_sanpham($_GET['IdSanPham']);
            }    
            $listsanpham = loadall_sanpham("", 0);
            include 'sanpham/list.php';
            break;
        case 'suasp':
            if (isset($_GET['IdSanPham']) && ($_GET['IdSanPham'] > 0)) {
                $sanpham = loadone_sanpham($_GET['IdSanPham']);
            }
            $listdanhmuc = loadall_danhmuc();
            include 'sanpham/update.php';
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $soluong = $_POST['soluong'];
                $trangthai = $_POST['trangthai'];
                $anhsp = $_FILES['anhsp']['name'];
                $target_dir = '../upload/';
                $target_file = $target_dir . basename($_FILES['anhsp']['name']);
                move_uploaded_file($_FILES['anhsp']['tmp_name'], $target_file);
                update_sanpham($tensp, $giasp, $anhsp, $mota, $iddm, $soluong, $trangthai, $id);

                $thongbao = 'cap nhap thanh cong';
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();
            include 'sanpham/list.php';
            break;
        case 'dsbl':
            $listbinhluan = loadall_binhluan_admin(0);
            include 'binhluan/list.php';
            break;
        case 'xoabl':
            if (isset($_GET['IdBinhLuan']) && ($_GET['IdBinhLuan'] > 0)) {
                xoa_binhluan($_GET['IdBinhLuan']);
            }
            $listbinhluan = loadall_binhluan_admin(0);
            include 'binhluan/list.php';
            break;
        case 'xoamembl':
            if(isset($_GET['IdBinhLuan'])){
                xoamem_bl($_GET['IdBinhLuan']);
            }    
            $listbinhluan = loadall_binhluan_admin(0);
            include 'binhluan/list.php';
            break;   
        case 'listdonhang':
            $listdonhang = loadthongke_donhang();
            include "donhang/listdonhang.php";
            break;  
        case 'chitietdonhang':
            if (isset($_GET['IdChiTietDonHang']) && ($_GET['IdChiTietDonHang'])) {
                $load_donhang = loadall_dh_sp_tk($_GET['IdChiTietDonHang']);
                include 'donhang/chitiet.php';
            }
            break;
        case 'updatetrangthai':
            if (isset($_POST['capnhat'])) {
                $ttdh = checkstatus_dh($_GET['IdDonHang']);
                $listdonhang = loadthongke_donhang();
                if ($ttdh["TrangThai"] == 4) {
                    $thongbao = "Thao tác của bạn chưa được thực hiện do trạng thái đơn hàng đã thay đổi ";
                    echo "<script>";
                    echo "alert('$thongbao');";
                    echo "</script>";
                    include "donhang/listdonhang.php";
                } else {
                    $luachon = $_POST['luachon'];
                    $id = $_GET['IdDonHang'];
                    $update = update_trangthai($luachon, $id);
                    include "donhang/listdonhang.php";
                }
            }
            break;       
    }

} else {
    include 'home.php';
}
include 'footer.php';
}else {
    echo "bạn không đủ quyền truy cập vào trang này";?>
    <a href="../index.php">Mời bạn quay về trang chủ</a>
<?php }

?>
