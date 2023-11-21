
    <style>
        body {
            background-image: url('https://scm-dam.oss-cn-shanghai.aliyuncs.com/scm-dam/2023-09-27/%E5%B7%A6_144b8768-4ff3-4e4a-ad99-b9547728b897.jpg?x-oss-process=image/format,webp/quality,q_80');
            background-size: cover;
            background-position: center;
            color: white; 
        }

        .form_content_container {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }

        .font_title {
            color: #fff; 
        }
        .btn-container {
            text-align: center;
            margin-top: 20px; 
        }

        .btn-container button {
            margin: 5px; 
        }

        
        input:hover,
        select:hover,
        textarea:hover {
            background-color: #333;
            color: #fff;
        }

        .btn-container button:hover {
            background-color: #ffc107;
            color: #333;
        }

        input,
        select,
        textarea {
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .btn-container button {
            border-radius: 8px;
            background-color: rgba(255, 193, 7, 0.8);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
    </style>
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
    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="row">
            <div class="col-12">
                <div class="mb-4">
                    <h1 class="font_title">EDIT SẢN PHẨM</h1>
                </div>
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="mb-3 form_content_container">
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
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
