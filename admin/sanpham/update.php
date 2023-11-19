<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css">
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
</head>

<body>
    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="row">
            <div class="col-12">
                <div class="mb-4">
                    <h1 class="font_title">EDIT SẢN PHẨM</h1>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3 form_content_container">
                        <label for="iddm" class="form-label">Danh mục <i class="bi bi-box"></i></label> <br>
                        <select name="" id="" class="form-select"></select>
                    </div>
                    <div class="mb-3">
                        <label for="tensp" class="form-label">Tên sản phẩm <i class="bi bi-person"></i></label> <br>
                        <input type="text" class="form-control" id="" name="" placeholder="Nhập vào tên">
                    </div>
                    <div class="mb-3">
                        <label for="giasp" class="form-label">Giá sản phẩm <i class="bi bi-cash"></i></label> <br>
                        <input type="text" class="form-control" id="" name="" placeholder="Nhập vào giá">
                    </div>
                    <div class="mb-3">
                        <label for="anhsp" class="form-label">Ảnh sản phẩm <i class="bi bi-image"></i></label> <br>
                        <input type="file" class="form-control" id="" name="">
                    </div>
                    <div class="mb-3">
                        <label for="mota" class="form-label">Mô tả sản phẩm <i class="bi bi-file-richtext"></i></label> <br>
                        <textarea class="form-control" id="" name="" cols="30" rows="5"></textarea>
                    </div>

          <div class="mb-3">
            <input type="hidden" name="" value="">
            <input type="submit" class="btn btn-primary mr-2" name="capnhat" value="CẬP NHẬT">
            <input type="reset" class="btn btn-secondary mr-2" value="NHẬP LẠI">
            <a href="" class="btn btn-info">DANH SÁCH</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>