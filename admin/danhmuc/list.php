<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="mb-4 font_title">
                <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
            </div>
            <div class="form_content">
                <form action="#" method="POST">
                    <div class="mb-3 formds_loai">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>MÃ LOẠI</th>
                                    <th>TÊN LOẠI</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listdanhmuc as $lisdm) {
                                    extract($lisdm);
                                    $suadm = "index.php?act=suadm&id=" . $id;
                                    $xoadm = "index.php?act=xoadm&id=" . $id;
                                    echo '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>' . $id . '</td>
                                        <td>' . $name . '</td>
                                        <td>
                                            <a href="' . $suadm . '" class="btn btn-primary btn-sm">Sửa</a>
                                            <a href="' . $xoadm . '" class="btn btn-danger btn-sm">Xóa</a>
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
                            <a href="index.php?act=adddm" class="btn btn-success">NHẬP THÊM</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
