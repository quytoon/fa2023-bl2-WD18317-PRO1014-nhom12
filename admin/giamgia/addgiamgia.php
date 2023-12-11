/<a href="index.php?act=listgiamgia">Quản Lý giảm giá</a></li>/<a href="index.php?act=addgiamgia">Thêm mã giảm giá</a></li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Thêm mã giảm giá
    </div>
    <div class="card-body">
        <form action="index.php?act=addgiamgia" method="POST">
            <!-- Tên sản phẩm -->
            <div class="form-group">
                <label for="tenGiamGia">Tên mã giảm giá:</label>
                <input type="text" class="form-control" id="tenGiamGia" placeholder="Nhập mã giảm giá"
                    name="tenGiamGia">
            </div>
            <div class="form-group">
                <label for="soluong">Số lượng:</label>
                <input type="text" class="form-control" id="soluong" placeholder="Nhập Số lượng"
                    name="soluong">
            </div>
            <div class="form-group">
                <label for="codeGiamGia">Code mã giảm giá:</label>
                <input type="text" class="form-control" id="codeGiamGia" placeholder="Nhập code mã giảm giá"
                    name="codeGiamGia">
            </div>
            <div class="form-group">
                <label for="tienGiamGia">Tiền giảm giá:</label>
                <input type="text" class="form-control" id="tienGiamGia" placeholder="Nhập tiền mã giảm giá"
                    name="tienGiamGia">
            </div>
            <!-- Nút lưu -->
            <input type="submit" name="themgiamgia" class="btn btn-primary my-1" value="Thêm mã giảm giá">
            <input type="reset" class="btn btn-primary my-1" value="Nhập lại">
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo "<br>" . $thongbao;
            ?>
        </form>
    </div>
</div>
