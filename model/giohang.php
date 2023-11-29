<?php
//load all giỏ hàng theo id user
function loadall_giohang($IdTaiKhoan) {
    $sql = "SELECT * FROM giohang as a join sanpham as b on a.IdSanPham = b.IdSanPham 
    join taikhoan as c on c.IdTaiKhoan = a.IdTaiKhoan 
    WHERE c.IdTaiKhoan = ".$IdTaiKhoan;
    $result = pdo_query($sql);
    return $result;
}
// thêm sản phẩm vào giỏ hàng

function insert_giohang($IdSanPham, $IdTaiKhoan) {
    $sql = "INSERT into giohang (`IdSanPham`,`IdTaiKhoan`) 
    VALUES ('$IdSanPham','$IdTaiKhoan')";
    $result = pdo_query($sql);
    return $result;
}
//xóa sản phẩm từ giỏ hàng
function delete_sp_giohang($IdSanPham, $IdTaiKhoan) {
    $sql = "DELETE FROM `giohang` 
    WHERE `IdSanPham` = '$IdSanPham' and `IdTaiKhoan` = '$IdTaiKhoan';";
    $result = pdo_query($sql);
    return $result;
}
function delete_giohang($IdTaiKhoan) {
    $sql = "DELETE FROM `giohang` 
    WHERE `IdTaiKhoan` = '$IdTaiKhoan';";
    $result = pdo_query($sql);
    return $result;
}
function insert_soLuong_gioHang($IdSanPham, $IdTaiKhoan) {
    $sql = "update giohang set SoLuongSp = SoLuongSp + 1 where IdSanPham = $IdSanPham and IdTaiKhoan = $IdTaiKhoan";
    pdo_execute($sql);
}
?>