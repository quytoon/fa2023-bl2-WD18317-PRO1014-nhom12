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
include '../global.php';
include '../model/sanpham.php';
include '../model/binhluan.php';
include '../model/validate.php';
include '../model/donhang.php';
include '../model/giamgia.php';
//include '../model/'
if (isset($_SESSION['TenTaiKhoan']) && ($_SESSION['TenTaiKhoan']['role'] == 1)) {
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'adddanhmuc':
                if (isset($_POST['themDanhMuc']) && ($_POST['themDanhMuc'])) {
                    $name = $_POST['tenDanhMuc'];


                    if (empty(trim($name))) {
                        $thongbao = "Tên danh mục không được để trống";
                    } else if (checkDm($name)) {
                        $thongbao = check_Validate("Tên danh mục đã tồn tại!");
                    } else {
                        insert_danhmuc($name);
                        $thongbao = "Thêm danh mục thành công";
                    }
                }

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
                    delete_sp_dm($_GET['idDanhMuc']);
                    delete_dm($_GET['idDanhMuc']);
                }
                $listdanhmuc = loadall_danhmuc_admin();
                include "danhmuc/listdanhmuc.php";
                break;
            case 'xoamemdm':
                if (isset($_GET['idDanhMuc'])) {
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
                if (isset($_GET['IdTaiKhoan']) && ($_GET['IdTaiKhoan'] > 0)) {
                    delete_taikhoan($_GET['IdTaiKhoan']);
                }
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/listtaikhoan.php";
                break;
            case 'addtaikhoan':
                if (isset($_REQUEST['themtaikhoan']) && ($_REQUEST['themtaikhoan'])) {
                    $TenTaiKhoan = trim($_POST['TenTaiKhoan']);
                    $MatKhau = trim($_POST['MatKhau']);
                    $HoTen = trim($_POST['HoTen']);
                    $DiaChi = trim($_POST['DiaChi']);
                    $Email = trim($_POST['Email']);
                    $SoDienThoai = trim($_POST['SoDienThoai']);
                    $role = trim($_POST['role']);
                    $avatarUser = $_FILES['avatarUser']['name'];
                    if (empty($TenTaiKhoan) || empty($MatKhau) || empty($HoTen) || empty($DiaChi) || empty($Email) || empty($SoDienThoai) || empty($role)) {
                        $thongbao = check_Validate("Vui lòng điền đầy đủ thông tin!");
                    } else if (checkTk($TenTaiKhoan)) {
                        $thongbao = check_Validate("Tên tài khoản đã tồn tại!");
                    } else {
                        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
                            $thongbao = check_Validate("Định dạng email không hợp lệ!");
                        } else {
                            if (!is_numeric($SoDienThoai)) {
                                $thongbao = check_Validate("Số điện thoại phải là số!");
                            } else {

                                $target_dir = "../upload/";
                                $target_file = $target_dir . basename($_FILES['avatarUser']['name']);
                                if (move_uploaded_file($_FILES['avatarUser']['tmp_name'], $target_file)) {
                                    insert_taikhoan($TenTaiKhoan, $MatKhau, $HoTen, $DiaChi, $Email, $SoDienThoai, $avatarUser, $role);
                                    $thongbao = check_Validate("Thêm thành công");
                                } else {
                                    $thongbao = check_Validate("Upload ảnh không thành công");
                                }
                            }
                        }
                        // insert_taikhoan($TenTaiKhoan, $MatKhau, $HoTen, $DiaChi, $Email, $SoDienThoai, $avatarUser, $role);
                        $thongbao = "Thêm thành công";
                    }
                }
                include 'taikhoan/addtaikhoan.php';
                break;
            case 'updatetaikhoan':
                if (isset($_GET['IdTaiKhoan']) && ($_GET['IdTaiKhoan']) > 0) {
                    $taikhoan = loadone_taikhoan($_GET['IdTaiKhoan']);
                }
                include 'taikhoan/updatetaikhoan.php';
                break;
            case 'suataikhoan':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $TenTaiKhoan = $_POST['TenTaiKhoan'];
                    $IdTaiKhoan = $_POST['IdTaiKhoan'];
                    $MatKhau = $_POST['MatKhau'];
                    $HoTen = $_POST['HoTen'];
                    $DiaChi = $_POST['DiaChi'];
                    $Email = $_POST['Email'];
                    $SoDienThoai = $_POST['SoDienThoai'];
                    $role = $_POST['role'];
                    $avatarUser = $_FILES['avatarUser']['name'];
                    $target_dir = '../upload/';
                    $target_file = $target_dir . basename($_FILES['avatarUser']['name']);
                    move_uploaded_file($_FILES['avatarUser']['tmp_name'], $target_file);
                    update_taikhoan($TenTaiKhoan, $MatKhau, $HoTen, $DiaChi, $Email, $SoDienThoai, $avatarUser, $role, $IdTaiKhoan);
                    $thongbao = "Cập nhật thành công ";
                }
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/listtaikhoan.php";
                break;
            case 'xoamemtaikhoan':
                if (isset($_GET['IdTaiKhoan'])) {
                    xoamemtaikhoan($_GET['IdTaiKhoan']);
                }
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/listtaikhoan.php";
                break;
            case 'thongketaikhoan':
                $listthongketaikhoan = loadthongke_taikhoan();
                include "thongke/thongketaikhoan.php";
                break;

            case 'thongkesanpham':
                $thongkesp = loadthongke_sanpham();
                include "thongke/thongkesanpham.php";
                break;
            case 'bieudosanpham':
                $thongkesp = loadthongke_sanpham();
                include "thongke/bieudosanpham.php";
                break;

            case 'bieudotaikhoan':
                $listthongketaikhoan = loadthongke_taikhoan();
                include "thongke/bieudotaikhoan.php";
                break;
            //het taikhoan    
            case 'listdonhang':
                $listdonhang = loadthongke_donhang();
                include "donhang/listdonhang.php";
                break;
            case 'thongkedonhang':
                $listthongkedonhang = loadthongke_donhang();
                include "thongke/thongkedonhang.php";
                break;
            case 'thongkedanhmuc':
                $thongkedm = loadthongke_danhmuc();
                include 'thongke/thongkedanhmuc.php';
                break;
            case 'bieudodanhmuc':
                $thongkedm = loadthongke_danhmuc();
                include 'thongke/bieudodanhmuc.php';
                break;
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
                $listsp = sl_bienthe(0);
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = san_pham_all();
                include 'sanpham/list.php';
                break;
            case 'capnhatsp':
                capnhat_sp();
                $listsp = sl_bienthe(0);
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = san_pham_all();
            case 'xoasp':
                if (isset($_GET['IdSanPham']) && ($_GET['IdSanPham'] > 0)) {
                    delete_sp_bl($_GET['IdSanPham']);
                    delete_sp_gh($_GET['IdSanPham']);
                    xoa_sanpham($_GET['IdSanPham']);

                }
                $listsanpham = loadall_sanpham("", 0);
                include 'sanpham/list.php';
                break;
            case 'xoamemsp':
                if (isset($_GET['IdSanPham'])) {
                    xoamem_sanpham($_GET['IdSanPham']);
                }
                $listsanpham = loadall_sanpham("", 0);
                include 'sanpham/list.php';
                break;
            case 'suasp':
                if (isset($_GET['IdSanPham']) && ($_GET['IdSanPham'] > 0)) {
                    $sanpham = loadone_sanpham($_GET['IdSanPham']);
                }
                $listanhsp = loadall_anhsp($_GET['IdSanPham']);
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
                    $thuvienanh = $_FILES['thuvienanh']['name'];
                    $fileTmpNames = $_FILES['thuvienanh']['tmp_name'];

                    $target_dir = '../upload/';
                    $target_file = $target_dir . basename($_FILES['anhsp']['name']);
                    foreach ($thuvienanh as $key => $value) {
                        $target_file1 = $target_dir . basename($value);
                        move_uploaded_file($fileTmpNames[$key], $target_file1);
                        update_thuvienanh($_POST['id'], $value);
                    }
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
                if (isset($_GET['IdBinhLuan'])) {
                    xoamem_bl($_GET['IdBinhLuan']);
                }
                $listbinhluan = loadall_binhluan_admin(0);
                include 'binhluan/list.php';
                break;
            case 'capnhatbl':
                capnhat_bl();
                $listbinhluan = loadall_binhluan_admin(0);
                include 'binhluan/list.php';
                break;
            case 'xoaanhsp':
                if (isset($_GET['IdSanPham']) && ($_GET['IdSanPham'] > 0)) {
                    xoa_anhsp($_GET['IdSanPham'], $_GET['urlanh']);
                    $sanpham = loadone_sanpham($_GET['IdSanPham']);
                }
                $listanhsp = loadall_anhsp($_GET['IdSanPham']);
                $listdanhmuc = loadall_danhmuc();
                include 'sanpham/update.php';
                break;
            case 'chitietdanhmuc':
                if (isset($_GET['idDanhMuc']) && ($_GET['idDanhMuc'])) {
                    $loadall_sp_dm = loadall_sp_dm($_GET['idDanhMuc']);
                    include 'danhmuc/chitiet.php';
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
            case 'chitietdonhang':
                if (isset($_GET['IdChiTietDonHang']) && ($_GET['IdChiTietDonHang'])) {
                    $load_donhang = loadall_dh_sp_tk($_GET['IdChiTietDonHang']);
                    include 'donhang/chitiet.php';
                }
                break;
            case 'addspbienthe':
                if (isset($_POST['addspbienthe']) && ($_POST['addspbienthe'])) {
                    $IdSanPham = $_REQUEST['IdSanPham'];
                    $SoLuong = $_POST['SoLuong'];
                    $IdSizeGiay = $_POST['IdSizeGiay'];
                    $IdMauSac = $_POST['IdMauSac'];

                    if (empty($IdSanPham) || empty($IdSizeGiay) || empty($IdMauSac) || empty($SoLuong)) {
                        $thongbao = check_Validate("Vui lòng nhập đầy đủ thông tin");
                    } else {
                        $IdSizeGiay = trim($IdSizeGiay);
                        $IdMauSac = trim($IdMauSac);
                        $existingRecord = checkSpBt($IdSanPham, $IdSizeGiay, $IdMauSac);
                        if ($existingRecord) {
                            $thongbao = check_Validate("Size Và Màu đã tồn tại ");
                        } else {
                            insert_bienthe($IdMauSac, $IdSizeGiay, $IdSanPham, $SoLuong);
                            $thongbao = "Them Thanh cong ";
                        }
                    }
                }
                $listsanpham = san_pham_all();
                $listsize = loadall_size();
                $listmau = loadall_mausac();
                include "sanpham/addspbienthe.php";
                break;

            case 'listspbienthe':
                $listspbienthe = list_bienthe($_GET['IdSanPham']);
                include 'sanpham/listspbienthe.php';
                break;

            case 'listgiamgia':
                $listgiamgia = loadall_giamgia();
                include 'giamgia/listgiamgia.php';
                break;
            case 'addgiamgia':
                if (isset($_POST['themgiamgia']) && ($_POST['themgiamgia'])) {
                    $tenGiamGia = $_POST['tenGiamGia'];
                    $soluong = $_POST['soluong'];
                    $codeGiamGia = $_POST['codeGiamGia'];
                    $tienGiamGia = $_POST['tienGiamGia'];
                    insert_giamgia($tenGiamGia, $soluong, $codeGiamGia, $tienGiamGia);
                    $thongbao = "Thêm Thành công ";
                }
                $listgiamgia = loadall_giamgia();
                include 'giamgia/addgiamgia.php';
                break;
            case 'xoagiamgia':
                if (isset($_GET['idGiamGia']) && ($_GET['idGiamGia'] > 0)) {
                    delete_giamgia($_GET['idGiamGia']);
                }
                $listgiamgia = loadall_giamgia();
                include 'giamgia/listgiamgia.php';
                break;
            case 'updategiamgia':
                if (isset($_GET['idGiamGia']) && ($_GET['idGiamGia']) > 0) {
                    $chitietgiamgia = loadone_giamgia($_GET['idGiamGia']);
                }
                include 'giamgia/updategiamgia.php';
                break;
            case 'suagiamgia':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $tenGiamGia = $_POST['tenGiamGia'];
                    $soluong = $_POST['soluong'];
                    $codeGiamGia = $_POST['codeGiamGia'];
                    $tienGiamGia = $_POST['tienGiamGia'];
                    $idGiamGia = $_POST['idGiamGia'];
                    update_giamgia($tenGiamGia, $soluong, $codeGiamGia, $tienGiamGia, $idGiamGia);
                    $thongbao = "Cập nhật thành công ";
                }
                $listgiamgia = loadall_giamgia();
                include "giamgia/listgiamgia.php";
                break;

            case 'xoabienthe':
                if (isset($_GET['IdGiayBienThe'])) {
                    xoa_bienthe($_GET['IdGiayBienThe']);
                }
                $listspbienthe = list_bienthe($_GET['IdGiayBienThe']);
                include 'sanpham/listspbienthe.php';
                break;
            case 'suabienthe':
                if (isset($_GET['IdGiayBienThe']) && ($_GET['IdGiayBienThe'] > 0)) {
                    $loadspbtone = load_spbt_one($_GET['IdGiayBienThe']);
                    $listsize = loadall_size();
                    $listmau = loadall_mausac();

                }
                include 'sanpham/updatespbienthe.php';
                break;
            case 'updatespbienthe':
                if (isset($_POST['updatespbienthe']) && ($_POST['updatespbienthe'])) {
                    $IdGiayBienThe = $_POST['IdGiayBienThe'];
                    $IdSanPham = $_REQUEST['IdSanPham'];
                    $SoLuong = $_POST['SoLuong'];
                    $IdSizeGiay = $_POST['IdSizeGiay'];
                    $IdMauSac = $_POST['IdMauSac'];
                    update_bienthe($IdGiayBienThe, $IdSanPham, $IdSizeGiay, $IdMauSac, $SoLuong);
                }
                $listsanpham = san_pham_all();
                $listsize = loadall_size();
                $listmau = loadall_mausac();

                break;
        }

    } else {
        include 'home.php';
    }
    include 'footer.php';
} else {
    echo "bạn không đủ quyền truy cập vào trang này"; ?>
    <a href="../index.php">Mời bạn quay về trang chủ</a>
<?php }

?>