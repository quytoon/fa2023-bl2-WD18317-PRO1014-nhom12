<?php
// Hàm để sinh thông báo màu đỏ
function check_Validate($message) {
    return '<div class="alert alert-danger" role="alert">' . $message . '</div>';
}

// Sử dụng hàm để sinh ra thông báo
function checkTk($TenTaiKhoan)
{
    $sql = "SELECT * FROM taikhoan WHERE TenTaiKhoan = '$TenTaiKhoan'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkDm($tenDanhMuc) {
    $sql = "SELECT * FROM danhmuc WHERE tenDanhMuc = '$tenDanhMuc'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkSp($TenSanPham) {
    $sql = "SELECT * FROM danhmuc WHERE tenDanhMuc = '$TenSanPham'";
    $sp = pdo_query_one($sql);
    return $sp;
}
?>