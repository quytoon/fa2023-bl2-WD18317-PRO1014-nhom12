<?php

function loadall_donhang($IdDonHang)
{
    $sql = "SELECT donhang.*, COUNT(chitietdonhang.IdDonHang) as soluong
    FROM donhang
    LEFT JOIN chitietdonhang ON donhang.IdDonHang = chitietdonhang.IdDonHang
    GROUP BY donhang.IdDonHang;";
    $load_donhang = pdo_query($sql);
    return $load_donhang;   
}
//load thông tin của đơn hàng được chọn
function loadall_dh_sp_tk($IdDonHang)
{
    $sql = "SELECT * from chitietdonhang as a join sanpham as b on a.IdSanPham = b.IdSanPham 
    join donhang as c on c.IdDonHang = a.IdDonHang 
    WHERE c.IdDonHang = a.IdDonHang";
    $dh = pdo_query($sql);
    return $dh;
}
function load_chitietdonhang($IdDonHang) {
    $sql = "SELECT * FROM donhang as a 
    join chitietdonhang as b on a.IdDonHang =b.IdDonHang 
    join sanpham as c on c.IdSanPham = b.IdSanPham
    WHERE b.IdDonHang = $IdDonHang";
    $result = pdo_query($sql);
    return $result;
   
}
function delete_donhang($IdChiTietDonHang) {
    $sql = 
    "DELETE FROM chitietdonhang WHERE `chitietdonhang`.`IdChiTietDonHang` = $IdChiTietDonHang";
    $result = pdo_query($sql);
    return $result;
}
?>