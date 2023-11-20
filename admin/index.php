<?php
include 'header.php';
include '../model/pdo.php';
include '../model/danhmuc.php';
include '../model/taikhoan.php';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddanhmuc':
            if (isset($_POST['themDanhMuc']) && ($_POST['themDanhMuc'])) {
                $name = $_POST['tenDanhMuc'];
                insert_danhmuc($name);
                $thongbao = "Thêm thành công";
            }
            ;
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
                insert_taikhoan($TenTaiKhoan,$MatKhau,$HoTen,$DiaChi,$Email,$SoDienThoai,$avatarUser,$role,$IdTaiKhoan);
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
    }
} else {
    include 'home.php';
}
include 'footer.php';