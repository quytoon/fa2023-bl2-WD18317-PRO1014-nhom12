<?php
include "view/header.php";
include "view/home.php";
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "global.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "sanpham":
            if (isset($_POST['keyword']) && $_POST['keyword'] != 0) {
                $kyw = $_POST['keyword'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $dsdm = loadall_danhmuc();
            include "view/sanpham.php";
            break;
        case "chitietsanpham":
            if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                $sanpham = load_chitietsanpham($_GET['idsp']);
                // $sanphamcl = load_sanpham_cungloai($_GET['idsp'], $sanpham['iddm']);
                // $binhluan = loadall_binhluan($_GET['idsp']);
                include "view/chitietsanpham.php";
            } else {
                include "view/home.php";
            }
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
?>