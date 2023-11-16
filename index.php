<?php
include "./views/header.php";
include "./model/pdo.php";
include "./model/san_pham.php";
include "./model/danh_muc.php";
include "globad.php";
$san_pham_moi = loadall_sanpham_home();
$danh_muc = loadall_danhmuc();
// $danh_muc_nho = loadall_danhmucnho();
$sanpham_BC = loadall_sanpham_BC();
if ((isset($_GET["act"])) && ($_GET["act"] != "")) {
    $act = $_GET["act"];
    switch ($act) {
        case "iphone":
            if (isset($_POST["kyw"]) && ($_POST["kyw"] != "")) {
                $kyw = $_POST["kyw"];
            } else {
                $kyw = "";
            }
            if (isset($_GET["iddm_nho"]) && ($_GET["iddm_nho"] > 0)) {
                $iddm_nho = $_GET["iddm_nho"];
            } else {
                $iddm_nho = 0;
            }
            $ddsp = loadall_sanpham_dmn($kyw, $iddm_nho);
            $ten_dm = load_ten_danhmuc_nho($iddm_nho);
            include "./views/iphone.php";
            break;
            case "san_pham_ct":
                include "./views/san_pham_ct.php";
                break;
        case "iphone":
            include "./views/iphone.php";
            break;
        case "mac":
            include "./views/mac.php";
            break;
        case "watch":
            include "./views/watch.php";
            break;
        case "phu_kien":
            include "./views/phu_kien.php";
            break;
        case "dang_nhap":
            include "./views/dang_nhap.php";
            break;
        case "dang_ky":
            include "./views/dang_ky.php";
            break;
        default:
            include "./views/home.php";
            break;
    }
} else {
    include "./views/home.php";
}
include "./views/footer.php";