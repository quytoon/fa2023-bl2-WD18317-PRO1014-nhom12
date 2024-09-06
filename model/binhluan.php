<?php
function loadall_binhluan($idsp)
{
    $sql = "
    SELECT binhluan.IdBinhLuan, binhluan.NoiDung, taikhoan.TenTaiKhoan, binhluan.NgayBinhLuan , binhluan.DiemDanhGia ,taikhoan.avatarUser FROM `binhluan` 
    LEFT JOIN taikhoan ON binhluan.IdTaiKhoan = taikhoan.IdTaiKhoan
    LEFT JOIN sanpham ON binhluan.IdSanPham = sanpham.IdSanPham
    WHERE sanpham.IdSanPham = $idsp and binhluan.TrangThai = 0;
        ";
    $result = pdo_query($sql);
    return $result;
}

function them_binhluan($IdSanPham, $IdTaiKhoan, $NoiDung, $DiemDanhGia)
{
    $date = date("Y-m-d H:i:s");

    $sql = "INSERT INTO binhluan(IdSanPham, IdTaiKhoan, NoiDung, NgayBinhLuan, DiemDanhGia)
            VALUES('$IdSanPham', '$IdTaiKhoan', '$NoiDung', '$date', '$DiemDanhGia')";
    pdo_execute($sql);
}

function loadall_binhluan_admin($IdSanPham)
{
    $sql = "select * from binhluan where 1";
    if ($IdSanPham > 0) $sql .= " AND IdSanPham='" . $IdSanPham . "'";
    $sql .= " order by IdBinhLuan desc";
    $listbl = pdo_query($sql);
    return $listbl;
}

function xoa_binhluan($IdBinhLuan)
{
    $sql = 'delete from binhluan where IdBinhLuan=' . $IdBinhLuan;
    pdo_execute($sql);
}
//cau truy van xoa mem
function xoamem_bl($IdBinhLuan)
{
    $sql = "UPDATE `binhluan` SET `TrangThai` = 1 WHERE `binhluan`.`IdBinhLuan` = $IdBinhLuan";
    pdo_execute($sql);
}
function capnhat_bl()
{
    $sql = "UPDATE `binhluan` SET `TrangThai` = 0";
    pdo_execute($sql);
}
?>