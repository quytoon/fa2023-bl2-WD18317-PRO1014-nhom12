<?php
function loadall_giamgia()
{
        $sql="SELECT * FROM `giamgia`";
        $listgiamgia = pdo_query($sql);
        return $listgiamgia;
}
function insert_giamgia($tenGiamGia,$soluong,$codeGiamGia)
{
    $sql = "INSERT INTO `giamgia` (`tenGiamGia`, `soluong`, `codeGiamGia`) VALUES ( '$tenGiamGia', '$soluong', '$codeGiamGia')";
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
function update_giamgia($tenGiamGia,$soluong,$codeGiamGia,$idGiamGia)
{
    $sql="UPDATE `giamgia` SET `tenGiamGia` = '$tenGiamGia', `soluong` = '$soluong', `codeGiamGia` = '$codeGiamGia' WHERE `giamgia`.`idGiamGia` = $idGiamGia";
    pdo_execute($sql);
}
?>