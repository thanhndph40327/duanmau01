<?php
function insert_sanpham($ten_sp, $gia_sp, $anh_sp, $mota_sp, $iddm_nho)
{
    $sql = "INSERT INTO san_pham(name, price, img, mota, iddm_nho) values('$ten_sp','$gia_sp','$anh_sp','$mota_sp','$iddm_nho')";
    pdo_execute($sql);
}
function delete_sanpham($id)
{
    $sql = "DELETE FROM san_pham WHERE id=" . $id;
    pdo_execute($sql);
}

function loadall_sanpham($kyw, $iddm)
{
    $sql = "SELECT * FROM san_pham WHERE 1";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm ='" . $iddm . "'";
    }
    $sql .= " ORDER BY id DESC";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
// dddddd
function loadall_sanpham_dmn($kyw, $iddm_nho)
{
    $sql = "SELECT * FROM san_pham WHERE 1";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($iddm_nho > 0) {
        $sql .= " and iddm_nho ='" . $iddm_nho . "'";
    }
    $sql .= " ORDER BY id DESC";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function load_ten_danhmuc_nho($iddm_nho)
{
    if ($iddm_nho > 0) {
        $sql = "SELECT * FROM danh_muc_nho WHERE id=" . $iddm_nho;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    } else {
        return "";
    }
}
// dddddd
function load_ten_danhmuc($iddm)
{
    if ($iddm > 0) {
        $sql = "SELECT * FROM danh_muc WHERE id=" . $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    } else {
        return "";
    }
}
function loadall_sanpham_home()
{
    $sql = "SELECT * FROM san_pham";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_BC()
{
    $sql = "SELECT * FROM san_pham";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadone_sanpham($id)
{
    $sql = "SELECT * FROM san_pham WHERE id=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_sanpham_cungloai($id, $iddm)
{
    $sql = "SELECT * FROM san_pham WHERE iddm=" . $iddm . " AND id <>" . $id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function  update_sanpham($id, $ten_sp, $gia_sp, $anh_sp, $mota_sp, $iddm_nho)
{
    if ($anh_sp != "") {
        $sql = "UPDATE san_pham SET name = '$ten_sp', price = '$gia_sp', img = '$anh_sp', mota = '$mota_sp', iddm_nho = '$iddm_nho' WHERE id = '$id'";
        pdo_execute($sql);
        echo "<script language='javascript'>alert('đã cập nhật thành công');</script>";
    } else {
        $sql = "UPDATE san_pham SET name = '$ten_sp', price = '$gia_sp', mota = '$mota_sp', iddm_nho = '$iddm_nho' WHERE id = '$id'";
        pdo_execute($sql);
        echo "<script language='javascript'>alert('đã cập nhật thành công');</script>";
    }
}
