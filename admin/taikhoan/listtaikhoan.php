<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Trang chủ Admin</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Admin</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Danh sách Tài Khoản
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Id Tài Khoản</th>
                                <th>Tên Tài Khoản</th>
                                <th>Mật Khẩu</th>
                                <th>Họ Tên</th>
                                <th>Địa Chỉ</th>
                                <th>Email</th>
                                <th>Số Điện Thoại</th>
                                <th>Ảnh Đại Diện</th>
                                <th>Vai Trò</th>
                                <th>Hành Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($listtaikhoan as $key){
                                    extract($key);
                                    $hinhpart = "../upload/" . $avatarUser;
                                    $suatk = "index.php?act=updatetaikhoan&IdTaiKhoan=".$IdTaiKhoan;
                                    $xoatk = "index.php?act=xoataikhoan&IdTaiKhoan=".$IdTaiKhoan;
                                    // if(is_file($hinhpart)){
                                    //     $hinhpart = "<img src '" .$hinhpart. "'width='100px' height='100px'>";
                                    // }else{
                                    //     $hinhpart ="No file img!";
                                    // }
                                    echo '<tr>
                                    <td>'.$IdTaiKhoan.'</td>
                                    <td>'.$TenTaiKhoan.'</td>
                                    <td>'.$MatKhau.'</td>
                                    <td>'.$HoTen.'</td>
                                    <td>'.$DiaChi.'</td>
                                    <td>'.$Email.'</td>
                                    <td>'.$SoDienThoai.'</td>
                                    <td><img src ' .$hinhpart. 'width='100px' height='100px'></td>
                                    <td>'.$role.'</td>
                                    <td>
                                        <a href=""><input type="button" value="Xem chi tiết"></a> 
                                        <a href="' . $suatk . '"><input type="button" value="Sửa"></a> 
                                        <a href="' . $xoatk . '"><input type="button" value="Xóa" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"></a></td>
                                    </td>
                                </tr>';
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="index.php?act=addtaikhoan"> <input class="btn btn-primary my-1" type="button" value="NHẬP THÊM"></a>
                </div>
            </div>
    </main>