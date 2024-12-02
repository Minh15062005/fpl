<?php
include "./model/pdo.php";
include "./model/sanpham.php";
include "./model/danhmuc.php";
include "./view/header.php";
include "./global.php";
$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();;
if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
} else {
    $act = 'home'; // Default action
}

switch ($act) {
    case 'sanpham':
        if (isset($_GET['iddm']) && $_GET['iddm']) {
            $iddm = $_GET['iddm']; // Lấy giá trị idsp từ GET request
            $dssp= loadall_sanpham("", $iddm=0);
            $tendm=loadone_ten_dm($iddm);
            include "./view/sanpham.php";
        }
        break;
    case 'sanphamct':
        if (isset($_GET['idsp']) && $_GET['idsp']) {
            $id = $_GET['idsp']; // Lấy giá trị idsp từ GET request

            $onesp = loadone_sanpham($id);
            extract($onesp);
            $sp_cung_loai = loadone_sanpham_cungloai($id, $iddm);
            include "./view/sanphamct.php";
        } else {
            include "view/home.php";
        }

        break;
    case 'gioithieu':
        include "./view/gioithieu.php";
        break;
    case 'lienhe':
        include "./view/lienhe.php";
        break;
    case 'home':
    default:
        include "./view/home.php";
        break;
}

include "./view/footer.php";
