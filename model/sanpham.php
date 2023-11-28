<?php
function loadall_sanpham($keyw = "", $iddm = 0)
{
    $sql = "SELECT * from sanpham where trangThai = 1";
    // where 1 tức là nó đúng
    if ($keyw != "") {
        $sql .= " and TenSanPham like '%" . $keyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm ='" . $iddm . "'";
    }
    $sql .= " order by IdSanPham desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_top10()
{
    $sql = "select * from sanpham where 1 order by luotxem desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_view()
{
    $sql = "select * from sanpham where 1 order by IdSanPham desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function xoa_sanpham($IdSanPham)
{
    $sql = 'delete from sanpham where IdSanPham=' . $IdSanPham;
    pdo_execute($sql);
}
function loadone_sanpham($IdSanPham)
{
    $sql = "select * from sanpham where IdSanPham=" . $IdSanPham;
    $sp = pdo_query_one($sql);
    return $sp;
}
function loadall_sanpham_home()
{
    $sql = "select * from sanpham where 1 order by IdSanPham desc limit 0,8";


    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function them_sanpham($tensp, $giasp, $anhsp, $mota, $iddm, $soluong, $trangthai)
{

    $sql = "INSERT INTO sanpham (TenSanPham, Gia, img, MoTa, iddm, SoLuong, trangThai) 
            VALUES ('$tensp', $giasp, '$anhsp', '$mota', '$iddm', '$soluong', '$trangthai')";

    pdo_execute($sql);

}


//
//function load_chitietsanpham($id)
//{
//    $sql = "SELECT * FROM sanpham as A JOIN anh_sp as B ON A.IdSanPham = B.IdSanPham
//    JOIN giay_bienthe as C ON c.IdSanPham = a.IdSanPham
//    JOIN sizegiay as D ON c.IdSizeGiay = d.IdSizeGiay
//    JOIN mausac as E ON c.IdMauSac = e.IdMauSac
//    WHERE a.IdSanPham =" . $id;
//    $result = pdo_query_one($sql);
//    return $result;
//}
function load_chitietsanpham($id)
{
    $sql = "SELECT * FROM sanpham 
    WHERE IdSanPham =" . $id;
    $result = pdo_query_one($sql);
    return $result;
}
function loadall_mausac()
{
    $sql = "select * from mausac";
    $result = pdo_query($sql);
    return $result;
}

function loadall_size()
{
    $sql = "select * from sizegiay";
    $result = pdo_query($sql);
    return $result;
}

function load_sanpham_cungloai($id, $iddm)
{
    $sql = "select * from sanpham where iddm = $iddm and IdSanPham <> $id";
    $result = pdo_query($sql);
    return $result;
}
function update_sanpham($tensp, $giasp, $anhsp, $mota, $iddm, $soluong, $trangthai, $id)
{
    if ($anhsp != "")
        $sql = "update sanpham set TenSanPham ='" . $tensp . "',Gia ='" . $giasp . "',img ='" . $anhsp . "',MoTa ='" . $mota . "',iddm ='" . $iddm . "',SoLuong ='" . $soluong . "',trangThai ='" . $trangthai . "' where IdSanPham=" . $id;
    else
        $sql = "update sanpham set TenSanPham ='" . $tensp . "',Gia ='" . $giasp . "',MoTa ='" . $mota . "',iddm ='" . $iddm . "',SoLuong ='" . $soluong . "',trangThai ='" . $trangthai . "' where IdSanPham=" . $id;
    pdo_execute($sql);
}

?>