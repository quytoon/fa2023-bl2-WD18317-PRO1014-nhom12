/<a href="index.php?act=updatespbienthe">Sửa tiết sản phẩm </a>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-2">SỬA CHI TIẾT SẢN PHẨM</i>
    </div>
    <div class="card-body">
        <form name="myForm" action="index.php?act=updatespbienthe" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="" class="form-label">Sản Phẩm <i class="bi bi-box"></i></label> <br>
<!--                <select name="IdSanPham" id="" class="form-select">-->
<!--                    --><?php //foreach ($listsanpham as $value) : ?>
<!--                        <option value="--><?php //echo $value['IdSanPham'] ?><!--" --><?php //echo $value['IdSanPham']==$loadspbtone['IdSanPham']? 'selected':'' ?><!-->
<!--                        --><?php //echo $value['TenSanPham'] ?><!--</option>-->
<!--                    --><?php //endforeach; ?>
<!--                </select>-->
                <select name="IdSanPham" id="" class="form-select">
                    <option value="" hidden>--Chọn sản phẩm--</option>
                    <option value="<?php echo $loadspbtone['IdGiayBienThe'] ?>" selected>
                        <?php echo $loadspbtone["TenSanPham"] ?>
                    </option>
                </select>

                <div class="form-group">
                    <label for="">Số lượng</label>
                    <input type="text" id="" class="form-control" name="SoLuong"
                           value="<?php echo $loadspbtone['SoLuong']; ?>">

                </div>
                <div class="form-group">
                    <label for="">Size</label>
                    <select name="IdSizeGiay" id="" class="form-control">
                        <?php foreach ($listsize as $value) : ?>
                            <option value="<?php echo $value['IdSizeGiay'] ?>" <?php echo $value['IdSizeGiay']==$loadspbtone['Size']? 'selected':'' ?>>
                                <?php echo $value['Size'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Màu</label>
                    <select name="IdMauSac" id="" class="form-control">
                        <?php foreach ($listmau as $value) : ?>
                            <option value="<?php echo $value['IdMauSac'] ?>" <?php echo $value['IdMauSac']==$loadspbtone['TenMauSac']? 'selected':'' ?>>
                                <?php echo $value['TenMauSac'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="btn-container" style="margin-top: 10px;">
                    <input type="text" hidden value="<?php echo $loadspbtone['IdGiayBienThe']  ?>" name="IdGiayBienThe">
                    <input type="submit" class="btn btn-primary" name="updatespbienthe" value="CẬP NHẬT">
                    <input type="reset" class="btn btn-secondary" value="NHẬP LẠI">
                    <a href="?act=lissp" class="btn btn-info">DANH SÁCH</a>
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                    ?>
                </div>
        </form>
    </div>
</div>
