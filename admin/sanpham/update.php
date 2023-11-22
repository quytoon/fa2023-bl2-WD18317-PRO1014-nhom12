
    <?php
    if (is_array($sanpham)) {
        extract($sanpham);
    }
    $hinh = '../upload/' . $img;
    if (is_file($hinh)) {
        $hinh = "<img src='" . $hinh . "' height='80'>";
    } else {
        $hinh = 'no photo';
    }
    ?>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Cập nhật sản phẩm
                </div>
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="iddm" class="form-label">Danh mục <i class="bi bi-box"></i></label> <br>
                        <select name="iddm" id="iddm" class="form-select">
                            <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                if ($iddm == $danhmuc['idDanhMuc']) {
                                    echo '<option value="' . $danhmuc['idDanhMuc'] . '" selected>' . $danhmuc['tenDanhMuc'] . '</option>';
                                } else {
                                    echo '<option value="' . $danhmuc['idDanhMuc'] . '">' . $danhmuc['tenDanhMuc'] . '</option>';
                                }
                            }
                            ?>
                        </select>

                    </div>
                    <div class="mb-3">
                        <label for="tensp" class="form-label">Tên sản phẩm <i class="bi bi-person"></i></label> <br>
                        <input type="text" class="form-control" id="" name="tensp" placeholder="Nhập vào tên" value="<?= $TenSanPham ?>">
                    </div>
                    <div class="mb-3">
                        <label for="giasp" class="form-label">Giá sản phẩm <i class="bi bi-cash"></i></label> <br>
                        <input type="text" class="form-control" id="" name="giasp" placeholder="Nhập vào giá" value="<?= $Gia ?>">
                    </div>
                    <div class="mb-3">
                        <label for="anhsp" class="form-label">Ảnh sản phẩm <i class="bi bi-image"></i></label> <br>
                        <input type="file" class="form-control" id="" name="anhsp">
                        <?= $hinh ?>
                    </div>
                    <div class="mb-3">
                        <label for="mota" class="form-label">Mô tả sản phẩm <i class="bi bi-file-richtext"></i></label> <br>
                        <textarea class="form-control" id="" name="mota" cols="30" rows="5"><?= $MoTa ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="soluong" class="form-label">Số lượng sản phẩm <i class="bi bi-plus"></i></label> <br>
                        <input type="number" class="form-control" id="" name="soluong" placeholder="Nhập số lượng" value="<?= $SoLuong ?>" >
                    </div>
                    <div class="mb-3">
                        <label for="trangthai" class="form-label">Trạng thái sản phẩm <i class="bi bi-info-circle"></i></label> <br>
                        <input type="text" class="form-control" id="" name="trangthai" placeholder="Nhập vào trạng thái" value="<?= $trangThai ?>">
                    </div>
          <div class="mb-3">
              <input type="hidden" name="id" value="<?= $IdSanPham ?>">

            <input type="submit" class="btn btn-primary mr-2" name="capnhat" value="CẬP NHẬT">
            <a href="index.php?act=lissp" class="btn btn-info">DANH SÁCH</a>
          </div>
        </form>
      </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
