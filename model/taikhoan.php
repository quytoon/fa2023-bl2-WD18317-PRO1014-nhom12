<?php
// session_start();
//Đăng nhập
function dangnhap($TenTaiKhoan, $MatKhau) {
    $sql = "SELECT * FROM taikhoan WHERE TenTaiKhoan='$TenTaiKhoan' and MatKhau='$MatKhau'";
    $taikhoan = pdo_query_one($sql);
    if($taikhoan != false) {
        $_SESSION['TenTaiKhoan'] = $TenTaiKhoan;
    } else {
        return "Thông tin tài khoản sai";
    }
}
//Đăng Ký
function dangky($TenTaiKhoan, $Email, $MatKhau) {
    $sql = "INSERT INTO `taikhoan` ( `TenTaiKhoan`, `Email`, `MatKhau`) VALUES ( '$TenTaiKhoan', '$Email','$MatKhau') ";
    pdo_execute($sql);
}
//Đăng xuất
function dangxuat() {
    if(isset($_SESSION['TenTaiKhoan'])) {
        session_destroy();
    }
}
function checkuser($TenTaiKhoan, $MatKhau) {
    $sql = "select * from taikhoan where TenTaiKhoan='".$TenTaiKhoan."' and MatKhau='".$MatKhau."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
//gửi mail
function sendMail($Email) {
    // if (isset($Email) && !empty($Email)) {
    $sql = "SELECT * FROM `taikhoan` WHERE Email='$Email'";
    $taikhoan = pdo_query_one($sql);

    if($taikhoan != false) {
        sendMailPass($Email, $taikhoan['TenTaiKhoan'], $taikhoan['MatKhau']);
        return "Gửi email thành công";
    } else {
        return "Email của bạn không có trong hệ thống";
    }
    // } else {
    //     return "Email không hợp lệ";
    //  }
}
function sendMailPass($Email, $TenTaiKhoan, $MatKhau) {
    //lay tren github
    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = 'e68e881a4b4ac9';                     //SMTP username
        $mail->Password = '22e015fb49ebc0';                               //SMTP password
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('baovvph36087@fpt.edu.vn', 'Test Mail');
        $mail->addAddress($Email, $TenTaiKhoan);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Nguoi dung quen mat khau';
        $mail->Body = 'Mat khau cua ban la '.$MatKhau;

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}



// Load toàn bộ tài khoản
function loadall_taikhoan() {
    $sql = "SELECT * FROM `taikhoan`";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
// xóa tài khoản
function delete_taikhoan($IdTaiKhoan) {
    $sql = "DELETE from `taikhoan` where IdTaiKhoan=".$IdTaiKhoan;
    pdo_execute($sql);
}
// thêm tài khoản mới
function insert_taikhoan($TenTaiKhoan, $MatKhau, $HoTen, $DiaChi, $Email, $SoDienThoai, $avatarUser, $role) {
    $sql = "INSERT INTO `taikhoan` (`TenTaiKhoan` , `MatKhau` , `HoTen` , `DiaChi` , `Email` , `SoDienThoai` , `avatarUser` , `role`) 
    VALUES ('$TenTaiKhoan', '$MatKhau', '$HoTen', '$DiaChi', '$Email', '$SoDienThoai', '$avatarUser', '$role')";
    pdo_execute($sql);
}
//load 1 tài khoản
function loadone_taikhoan($IdTaiKhoan) {
    $sql = "select * from taikhoan where IdTaiKhoan = ".$IdTaiKhoan;
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}
//update thông tin tài khoản
function update_taikhoan($TenTaiKhoan, $MatKhau, $HoTen, $DiaChi, $Email, $SoDienThoai, $avatarUser, $role, $IdTaiKhoan) {
    if($avatarUser != ""){
        $sql = "UPDATE `taikhoan` SET `TenTaiKhoan` = '{$TenTaiKhoan}', `MatKhau` = '{$MatKhau}', `HoTen` = '{$HoTen}', `DiaChi` = '{$DiaChi}', `Email` = '{$Email}', `SoDienThoai` = '{$SoDienThoai}', `avatarUser` = '{$avatarUser}', `role` = '{$role}' WHERE `taikhoan`.`IdTaiKhoan` = $IdTaiKhoan";
    }else{
        $sql = "UPDATE `taikhoan` SET `TenTaiKhoan` = '{$TenTaiKhoan}', `MatKhau` = '{$MatKhau}', `HoTen` = '{$HoTen}', `DiaChi` = '{$DiaChi}', `Email` = '{$Email}', `SoDienThoai` = '{$SoDienThoai}', `role` = '{$role}' WHERE `taikhoan`.`IdTaiKhoan` = $IdTaiKhoan";
    }
    pdo_execute($sql);
}

//uupdate trang thai
function update_trangthai($TrangThai, $luachon) {
    $sql = "UPDATE donhang set TrangThai = $TrangThai where IdDonHang = $luachon";
    pdo_execute($sql);
}
function xoamemtaikhoan($IdTaiKhoan)
{
    $sql = "UPDATE `taikhoan` set `TrangThai` = 1 where `taikhoan`.`IdTaiKhoan` = $IdTaiKhoan";
    pdo_execute($sql);
}
function loadall_thongtinuser($id) {
    $sql = "SELECT * FROM taikhoan WHERE IdTaiKhoan = $id";
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}
?>