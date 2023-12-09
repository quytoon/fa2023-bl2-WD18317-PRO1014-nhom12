/<a href="index.php?act=listgiamgia">Quản Lý giảm giá</a></li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Danh sách giảm giá
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID mã giảm giá</th>
                    <th>Tên mã giảm giá</th>
                    <th>Số lượng</th>
                    <th>Code mã giảm giá</th>
                    <th>Tiền giảm giá</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID mã giảm giá</th>
                    <th>Tên mã giảm giá</th>
                    <th>Số lượng</th>
                    <th>Code mã giảm giá</th>
                    <th>Tiền giảm giá</th>
                    <th>Hành động</th>
                </tr>
            </tfoot>
            <tbody>
            <!-- $chitietgiamgia = "index.php?act=chitietgiamgia&idGiamGia=" . $idGiamGia;    
            <a href="' . $chitietgiamgia . '"><input type="button" value="Xem chi tiết" class="btn btn-primary"></a>              -->
            <!-- $xoamemgg = "index.php?act=xoamemgg&idGiamGia=" . $idGiamGia; -->
                <?php
              
                foreach($listgiamgia as $key) {
                    extract($key);
                    $suagg = "index.php?act=updategiamgia&idGiamGia=" . $idGiamGia;
                    $xoagg = "index.php?act=xoagiamgia&idGiamGia=" . $idGiamGia;
                    echo '<tr>
                            <td>' . $idGiamGia . '</td>
                            <td>' . $tenGiamGia . '</td>
                            <td>' . $soluong . '</td>
                            <td>' . $codeGiamGia . '</td>
                            <td>' .number_format( $tienGiamGia , 0, '.', ',').' vnđ</td>
                           <td>
                                <a href="' . $suagg . '"><input type="button" value="Sửa" class="btn btn-primary"></a> 
                                <a href="' . $xoagg . '"><input type="button" value="Xóa" class="btn btn-primary" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"></a></td>                
                            </td> 
                        </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <a href="index.php?act=addgiamgia"> <input class="btn btn-primary my-1" type="button" value="NHẬP THÊM"></a>
    </div>
</div>
</main>
