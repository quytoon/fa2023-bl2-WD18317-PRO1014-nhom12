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

function san_pham_all()
{
    $sql = "SELECT * FROM sanpham JOIN danhmuc ON sanpham.iddm = danhmuc.idDanhMuc;";
    return pdo_query($sql);
}

function loadall_sp_dm($iddm)
{
    $sql = "select * from danhmuc as a join sanpham as b on a.idDanhMuc = b.iddm where a.idDanhMuc =" . $iddm;
    $sp = pdo_query($sql);
    return $sp;
}

function xoa_sanpham($IdSanPham)
{
    $sql = 'delete from sanpham where IdSanPham=' . $IdSanPham;
    pdo_execute($sql);
}

//cau truy van xoa mem
function xoamem_sanpham($IdSanPham)
{
    $sql = "UPDATE `sanpham` set `trangthai` = 0 where `sanpham`.`IdSanPham` = $IdSanPham";
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

function loadall_anhsp($id)
{
    $sql = "select urlAnh from anh_sp where IdSanPham = " . $id;
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

function update_thuvienanh($id, $thuvienanh)
{
    $sql = "insert into anh_sp (IdSanPham,urlAnh) values ('" . $id . "','" . $thuvienanh . "')";
    pdo_execute($sql);
}

function xoa_anhsp($id, $anh)
{
    $sql = "delete from anh_sp where IdSanPham = '" . $id . "' and urlAnh = '" . $anh . "'";
    pdo_execute($sql);
}

function delete_sp_dm($id)
{
    $sql = "DELETE FROM sanpham WHERE `sanpham`.`iddm` = " . $id;
    pdo_execute($sql);
}

function delete_sp_gh($IdSanPham)
{
    $sql = 'delete from giohang where IdSanPham=' . $IdSanPham;
    pdo_execute($sql);
}

function delete_sp_bl($IdSanPham)
{
    $sql = 'delete from binhluan where IdSanPham=' . $IdSanPham;
    pdo_execute($sql);
}

function insert_bienthe($IdMauSac, $IdSizeGiay, $IdSanPham, $SoLuong)
{
    $sql = "INSERT INTO giay_bienthe(IdMauSac, IdSizeGiay, IdSanPham, SoLuong) 
            VALUES (?, ?, ?, ?)";
    pdo_execute($sql, $IdMauSac, $IdSizeGiay, $IdSanPham, $SoLuong);
    // You might return some information if needed
    // return $someValue;
}


function list_bienthe($IdSanPham)
{
    $sql = "SELECT giay_bienthe.*, sanpham.*, sizegiay.Size, mausac.TenMauSac, giay_bienthe.SoLuong 
        FROM giay_bienthe 
        JOIN sanpham ON giay_bienthe.IdSanPham = sanpham.IdSanPham 
        JOIN sizegiay ON giay_bienthe.IdSizeGiay = sizegiay.IdSizeGiay 
        JOIN mausac ON giay_bienthe.IdMauSac = mausac.IdMauSac 
        WHERE giay_bienthe.IdSanPham = ?
        ORDER BY giay_bienthe.IdGiayBienThe DESC";

    return pdo_query($sql, $IdSanPham);
}


function sl_bienthe($IdSanPham)
{
    $sql = "SELECT SUM(giay_bienthe.SoLuong ) FROM giay_bienthe WHERE IdSanPham = ? ";
    return pdo_query_value($sql, $IdSanPham);
}

function delete_spdonhang($sl, $id)
{
    $sql = "UPDATE sanpham SET sanpham.SoLuong = sanpham.SoLuong - '$sl' WHERE sanpham.IdSanPham = '$id'";
    pdo_execute($sql);
}

function delete_spbienthe($sl, $id, $mau, $size)
{
    $sql = "UPDATE giay_bienthe SET SoLuong = SoLuong - $sl WHERE IdSanPham = $id AND IdMauSac = $mau AND IdSizeGiay = $size ";
    pdo_execute($sql);
}

function xoa_bienthe($IdGiayBienThe)
{
    $sql = "delete from giay_bienthe where `giay_bienthe`.`IdGiaybienThe` = '$IdGiayBienThe'";
    pdo_execute($sql);
}

function load_spbt_one($IdGiayBienThe)
{
    $sql = "SELECT giay_bienthe.*, sanpham.*, sizegiay.Size, mausac.TenMauSac, giay_bienthe.SoLuong 
        FROM giay_bienthe 
        JOIN sanpham ON giay_bienthe.IdSanPham = sanpham.IdSanPham 
        JOIN sizegiay ON giay_bienthe.IdSizeGiay = sizegiay.IdSizeGiay 
        JOIN mausac ON giay_bienthe.IdMauSac = mausac.IdMauSac 
WHERE giay_bienthe.IdGiayBienThe = ?;";
    return pdo_query_one($sql, $IdGiayBienThe);
}

function update_bienthe($IdGiayBienThe, $IdSanPham, $IdSizeGiay, $IdMauSac, $SoLuong)
{
    $sql = "UPDATE giay_bienthe SET IdSanPham=?,IdSizeGiay=?,IdMauSac=?,SoLuong=? WHERE IdGiayBienThe = ?";
    pdo_execute($sql, $IdSanPham, $IdSizeGiay, $IdMauSac, $SoLuong, $IdGiayBienThe);
}

function tim_sp_id($IdSanPham, $IdSizeGiay, $IdMauSac)
{
    $sql = "SELECT IdGiayBienThe FROM giay_bienthe WHERE IdSanPham = ? AND IdSizeGiay = ? AND IdMauSac = ?";
    return pdo_query_one($sql, $IdSanPham, $IdSizeGiay, $IdMauSac);
}

function capnhat_sp()
{
    $sql = "UPDATE `sanpham` SET `TrangThai` = 1";
    pdo_execute($sql);
}
function update_luotmua_sp($sl, $idsp)
{
    $sql = "UPDATE sanpham SET luotmua = luotmua + $sl WHERE IdSanPham = $idsp ";
    pdo_execute($sql);
}
function update_luotmua_bienthe($sl, $idsp, $mau, $size)
{
    $sql = "UPDATE giay_bienthe SET luotmua = luotmua + $sl WHERE IdSanPham = $idsp AND IdMauSac = $mau and IdSizeGiay = $size ";
    pdo_execute($sql);
}
function checkslsp($id, $mau, $size)
{
    $sql = "SELECT SoLuong FROM giay_bienthe WHERE IdSanPham = $id  and IdSizeGiay = $mau and IdMauSac = $size ";
    return pdo_query_one($sql);
}
function checkslsp_gh($idtk, $idsp, $mau, $size)
{
    $sql = "SELECT SoLuongSp FROM giohang WHERE IdTaiKhoan = $idtk and IdSanPham = $idsp  and IdSizeGiay = $mau and IdMauSac = $size ";
    return pdo_query_one($sql);
}
?>