<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Thêm mới loại hàng hóa</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mb-4">
                    <h1 class="display-4">THÊM MỚI LOẠI HÀNG HÓA</h1>
                </div>
                <form action="index.php?act=adddm" method="post">
                    <div class="mb-3">
                        <label for="maloai" class="form-label">Mã loại</label>
                        <input type="text" class="form-control" id="maloai" name="maloai" placeholder="Nhập vào mã loại">
                    </div>
                    <div class="mb-3">
                        <label for="tenloai" class="form-label">Tên loại</label>
                        <input type="text" class="form-control" id="tenloai" name="tenloai" placeholder="Nhập vào tên">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary mr-2" name="themmoi" value="THÊM MỚI">
                        <input type="reset" class="btn btn-secondary mr-2" value="NHẬP LẠI">
                        <a href="index.php?act=lisdm" class="btn btn-info">DANH SÁCH</a>
                    </div>
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>