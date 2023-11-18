<?php
//load all giỏ hàng
function loadall_giohang($IdTaiKhoan)
{
    $sql = "SELECT * FROM giohang as a join sanpham as b on a.IdSanPham = b.IdSanPham 
    join taikhoan as c on c.IdTaiKhoan = a.IdTaiKhoan 
    WHERE c.IdTaiKhoan = " . $IdTaiKhoan;
    $result = pdo_query($sql);
    return $result;
}
// thêm sản phẩm vào giỏ hàng

function insert_giohang($IdSanPham, $IdTaiKhoan)
{
    $sql = "INSERT into giohang (`IdSanPham`,`IdTaiKhoan`) 
    VALUES ('$IdSanPham','$IdTaiKhoan')";
    $result = pdo_query($sql);
    return $result;
}
function delete_giohang($IdSanPham,$IdTaiKhoan)
{
    $sql = "DELETE FROM `giohang` 
    WHERE `IdSanPham` = '$IdSanPham' and `IdTaiKhoan` = '$IdTaiKhoan';";
    $result = pdo_query($sql);
    return $result;
}
?>