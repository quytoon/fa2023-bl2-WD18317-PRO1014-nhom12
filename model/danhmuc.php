<?php
// load toàn bộ danh mục 
function loadall_danhmuc()
{
    $sql = "select * from danhmuc order by idDanhMuc desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function load_dm_home(){
    $sql = "SELECT * FROM danhmuc ORDER BY idDanhMuc LIMIT 4;";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

//load toàn bộ danh mục kèm số lượng sản phẩm trong danh mục
function loadall_danhmuc_admin()
{
    $sql = "SELECT a.*, COUNT(b.iddm) as SoLuong
    FROM danhmuc as a
    LEFT JOIN sanpham as b ON a.idDanhMuc = b.iddm
    GROUP BY a.idDanhMuc;";
    $listdanhmuc = pdo_query($sql);
    return ($listdanhmuc);
}
//thêm mới danh mục
function insert_danhmuc($name)
{
    $sql = "insert into `danhmuc` (`tenDanhMuc`) values  ('$name')";
    pdo_execute($sql);
}
//load thông tin của danh mục được chọn
function loadone_danhmuc($idDanhMuc)
{
    $sql = "select * from danhmuc where idDanhMuc = " . $idDanhMuc;
    $dm = pdo_query_one($sql);
    return $dm;
}
//update thông tin danh mục
function update_danhmuc($name, $id)
{
    $sql = "UPDATE `danhmuc` SET `tenDanhMuc` = '{$name}' WHERE `idDanhMuc` = $id;";
    pdo_execute($sql);
}

//xóa danh mục
function delete_dm($id){
    $sql = "delete from danhmuc where idDanhMuc = " . $id;
    pdo_execute($sql);
}
//cau truy van xoa mem
function xoamem_dm($id)
{
    $sql = "UPDATE `danhmuc` SET `TrangThai` = 1 WHERE `danhmuc`.`idDanhMuc` = $id";
    pdo_execute($sql);
}
?>