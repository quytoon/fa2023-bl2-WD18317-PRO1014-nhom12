/<a href="index.php?act=dsbl">Quản Lý Bình Luận</a></li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Danh sách bình luận
    </div>
    <div class="card-body">
        <table id="datatablesSimple" class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nội dung</th>
                <th>ID User</th>
                <th>ID Product</th>
                <th>Ngày bình luận</th>
                <th>Điểm đánh giá </th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($listbinhluan as $bl) {
                extract($bl);
                $xoabl = "index.php?act=xoabl&IdBinhLuan=" . $IdBinhLuan;
                $xoamembl = "index.php?act=xoamembl&IdBinhLuan=" . $IdBinhLuan;
                $capnhatbl = "index.php?act=capnhatbl&IdBinhLuan";
            if ($bl['TrangThai'] == 0) {
                echo '<tr>
                            <td>' . $IdBinhLuan . '</td>
                            <td>' . $NoiDung . '</td>
                            <td>' . $IdTaiKhoan . '</td>
                            <td>' . $IdSanPham . '</td>
                            <td>' . $NgayBinhLuan . '</td>
                            <td>' . $DiemDanhGia . '</td>
                            <td>
                             <a href="' . $xoabl . '"  onclick="return confirmDelete(\'' . $xoabl . '\')"><button type="button" class="btn btn-danger">Xóa</button></a>
                             <a href="' . $xoamembl . '"  onclick="return confirmDelete(\'' . $xoamembl . '\')"><button type="button" class="btn btn-danger">Xóa mềm</button></a>
                            </td>
                        </tr>';
            }
            }

            ?>
            </tbody>
        </table>
        <a href="index.php?act=capnhatbl" class="btn btn-primary">Cập Nhật</a>
    </div>
</div>

<!-- Add these lines to include DataTables CSS and JavaScript -->
<!-- Add these lines to include jQuery, DataTables CSS, and JavaScript -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>


<script>
    $(document).ready(function() {
        $('#datatablesSimple').DataTable();

    });
</script>
<script>
    function confirmDelete(deleteUrl) {
        if (confirm("Bạn có chắc muốn xóa không?")) {
            window.location.href = deleteUrl;
        }
    }
</script>



