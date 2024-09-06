/<a href="">Thêm sản sản phẩm</a>
</ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1">THÊM MỚI SẢN PHẨM</i>
            </div>
            <div class="card-body">
            <form name="myForm" action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="iddm" class="form-label">Danh mục <i class="bi bi-box"></i></label> <br>
                    <select name="iddm" id="" class="form-select">
                        <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            echo '<option value="' . $idDanhMuc . '">' . $tenDanhMuc . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tensp" class="form-label">Tên sản phẩm <i class="bi bi-person"></i></label> <br>
                    <input type="text" class="form-control" id="" name="tensp" placeholder="Nhập vào tên">
                </div>
                <div class="mb-3">
                    <label for="giasp" class="form-label">Giá sản phẩm <i class="bi bi-cash"></i></label> <br>
                    <input type="text" class="form-control" id="" name="giasp" placeholder="Nhập vào giá">
                </div>
                <div class="mb-3">
                    <label for="anhsp" class="form-label">Ảnh sản phẩm <i class="bi bi-image"></i></label> <br>
                    <input type="file" class="form-control" id="" name="anhsp">
                </div>
                <div class="mb-3">
                    <label for="mota" class="form-label">Mô tả sản phẩm <i class="bi bi-file-richtext"></i></label> <br>
                    <textarea class="form-control" id="" name="mota" cols="30" rows="5"></textarea>
                </div>
                <div class="mb-3">
                    <label for="soluong" class="form-label">Số lượng sản phẩm <i class="bi bi-plus"></i></label>
                    <br><input type="number" class="form-control" id="" name="soluong" placeholder="Nhập số lượng">
                </div>
                <div class="mb-3">
                    <label for="trangthai" class="form-label">Trạng thái sản phẩm <i
                                class="bi bi-info-circle"></i></label> <br>
                    <input type="text" class="form-control" id="" name="trangthai" placeholder="Nhập vào trạng thái">
                </div>
                <div class="btn-container">
                    <input type="submit" class="btn btn-primary" name="themmoi" value="THÊM MỚI">
                    <input type="reset" class="btn btn-secondary" value="NHẬP LẠI">
                    <a href="index.php?act=lissp" class="btn btn-info">DANH SÁCH</a>
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                    ?>
                </div>
            </form>
                </div>
        </div>
        </div>