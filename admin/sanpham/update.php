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
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="mb-4 font_title">
        <h1>EDIT LOẠI SAN PHAM</h1>
      </div>
      <div class="form_content">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <select name="iddm" class="form-select" style="padding: 5px;">
              <option value="0" selected>Tất cả</option>
              <?php
              foreach ($listdanhmuc as $key => $value) {
                if ($iddm == $value['id']) {
                  echo '<option value="' . $value['id'] . '" selected>' . $value['name'] . '</option>';
                } else {
                  echo '<option value="' . $value['id'] . '">' . $value['name'] . '</option>';
                }
              }
              ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="tensp" class="form-label">Tên san pham</label> <br>
            <input type="text" class="form-control" name="tensp" placeholder="Nhập vào tên" value="<?= $name ?>">
          </div>
          <div class="mb-3">
            <label for="giasp" class="form-label">Gia san pham</label> <br>
            <input type="text" class="form-control" name="giasp" placeholder="Nhập vào giá" value="<?= $price ?>">
          </div>
          <div class="mb-3">
            <label for="anhsp" class="form-label">Anh san pham</label> <br>
            <input type="file" class="form-control" name="anhsp">
            <?= $hinh ?>
          </div>
          <div class="mb-3">
            <label for="mota" class="form-label">Mo ta san pham</label> <br>
            <textarea class="form-control" name="mota" cols="30" rows="10"><?= $mota ?></textarea>
          </div>

          <div class="mb-3">
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="submit" class="btn btn-primary mr-2" name="capnhat" value="CẬP NHẬT">
            <input type="reset" class="btn btn-secondary mr-2" value="NHẬP LẠI">
            <a href="index.php?act=lissp" class="btn btn-info">DANH SÁCH</a>
          </div>
          <?php
          if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
          ?>
        </form>
      </div>
    </div>
  </div>
</div>
