<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="mb-4 font_title mb">
        <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
      </div>
      <form action="index.php?act=lissp" method="POST">
        <div class="mb-3 formds_loai">
          <div class="row">
            <div class="col-md-4 mb-2">
              <input type="text" class="form-control" name="kyw" placeholder="Từ khóa" >
            </div>
            <div class="col-md-4 mb-2">
              <select class="form-select" name="iddm" >
                <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                  extract($danhmuc);
                  echo '<option value="' . $id . '">' . $name . '</option>';
                }
                ?>
              </select>
            </div>
            <div class="col-md-2 mb-2">
              <input type="submit" name="listok" value="Go" class="btn btn-primary" style="padding: 5px;">
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
            <?php
            foreach ($listsanpham as $lissp) {
              extract($lissp);
              $suasp = "index.php?act=suasp&id=" . $id;
              $xoasp = "index.php?act=xoasp&id=" . $id;
              $hinh = '../upload/' . $img;
              if (is_file($hinh)) {
                $hinh = "<img src='" . $hinh . "' height='80'>";
              } else {
                $hinh = 'no photo';
              }
              echo '<tr>
                  <td><input type="checkbox" name="" id=""></td>
                  <td>' . $id . '</td>
                  <td>' . $name . '</td>
                  <td>' . $hinh . '</td>
                  <td>' . $price . '</td>
                  <td>' . $luotxem . '</td>
                  <td>
                    <a href="' . $suasp . '" class="btn btn-primary btn-sm">Sửa</a>
                    <a href="' . $xoasp . '" class="btn btn-danger btn-sm">Xóa</a>
                  </td>
              </tr>';
            }
            ?>
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
