<?php 
//Đăng nhập
function dangnhap($TenTaiKhoan,$MatKhau) {
    $sql="SELECT * FROM taikhoan WHERE TenTaiKhoan='$TenTaiKhoan' and MatKhau='$MatKhau'";
    $taikhoan = pdo_query_one($sql);

    if ($taikhoan != false) {
        $_SESSION['TenTaiKhoan'] = $TenTaiKhoan;
    } else {
        return "Thông tin tài khoản sai";
    }
}
//Đăng Ký
function dangky($TenTaiKhoan,$Email,$MatKhau){
    $sql="INSERT INTO `taikhoan` ( `TenTaiKhoan`, `Email`, `MatKhau`) VALUES ( '$TenTaiKhoan', '$Email','$MatKhau') ";
    pdo_execute($sql);
}
//Đăng xuất
function dangxuat() {
    if (isset($_SESSION['TenTaiKhoan'])) {
        unset($_SESSION['TenTaiKhoan']);
    }
}
// Load toàn bộ tài khoản
function loadall_taikhoan()
{
    $sql = "SELECT * FROM `taikhoan`";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
// xóa tài khoản
function delete_taikhoan($IdTaiKhoan) {
    $sql = "DELETE from `taikhoan` where IdTaiKhoan=".$IdTaiKhoan;
    pdo_execute($sql);
}
// thêm tài khoản mới
function insert_taikhoan($TenTaiKhoan,$MatKhau,$HoTen,$DiaChi,$Email,$SoDienThoai,$avatarUser,$role){
    $sql ="INSERT INTO `taikhoan` (`TenTaiKhoan` , `MatKhau` , `HoTen` , `DiaChi` , `Email` , `SoDienThoai` , `avatarUser` , `role`) 
    VALUES ('$TenTaiKhoan', '$MatKhau', '$HoTen', '$DiaChi', '$Email', '$SoDienThoai', '$avatarUser', '$role')";
    pdo_execute($sql);
}
function loadone_taikhoan($IdTaiKhoan)
{
    $sql = "select * from taikhoan where IdTaiKhoan = " . $IdTaiKhoan;
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}
//update thông tin tài khoản
function update_taikhoan($TenTaiKhoan,$MatKhau,$HoTen,$DiaChi,$Email,$SoDienThoai,$avatarUser,$role,$IdTaiKhoan)
{
    $sql = "UPDATE `taikhoan` SET `TenTaiKhoan` = '{$TenTaiKhoan}', `MatKhau` = '{$MatKhau}', `HoTen` = '{$HoTen}', `DiaChi` = '{$DiaChi}', `Email` = '{$Email}', `SoDienThoai` = '{$SoDienThoai}', `avatarUser` = '{$avatarUser}', `role` = '{$role}' WHERE `taikhoan`.`IdTaiKhoan` = $IdTaiKhoan";
    pdo_execute($sql);
}
?>