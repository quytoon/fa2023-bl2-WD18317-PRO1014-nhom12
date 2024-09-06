<!-- <div id="layoutSidenav_content"> -->
    <!-- <main> -->
        <!-- <div class="container-fluid px-4">
            <h1 class="mt-4">Trang chủ Admin</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Admin</li>
            </ol> -->
            /<a href="index.php?act=listtaikhoan">Quản Lý tài khoản</a></li>
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
                                    $xoamemtk = "index.php?act=xoamemtaikhoan&IdTaiKhoan=".$IdTaiKhoan;
                                    // if(is_file($hinhpart)){
                                    //     $hinhpart = "<img src '" .$hinhpart. "'width='100px' height='100px'>";
                                    // }else{
                                    //     $hinhpart ="No file img!";
                                    // }       
                                    if($TrangThai == 0){
                                        echo '<tr>
                                    <td>'.$IdTaiKhoan.'</td>
                                    <td>'.$TenTaiKhoan.'</td>
                                    <td>'.$MatKhau.'</td>
                                    <td>'.$HoTen.'</td>
                                    <td>'.$DiaChi.'</td>
                                    <td>'.$Email.'</td>
                                    <td>'.$SoDienThoai.'</td>
                                    <td><img src ="' .$hinhpart. '"width="100px" height="100px"></td>';
                                    
                                    if ($role == 1){
                                        echo '<td>Admin</td>';
                                    }if($role == 2){
                                        echo '<td>Nhân viên</td>';
                                    }if($role == 0){
                                        echo '<td>Khách hàng</td>';
                                    }
                                    // if($role == 1){
                                    //     echo '<td>
                                            
                                    //     </td>';
                                    // }
                                    
                                       echo'<td>
                                            <a href="' . $suatk . '"><input type="button" value="Sửa" class="btn btn-primary my-1"></a>
                                            <a href="' . $xoatk . '"><input type="button" value="Xóa" class="btn btn-primary my-1" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"></a>
                                            <a href="' . $xoamemtk . '"><input type="button" value="Xóa mềm" class="btn btn-primary my-1" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"></a>
                                        </td>';  
                                    }                    
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="index.php?act=addtaikhoan"> <input class="btn btn-primary my-1" type="button" value="NHẬP THÊM"></a>
                </div>
            </div>
    <!-- </main> -->