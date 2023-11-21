<style>
    body {
        background-image: url('https://scm-dam.oss-cn-shanghai.aliyuncs.com/scm-dam/2023-09-27/%E5%B7%A6_144b8768-4ff3-4e4a-ad99-b9547728b897.jpg?x-oss-process=image/format,webp/quality,q_80'); /* Đường dẫn đến hình nền của bạn */
        background-size: cover;
        background-position: center;
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

    }
</style>
<div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="row">
        <div class="col-12">
            <div class="mb-4">
                <h1 class="font_title">THÊM MỚI SẢN PHẨM</h1>
            </div>
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                <div class="mb-3 form_content_container">
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