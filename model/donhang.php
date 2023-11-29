<?php
//$sql = "select * from `donhang` order by TongTien desc";
function loadall_donhang($IdTaiKhoan)
{
    $sql = "SELECT * FROM donhang as a join sanpham as b on a.IdSanPham = b.IdSanPham 
    join taikhoan as c on c.IdTaiKhoan = a.IdTaiKhoan 
    WHERE c.IdTaiKhoan = $IdTaiKhoan";
    $load_donhang = pdo_query($sql);
    return $load_donhang;   
}
?>