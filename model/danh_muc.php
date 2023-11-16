<?php

// function insert_danhmuc($ten_loai)
// {
//     $sql = "INSERT INTO danh_muc(name) values('$ten_loai')";
//     pdo_execute($sql);
// }

function insert_danhmuc($ten_loai, $anh_dm)
{
    $sql = "INSERT INTO danh_muc(name, img) values('$ten_loai','$anh_dm')";
    pdo_execute($sql);
}
function insert_danhmucnho($ten_dmn, $iddm_nho)
{
    $sql = "INSERT INTO danh_muc_nho(name, iddm_nho) values('$ten_dmn','$iddm_nho')";
    pdo_execute($sql);
}
function delete_danhmuc($id)
{
    $sql = "DELETE FROM danh_muc WHERE id=" . $id;
    pdo_execute($sql);
}
function delete_danhmucnho($id)
{
    $sql = "DELETE FROM danh_muc_nho WHERE id=" . $id;
    pdo_execute($sql);
}

function loadall_danhmuc()
{
    $sql = "SELECT * FROM danh_muc ORDER BY id DESC limit 0,4";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function loadall_danhmucnho()
{
    $sql = "SELECT * FROM danh_muc_nho ORDER BY id DESC";
    $listdanhmuc_nho = pdo_query($sql);
    return $listdanhmuc_nho;
}
function loadone_danhmuc($id)
{
    $sql = "SELECT * FROM danh_muc WHERE id=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($ten_loai, $id)
{
    $sql = "UPDATE danh_muc set name = '" . $ten_loai . "' WHERE id=" . $id;
    $dm = pdo_execute($sql);
    return $dm;
}
