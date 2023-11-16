<?php
include "header.php";
include "../model/pdo.php";
include "../model/san_pham.php";
include "../model/danh_muc.php";



if ((isset($_GET["act"])) && ($_GET["act"] != "")) {
    $act = $_GET["act"];
    switch ($act) {
            // Danh mục
        case "add_danhmuc":
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $ten_loai = $_POST['tenloai'];
                $anh_dm = $_FILES["anhdm"]["name"];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["anhdm"]["name"]);
                if (move_uploaded_file($_FILES["anhdm"]["tmp_name"], $target_file)) {
                } else {
                }
                insert_danhmuc($ten_loai, $anh_dm);
                $thong_bao = "Thêm sản phẩm thành công";
            }
            include "danhmuc/add_danhmuc.php";
            break;
        case "list_danhmuc":
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list_danhmuc.php";
            break;
        case 'xoa_dm':
            if (isset($_GET["id"]) && ($_GET["id"]) > 0) {
                delete_danhmuc($_GET["id"]);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list_danhmuc.php";
            break;

        case "add_danhmucnho":
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm_nho = $_POST['iddm_nho'];
                $ten_dmn = $_POST['tendmn'];
                insert_danhmucnho($ten_dmn, $iddm_nho);
                $thong_bao = "Thêm sản phẩm thành công";
            }
            // $listdanhmucnho = loadall_danhmucnho();
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/add_danhmucnho.php";
            break;
        case "list_danhmucnho":
            $listdanhmucnho = loadall_danhmucnho();
            include "danhmuc/list_danhmucnho.php";
            break;
        case 'xoa_nho':
            if (isset($_GET["id"]) && ($_GET["id"]) > 0) {
                delete_danhmucnho($_GET["id"]);
            }
            $listdanhmucnho = loadall_danhmucnho();
            include "danhmuc/list_danhmucnho.php";
            break;
            // Sản phẩm
        case "add_sanpham":
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm_nho = $_POST['iddm_nho'];
                $ten_sp = $_POST['tensp'];
                $gia_sp = $_POST['giasp'];
                $mota_sp = $_POST['motasp'];
                $anh_sp = $_FILES["anhsp"]["name"];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["anhsp"]["name"]);
                if (move_uploaded_file($_FILES["anhsp"]["tmp_name"], $target_file)) {
                } else {
                }
                insert_sanpham($ten_sp, $gia_sp, $anh_sp, $mota_sp, $iddm_nho);
                $thong_bao = "Thêm sản phẩm thành công";
            }
            $listdanhmucnho = loadall_danhmucnho();
            // $listdanhmuc = loadall_danhmuc();
            include "sanpham/add_sanpham.php";
            break;
        case "list_sanpham":
            if (isset($_POST['go']) && ($_POST['go'])) {
                $kyw = $_POST["kyw"];
                $iddm = $_POST["iddm_nho"];
            } else {
                $kyw = "";
                $iddm = 0;
            }
            $listdanhmucnho = loadall_danhmucnho();
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "sanpham/list_sanpham.php";
            break;
        case 'xoa_sp':
            if (isset($_GET["id"]) && ($_GET["id"]) > 0) {
                delete_sanpham($_GET["id"]);
            }
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list_sanpham.php";
            break;
        default:
            include "./views/home.php";
            break;
    }
} else {
    include "./views/home.php";
}
include "./views/footer.php";
