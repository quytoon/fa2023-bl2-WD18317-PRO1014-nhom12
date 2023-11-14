<?php
if (is_array($edit)) {
  extract($edit);
}
?>
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="mb-4">
        <h1 class="font_title">EDIT LOẠI HÀNG HÓA</h1>
      </div>
      <div class="form_content">
        <form action="index.php?act=updatedm" method="post">
          <div class="mb-3">
            <label for="maloai" class="form-label">Mã loại</label> <br>
            <input type="text" class="form-control" name="maloai" placeholder="Nhập vào mã loại">
          </div>
          <div class="mb-3">
            <label for="tenloai" class="form-label">Tên loại</label> <br>
            <input type="text" class="form-control" name="tenloai" placeholder="Nhập vào tên" value="<?php if (isset($name) && ($name != "")) echo $name ?>">
          </div>
          <div class="mb-3">
            <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id ?>">
            <input type="submit" class="btn btn-primary mr-2" name="capnhap" value="CẬP NHẬP">
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
</div>
