<?php
if (!isset($_SESSION)) {
    session_start();
}
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
date_default_timezone_set('Asia/Ho_Chi_Minh');

/**
 * 
 *
 * @author CTT VNPAY
 */
require_once("config.php");
date_default_timezone_set("Asia/Ho_Chi_Minh");
$date = date('Y-m-d H:i:s');
$vnp_TxnRef = rand(1,10000); //Mã giao dịch thanh toán tham chiếu của merchant
$vnp_Amount = $load_giohang['0']['tong_bill']; // Số tiền thanh toán
$vnp_Locale = 'vn'; //Ngôn ngữ chuyển hướng thanh toán
$vnp_BankCode = ''; //Mã phương thức thanh toán
$vnp_IpAddr = $_SERVER['REMOTE_ADDR']; //IP Khách hàng thanh toán
$_SESSION['post_data']['thanhpho'] = $_POST['thanhpho'];
$_SESSION['post_data']['quanhuyen'] = $_POST['quanhuyen'];
$_SESSION['post_data']['xa'] = $_POST['xa'];
$_SESSION['post_data']['diachi'] = $_POST['diachi'];
$_SESSION['post_data']['hoten'] = $_POST['hoten'];
$_SESSION['post_data']['sdt'] = $_POST['sdt'];
$_SESSION['post_data']['email'] = $_POST['email'];
$_SESSION['post_data']['optradio'] = $_POST['optradio'];
$_SESSION['post_data']['iddh'] = $vnp_TxnRef;
$inputData = array(
    "vnp_Version" => "2.1.0",
    "vnp_TmnCode" => $vnp_TmnCode,
    "vnp_Amount" => $vnp_Amount * 100, // Số tiền thanh toán
    "vnp_Command" => "pay",
    "vnp_CreateDate" => date('YmdHis'),
    "vnp_CurrCode" => "VND",
    "vnp_IpAddr" => $vnp_IpAddr,
    "vnp_Locale" => $vnp_Locale,
    "vnp_OrderInfo" => "Thanh toan GD:" . $vnp_TxnRef, // Nôiị dung
    "vnp_OrderType" => "other",
    "vnp_ReturnUrl" => $vnp_Returnurl,
    "vnp_TxnRef" => $vnp_TxnRef,
    "vnp_ExpireDate" => $expire
);

if (isset($vnp_BankCode) && $vnp_BankCode != "") {
    $inputData['vnp_BankCode'] = $vnp_BankCode;
}

ksort($inputData);
$query = "";
$i = 0;
$hashdata = "";
foreach ($inputData as $key => $value) {
    if ($i == 1) {
        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
    } else {
        $hashdata .= urlencode($key) . "=" . urlencode($value);
        $i = 1;
    }
    $query .= urlencode($key) . "=" . urlencode($value) . '&';
}

$vnp_Url = $vnp_Url . "?" . $query;
if (isset($vnp_HashSecret)) {
    $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
}
echo "<meta http-equiv='refresh' content='0;url=$vnp_Url'>";
die();
