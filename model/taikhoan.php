<?php 
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
?>