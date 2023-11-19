<?php
function loadall_binhluan($idsp)
{
    $sql = "
    SELECT binhluan.IdBinhLuan, binhluan.NoiDung, taikhoan.TenTaiKhoan, binhluan.NgayBinhLuan FROM `binhluan` 
    LEFT JOIN taikhoan ON binhluan.IdTaiKhoan = taikhoan.IdTaiKhoan
    LEFT JOIN sanpham ON binhluan.IdSanPham = sanpham.IdSanPham
    WHERE sanpham.IdSanPham = $idsp and binhluan.TrangThai = 0;
        ";
    $result = pdo_query($sql);
    return $result;
}

?>