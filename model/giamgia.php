<?php
function loadall_giamgia()
{
        $sql="SELECT * FROM `giamgia`";
        $listgiamgia = pdo_query($sql);
        return $listgiamgia;
}
function insert_giamgia($tenGiamGia,$soluong,$codeGiamGia,$tienGiamGia)
{
    $sql = "INSERT INTO `giamgia` (`tenGiamGia`, `soluong`, `codeGiamGia`, `tienGiamGia`) VALUES ( '$tenGiamGia', '$soluong', '$codeGiamGia', '$tienGiamGia')";
    pdo_execute($sql);
}
function delete_giamgia($idGiamGia)
{
    $sql = "DELETE FROM giamgia WHERE `idGiamGia` = $idGiamGia";
    pdo_execute($sql);
}
function loadone_giamgia($idGiamGia)
{
    $sql = "select * from giamgia where idGiamGia = " . $idGiamGia;
    $gg = pdo_query_one($sql);
    return $gg;
}
function update_giamgia($tenGiamGia,$soluong,$codeGiamGia,$tienGiamGia,$idGiamGia)
{
    $sql="UPDATE `giamgia` SET `tenGiamGia` = '$tenGiamGia', `soluong` = '$soluong', `codeGiamGia` = '$codeGiamGia',`tienGiamGia`='$tienGiamGia' WHERE `giamgia`.`idGiamGia` = $idGiamGia";
    pdo_execute($sql);
}
// function insert_giamgia($IdTaiKhoan) {
//     $sql = "INSERT into giamgia (`IdTaiKhoan`) 
//     VALUES ('$IdTaiKhoan')";
//     $result = pdo_query($sql);
//     return $result;
// }
// //xóa sản phẩm từ giỏ hàng
// function delete_sp_giohang($IdSanPham, $IdTaiKhoan) {
//     $sql = "DELETE FROM `giohang` 
//     WHERE `IdSanPham` = '$IdSanPham' and `IdTaiKhoan` = '$IdTaiKhoan';";
//     $result = pdo_query($sql);
//     return $result;
// }
?>