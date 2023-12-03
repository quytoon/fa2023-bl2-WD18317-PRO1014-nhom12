/<a href="index.php?act=listgiamgia">Quản Lý giảm giá</a></li>/<a href="index.php?act=updategiamgia&idGiamGia=<?= $_GET['idGiamGia'] ?>">Sửa mã giảm giá</a></li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Cập nhật mã giảm giá
    </div>
    <div class="card-body">
        <form action="index.php?act=suagiamgia" method="POST">
            <!-- Tên sản phẩm -->
            <div class="form-group">
                <?php if (is_array($chitietgiamgia)) {
                    extract($chitietgiamgia);
                } ?>
                <input type="text" name="maloai" value="<?php if (isset($idGiamGia) && ($idGiamGia > 0))
                    echo $idGiamGia; ?>" disabled>
                <label for="tenGiamGia">Tên mã giảm giá:</label>
                <input type="text" class="form-control" id="tenGiamGia" placeholder="Nhập tên mã giảm giá"
                    name="tenGiamGia" value="<?php if (isset($tenGiamGia) && ($tenGiamGia != ""))
                        echo $tenGiamGia; ?>">
                <label for="soluong">Số lượng:</label>
                <input type="text" class="form-control" id="soluong" placeholder="Nhập số lượng"
                    name="soluong" value="<?php if (isset($soluong) && ($soluong != ""))
                        echo $soluong; ?>">
                <label for="codeGiamGia">Code mã giảm giá:</label>
                <input type="text" class="form-control" id="codeGiamGia" placeholder="Nhập code mã giảm giá"
                    name="codeGiamGia" value="<?php if (isset($codeGiamGia) && ($codeGiamGia != ""))
                        echo $codeGiamGia; ?>"> 
                <label for="tienGiamGia">Tiền giảm giá:</label>
                <input type="text" class="form-control" id="tienGiamGia" placeholder="Nhập tiền giảm giá"
                    name="tienGiamGia" value="<?php if (isset($tienGiamGia) && ($tienGiamGia != ""))
                        echo $tienGiamGia; ?>">                 
            </div>
            <input type="hidden" name="idGiamGia" value="<?php if (isset($idGiamGia) && ($idGiamGia > 0))
                            echo $idGiamGia; ?>"> 
            <!-- Nút lưu -->
            <input class="btn btn-primary my-1" type="submit" name="capnhat" value="CẬP NHẬT">
            <input type="reset" class="btn btn-primary my-1" value="Nhập lại">
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo "<br>" . $thongbao;
            ?>
        </form>
    </div>
</div>
