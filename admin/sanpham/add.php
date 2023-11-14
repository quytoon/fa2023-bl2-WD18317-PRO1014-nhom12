<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="mb-4">
                <h1 class="font_title">THÊM MỚI SAN PHAM</h1>
            </div>
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                <div class="mb-3 form_content_container">
                    <label for="iddm" class="form-label">Danh muc</label> <br>
                    <select name="iddm" id="iddm" class="form-select">
                        <?php
                        foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tensp" class="form-label">Tên san pham</label> <br>
                    <input type="text" class="form-control" id="tensp" name="tensp" placeholder="Nhập vào tên">
                </div>
                <div class="mb-3">
                    <label for="giasp" class="form-label">Gia san pham</label> <br>
                    <input type="text" class="form-control" id="giasp" name="giasp" placeholder="Nhập vào giá">
                </div>
                <div class="mb-3">
                    <label for="anhsp" class="form-label">Anh san pham</label> <br>
                    <input type="file" class="form-control" id="anhsp" name="anhsp">
                </div>
                <div class="mb-3">
                    <label for="mota" class="form-label">Mo ta san pham</label> <br>
                    <textarea class="form-control" id="mota" name="mota" cols="30" rows="10"></textarea>
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-primary mr-2" name="themmoi" value="THÊM MỚI">
                    <input type="reset" class="btn btn-secondary mr-2" value="NHẬP LẠI">
                    <a href="index.php?act=lissp" class="btn btn-info">DANH SÁCH</a>
                </div>

                <?php
                if(isset($thongbao) && ($thongbao != "")) echo $thongbao;
                ?>
            </form>
        </div>
    </div>
</div>