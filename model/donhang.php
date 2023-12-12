<?php

function loadall_donhang($idtk)
{
    $sql = "SELECT donhang.*, COUNT(chitietdonhang.IdDonHang) as soluong
    FROM donhang
    LEFT JOIN chitietdonhang ON donhang.IdDonHang = chitietdonhang.IdDonHang
    WHERE donhang.IdTaiKhoan = '$idtk'
    GROUP BY donhang.IdDonHang ORDER BY donhang.IdDonHang desc;";
    $load_donhang = pdo_query($sql);
    return $load_donhang;
}
function checkstatus_dh($id){
    $sql = "SELECT TrangThai FROM donhang WHERE IdDonHang = $id";
    $dh = pdo_query_one($sql);
    return $dh;
}
//load thông tin của đơn hàng được chọn
function loadall_dh_sp_tk($IdDonHang)
{
    $sql = "SELECT a.*,b.*,c.*, a.SoLuong as SoLuongChiTiet ,b.Gia*a.SoLuong as Tong 
    from chitietdonhang as a join sanpham as b on a.IdSanPham = b.IdSanPham 
    join donhang as c on c.IdDonHang = a.IdDonHang 
    WHERE c.IdDonHang = $IdDonHang";
    $dh = pdo_query($sql);
    return $dh;
}
function load_chitietdonhang($IdDonHang)
{
    $sql = "SELECT a.SoLuong as sl,a.*,b.*,c.* from chitietdonhang as a JOIN donhang as b on a.IdDonHang=b.IdDonHang
    join sanpham as c on a.IdSanPham=c.IdSanPham
    WHERE a.IdDonHang=$IdDonHang";
    $result = pdo_query($sql);
    return $result;

}
function huy_donhang($IdDonHang)
{
    $sql =
        "UPDATE `donhang` SET `TrangThai` = '4' WHERE `donhang`.`IdDonHang` = $IdDonHang";
    $result = pdo_query($sql);
    return $result;
}
function insert_chitietdonhang($iddh, $idsp, $sl, $gia, $IdMauSac, $IdSizeGiay)
{
    $sql = "insert into chitietdonhang (IdDonHang,IdSanPham,SoLuong,Gia,IdMauSac,IdSizeGiay)
    values ('$iddh','$idsp','$sl','$gia','$IdMauSac','$IdSizeGiay')";
    $result = pdo_query($sql);
    return $result;
}
function update_slsp_huydh($sl, $mau, $size, $idsp)
{
    $sql = "UPDATE giay_bienthe SET SoLuong = SoLuong + $sl WHERE IdMauSac = $mau and IdSizeGiay = $size and IdSanPham = $idsp ";
    pdo_query($sql);
}
?>