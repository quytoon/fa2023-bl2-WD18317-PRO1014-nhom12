<?php
//load all giỏ hàng theo id user
//function loadall_giohang($IdTaiKhoan) {
//    $sql = "SELECT b.Gia * a.SoLuongSp AS tong_gia,
//    SUM(b.Gia * a.SoLuongSp) OVER () AS tong_bill,
//    SUM(a.SoLuongSp ) OVER () AS tong_sl,a.*,b.*,c.*
//    FROM giohang AS a JOIN sanpham AS b ON a.IdSanPham = b.IdSanPham
//    JOIN taikhoan AS c ON c.IdTaiKhoan = a.IdTaiKhoan
//    WHERE c.IdTaiKhoan =".$IdTaiKhoan;
//    $result = pdo_query($sql);
//    return $result;
//}


function loadall_giohang($IdTaiKhoan)
{
    $sql = "SELECT
    b.Gia * a.SoLuongSp AS tong_gia,
    SUM(b.Gia * a.SoLuongSp) OVER () AS tong_bill,
    SUM(a.SoLuongSp) OVER () AS tong_sl,
    a.*,
    b.*,
    c.*,
    ms.TenMauSac,
    sg.Size
FROM
    giohang AS a
JOIN
    sanpham AS b ON a.IdSanPham = b.IdSanPham
JOIN
    taikhoan AS c ON c.IdTaiKhoan = a.IdTaiKhoan
LEFT JOIN
    mausac AS ms ON a.IdMauSac = ms.IdMauSac
LEFT JOIN
    sizegiay AS sg ON a.IdSizeGiay = sg.IdSizeGiay
WHERE
    c.IdTaiKhoan = $IdTaiKhoan
"; // Group by the primary key of giohang to avoid duplicate rows

    $result = pdo_query($sql);
    return $result;
}


function insert_giohang($IdSanPham, $IdTaiKhoan, $IdMauSac, $IdSizeGiay, $SoLuongSp)
{
    $sql = "INSERT into giohang (`IdSanPham`,`IdTaiKhoan`,`IdMauSac`,`IdSizeGiay`,`SoLuongSp`) 
    VALUES ('$IdSanPham','$IdTaiKhoan','$IdMauSac','$IdSizeGiay','$SoLuongSp')";
    $result = pdo_query($sql);
    return $result;
}

//xóa sản phẩm từ giỏ hàng
function delete_sp_giohang($IdSanPham, $IdTaiKhoan, $IdSizeGiay, $IdMauSac)
{
    $sql = "DELETE FROM `giohang` 
    WHERE `IdSanPham` = '$IdSanPham' and `IdTaiKhoan` = '$IdTaiKhoan' and `IdSizeGiay` = '$IdSizeGiay' and `IdMauSac` = '$IdMauSac'";
    $result = pdo_query($sql);
    return $result;
}

function delete_giohang($IdTaiKhoan)
{
    $sql = "DELETE FROM `giohang` 
    WHERE `IdTaiKhoan` = '$IdTaiKhoan';";
    $result = pdo_query($sql);
    return $result;
}

function insert_soLuong_gioHang($IdSanPham, $IdTaiKhoan, $SoLuong, $IdSizeGiay, $IdMauSac)
{
    $sql = "update giohang set SoLuongSp = SoLuongSp + $SoLuong where IdSanPham = $IdSanPham and IdTaiKhoan = $IdTaiKhoan and `IdSizeGiay` = '$IdSizeGiay' and `IdMauSac` = '$IdMauSac'";
    pdo_execute($sql);
}

function demsoluong_giohang($IdSanPham)
{
    $sql = "SELECT SUM(SoLuongSp) as soluong FROM giohang WHERE IdTaiKhoan = $IdSanPham";
    $result = pdo_query_one($sql);
    return $result;
}

function insert_donhang($ngay, $tien, $id, $sl, $diachi, $hoten, $sdt, $email, $iddh)
{
    if ($iddh != "") {
        $sql = "INSERT INTO donhang (NgayDatHang,TongTien,IdTaiKhoan,SoLuongSp,DiaChiDat,HoVaTen,SoDienThoai,Email,IdDonHang) 
    VALUES ('$ngay','$tien','$id','$sl','$diachi','$hoten','$sdt','$email','$iddh')";
    } else {
        $sql = "INSERT INTO donhang (NgayDatHang,TongTien,IdTaiKhoan,SoLuongSp,DiaChiDat,HoVaTen,SoDienThoai,Email) 
        VALUES ('$ngay','$tien','$id','$sl','$diachi','$hoten','$sdt','$email')";
    }
    $result = pdo_query($sql);
    return $result;
}

function xoagiohang($id)
{
    $sql = "delete from giohang where IdTaiKhoan = $id";
    $result = pdo_query($sql);
    return $result;
}

function update_giohang($sl, $idsp, $idtk, $idmau, $idsize)
{
    $sql = "update giohang set SoLuongSp = $sl where IdSanPham = $idsp and IdTaiKhoan = $idtk and IdMauSac = $idmau and IdSizeGiay = $idsize";
    pdo_execute($sql);
}

?>