<?php
function loadall_sanpham($keyw = "", $iddm = 0)
{
    $sql = "SELECT * from sanpham where trangThai = 1";
    // where 1 tức là nó đúng
    if ($keyw != "") {
        $sql .= " and name like '%" . $keyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm ='" . $iddm . "'";
    }
    $sql .= " order by IdSanPham desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function load_chitietsanpham($id)
{
    $sql = "SELECT * FROM sanpham as A JOIN anh_sp as B ON A.IdSanPham = B.IdSanPham 
    JOIN giay_bienthe as C ON c.IdSanPham = a.IdSanPham 
    JOIN sizegiay as D ON c.IdSizeGiay = d.IdSizeGiay 
    JOIN mausac as E ON c.IdMauSac = e.IdMauSac 
    WHERE a.IdSanPham =" . $id;
    $result = pdo_query_one($sql);
    return $result;
}
?>