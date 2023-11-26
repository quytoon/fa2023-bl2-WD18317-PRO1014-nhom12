<?php
function loadall_donhang()
{
    $sql = "select * from `donhang` order by TongTien desc";
    $listdonhang = pdo_query($sql);
    return $listdonhang;
}
?>