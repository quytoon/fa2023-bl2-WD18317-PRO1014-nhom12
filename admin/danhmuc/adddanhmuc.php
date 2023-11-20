/<a href="index.php?act=adddanhmuc">Thêm danh mục</a></li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Thêm danh mục
    </div>
    <div class="card-body">
        <form action="index.php?act=adddanhmuc" method="POST">
            <!-- Tên sản phẩm -->
            <div class="form-group">
                <label for="tenDanhMuc">Tên danh mục:</label>
                <input type="text" class="form-control" id="tenDanhMuc" placeholder="Nhập tên danh mục"
                    name="tenDanhMuc">
            </div>
            <!-- Nút lưu -->
            <input type="submit" name="themDanhMuc" class="btn btn-primary my-1" value="Thêm danh mục">
            <input type="reset" class="btn btn-primary my-1" value="Nhập lại">
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo "<br>" . $thongbao;
            ?>
        </form>
    </div>
</div>
