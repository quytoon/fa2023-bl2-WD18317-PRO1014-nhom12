/<a href="index.php?act=updatedanhmuc&idDanhMuc=<?= $_GET['idDanhMuc'] ?>">Sửa danh mục</a></li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Cập nhật danh mục
    </div>
    <div class="card-body">
        <form action="index.php?act=suadanhmuc" method="POST">
            <!-- Tên sản phẩm -->
            <div class="form-group">
                <?php if (is_array($chitietdm)) {
                    extract($chitietdm);
                } ?>
                <input type="text" name="maloai" value="<?php if (isset($idDanhMuc) && ($idDanhMuc > 0))
                    echo $idDanhMuc; ?>" disabled>
                <label for="tenDanhMuc">Tên danh mục:</label>
                <input type="text" class="form-control" id="tenDanhMuc" placeholder="Nhập tên danh mục"
                    name="tenDanhMuc" value="<?php if (isset($tenDanhMuc) && ($tenDanhMuc != ""))
                        echo $tenDanhMuc; ?>">
            </div>
            <input type="hidden" name="idDanhMuc" value="<?php if (isset($idDanhMuc) && ($idDanhMuc > 0))
                echo $idDanhMuc; ?>">
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
