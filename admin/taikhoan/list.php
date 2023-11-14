<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="mb-4 font_title">
        <h1>DANH SÁCH TAI KHOAN</h1>
      </div>
      <div class="form_content">
        <form action="#" method="POST">
          <div class="mb-3 formds_loai">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th>Mã tài khoản</th>
                  <th>User</th>
                  <th>Password</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Role</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($listtaikhoan as $tk) {
                  extract($tk);
                  $suatk = "index.php?act=suatk&id=" . $id;
                  $xoatk = "index.php?act=xoatk&id=" . $id;
                  echo '<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>' . $id . '</td>
                    <td>' . $user . '</td>
                    <td>' . $pass . '</td>
                    <td>' . $email . '</td>
                    <td>' . $address . '</td>
                    <td>' . $rel . '</td>
                    <td>' . $role . '</td>
                    <td><a href="' . $suatk . '"><input type="button" class="btn btn-primary btn-sm" value="Sửa"></a>   <a href="' . $xoatk . '"><input type="button" class="btn btn-danger btn-sm" value="Xóa"></a></td>
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
              <a href="index.php?act=adddm" class="btn btn-success">NHẬP THÊM</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
