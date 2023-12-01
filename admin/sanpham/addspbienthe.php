/<a href="index.php?act=addspbienthe">Thêm chi tiết sản phẩm </a>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-2">THÊM MỚI CHI TIẾT SẢN PHẨM</i>
    </div>
    <div class="card-body">
        <form name="myForm" action="index.php?act=addspbienthe" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="" class="form-label">Sản Phẩm  <i class="bi bi-box"></i></label> <br>
                <select name="IdSanPham" id="" class="form-select">
                  <?php foreach ($listsanpham as $value) : ?>
                     <?php $xemct = "index.php?act=listspbienthe&IdSanPham=". $value['IdSanPham'];?>
                      <option value="" hidden>--Chọn sản phẩm--</option>
                      <option value="<?php echo $value['IdSanPham'] ?>">
                          <?php echo $value['TenSanPham'] ?></option>
                  <?php endforeach; ?>
                </select>
            </div>
           <div class="form-group">
            <label for="">Số lượng</label>
            <input type="text" id="" class="form-control" name="SoLuong">
             </div>
            <div class="form-group">
                <label for="">Size</label>
                <select name="IdSizeGiay" id="" class="form-control">
                    <option value="" hidden>--Chọn Size--</option>
                    <?php foreach ($listsize as $value) : ?>
                        <option value="<?php echo $value['IdSizeGiay'] ?>">
                            <?php echo $value['Size'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Màu</label>
                <select name="IdMauSac" id="" class="form-control">
                    <option value="" hidden>--Chọn màu--</option>
                    <?php foreach ($listmau as $value) : ?>
                        <option value="<?php echo $value['IdMauSac'] ?>">
                            <?php echo $value['TenMauSac'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="btn-container" style="margin-top: 10px;">
                <input type="submit" class="btn btn-primary" name="addspbienthe" value="THÊM MỚI" >
                <input type="reset" class="btn btn-secondary" value="NHẬP LẠI">
                <a href="?act=lissp" class="btn btn-info">DANH SÁCH</a>
                <?php
                if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                ?>
            </div>
        </form>
    </div>
</div>