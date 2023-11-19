<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="mb-4 font_title mb">
        <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
      </div>
      <form action="" method="POST">
        <div class="mb-3 formds_loai">
          <div class="row">
            <div class="col-md-4 mb-2">
              <input type="text" class="form-control" name="" placeholder="Từ khóa" >
            </div>
            <div class="col-md-4 mb-2">
              <select class="form-select" name="iddm" >
                <option value="0" selected>Tất cả</option>
                <option value="1" selected>1</option>
                <option value="0" selected>2</option>
              </select>
            </div>
            <div class="col-md-2 mb-2">
              <input type="submit" name="" value="Go" class="btn btn-primary" style="padding: 5px;">
            </div>
          </div>
        </div>
      </form>

      <div class="row form_content" style="margin-top: 20px;">
        <table class="table">
          <thead>
            <tr>
              <th></th>
              <th>MÃ LOẠI</th>
              <th>TÊN SAP PHAM</th>
              <th>ANH SAP PHAM</th>
              <th>GIA SAP PHAM</th>
              <th>LUOT XEM SAP PHAM</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>

      <div class="row mb-3">
        <div class="col-12">
          <input class="btn btn-primary mr-2" type="button" value="CHỌN TẤT CẢ">
          <input class="btn btn-secondary mr-2" type="button" value="BỎ CHỌN TẤT CẢ">
          <a href="index.php?act=addsp" class="btn btn-success">NHẬP THÊM</a>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>