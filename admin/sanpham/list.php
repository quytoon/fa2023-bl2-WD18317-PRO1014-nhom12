
<div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="col-8">
            <div class="mb-4 font_title mb">
                <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
            </div>
            <form action="index.php?act=lissp" method="POST">
                <div class="mb-3 formds_loai">
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <input type="text" class="form-control" name="" placeholder="Từ khóa">
                        </div>
                        <div class="col-md-4 mb-2">
                            <select name="iddm" id="" class="form-select">
                                <option value="1" selected>Tất cả</option>
                                <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value="' . $idDanhMuc . '">' . $tenDanhMuc . '</option>';
                                }
                                ?>

                            </select>
                        </div>
                        <div class="col-md-2 mb-2">
                            <input type="submit" name="" value="Go" class="btn btn-primary" style="padding: 5px;">
                        </div>
                    </div>
                </div>

            <div class="row form_content" style="margin-top: 20px;">

                <table class="table test">
                    <thead>
                    <tr>
                        <th>MÃ LOẠI</th>
                        <th>ID SP</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>ẢNH SẢN PHẨM</th>
                        <th>GIÁ SẢN PHẨM</th>
                        <th>LƯỢT XEM SẢN PHẨM</th>
                        <th>TUỲ CHỌN</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($listsanpham as $lissp) {
                        extract($lissp);
                        $suasp = "index.php?act=suasp&IdSanPham=" . $IdSanPham;
                        $xoasp = "index.php?act=xoasp&IdSanPham=" . $IdSanPham;
                        $hinh = '../upload/' . $img;
                        if (is_file($hinh)) {
                            $hinh = "<img src='" . $hinh . "' height='100px' width='100px' />";
                        } else {
                            $hinh = 'no photo';
                        }
                        echo '<tr>
                    <td>' . $idDanhMuc . '</td>
                    <td>' . $IdSanPham . '</td>
                    <td>' . $TenSanPham . '</td>
                    <td>' . $hinh . '</td>
                    <td>' . $Gia . '</td>
                    <td>' . $luotxem . '</td>
                    <td>
                     <a href="' . $suasp . '"><button type="button" class="btn btn-primary">Sửa</button></a>
                     <a href="' . $xoasp . '" onclick="return confirmDelete(\'' . $xoasp . '\')"><button type="button" class="btn btn-danger">Xóa</button></a>
                    </td>

                </tr>';
                    }
                    ?>
                    </tbody>
                </table>
            </div>
            </form>

            <div class="row mb-3">
                <div class="col-12">
                    <a href="index.php?act=addsp" class="btn btn-success">NHẬP THÊM</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function confirmDelete(deleteUrl) {
        if (confirm("Bạn có chắc muốn xóa không?")) {
            window.location.href = deleteUrl;
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
