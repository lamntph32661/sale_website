<?php
session_start();
ob_start();
if (!isset($_SESSION['giohang'])) {
    $_SESSION['giohang'] = array();
}
include "app/models/connect.php";
include "app/models/pdo.php";
include "app/models/sanpham.php";
include "app/models/danhmuc.php";
include "app/models/banner.php";
include "app/models/taikhoan.php";
include "app/models/donhang.php";
include "app/models/binhluan.php";
include "app/models/nguoidung.php";
$dsdm = loadall_danhmuc();
$listbanner = loadall_banner();
$spnew = loadall_sanpham_home();
include "app/views/demoxml.com/html/nimis/header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case "chitietdonhang":
            if (isset($_GET['id']) && ($_GET['id'])) {
                $load_ctdh = load_ctdh($_GET['id']);
            }
            $ttdh = load_trangthai_donhang($_GET['id']);
            include "chitietdonhang.php";
            break;
        case "trangthaidonhang":
            if (isset($_SESSION['id_nguoi_dung']))
                $loadall_donhang = loadall_donhang_chuanhan($_SESSION['id_nguoi_dung']);
            include "trangthaidonhang.php";
            break;
        case "capnhatdonhang":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $trangthai = $_POST['trangthai'];
                $hoten = $_POST['hoten'];
                $diachi = $_POST['diachi'];
                $sdt = $_POST['sdt'];
                $ghichu = $_POST['ghichu'];
                $id = $_POST['id'];
                update_trangthai_donhang($id, $hoten, $trangthai, $ghichu, $diachi, $sdt);
            }
            $loadall_donhang = loadall_donhang_chuanhan($_SESSION['id_nguoi_dung']);
            include "trangthaidonhang.php";
            break;
        case "lichsumuahang":
            $loadall_donhang = loadall_donhang_danhan_dahuy($_SESSION['id_nguoi_dung']);
            include "lichsumuahang.php";

            break;
            case 'updatenguoidung':
                if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
                    $id_nguoi_dung = $_POST['id'];
                    $username = $_POST["username"];
                    $password = $_POST["password"];
                    $ho_ten = $_POST["hoten"];
                    $email = $_POST["email"];
                    $sdt = $_POST["sdt"];
                    $dia_chi = $_POST["diachi"];
                    
                    update_nguoi_dung($id_nguoi_dung, $username, $password, $ho_ten, $email, $sdt, $dia_chi, 0);
                }
                if (isset($_SESSION['user']) && isset($_SESSION['pass']))
                $onenguoidung = checkuser($_SESSION['user'], $_SESSION['pass']);
            include "thongtincanhan.php";
                break;
        case "danhsachsanpham":
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['id_danh_muc']) && ($_GET['id_danh_muc'] > 0)) {
                $id_danh_muc = $_GET['id_danh_muc'];
            } else {
                $id_danh_muc = 0;
            }
            $dssp = loc_sanpham($kyw, $id_danh_muc);
            include "category-1_loc.php";
            break;
        // case 'sanpham':
        //     if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
        //         $kyw = $_POST['kyw'];
        //     } else {
        //         $kyw = "";
        //     }
        //     if (isset($_GET['id_danh_muc']) && ($_GET['id_danh_muc'] > 0)) {
        //         $id_danh_muc = $_GET['id_danh_muc'];
        //     } else {
        //         $id_danh_muc = 0;
        //     }
        //     $dssp = loc_sanpham($kyw, $id_danh_muc);
        //     //  $tendm = load_ten_dm($id_danh_muc);
        //     include "category-1_loc.php";
        //     break;
        case "home":
            include "home.php";
            break;
        case "thongtincanhan":
            if (isset($_SESSION['user']) && isset($_SESSION['pass']))
                $onenguoidung = checkuser($_SESSION['user'], $_SESSION['pass']);
            include "thongtincanhan.php";
            break;
        case 'updatethongtin':
            if (isset($_GET["id_nguoi_dung"]) && ($_GET["id_nguoi_dung"]))
                $onenguoidung = loaduser($_GET["id_nguoi_dung"]);
            include "capnhatnguoidung.php";
            break;
        case 'capnhatthongtin':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id_nguoi_dung = $_POST['id_nguoi_dung'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $ho_ten = $_POST['ho_ten'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $dia_chi = $_POST['dia_chi'];
                $role_id = $_POST['role_id'];
                update_nguoi_dung($id_nguoi_dung, $username, $password, $ho_ten, $email, $sdt, $dia_chi, $role_id);
            }
            $onenguoidung = checkuser($_SESSION['user'], $_SESSION['pass']);
            include("thongtincanhan.php");
            break;
        case "huydonhang":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_donhang($_GET['id']);
            }
            $loadall_donhang = loadall_donhang_chuanhan($_SESSION['id_nguoi_dung']);
            include "trangthaidonhang.php";
            break;
        case "mualai":
            if (isset($_POST['mualai']) && ($_POST['mualai'])) {
                $id_san_pham = $_POST['id_san_pham'];
                $ten_san_pham = $_POST['ten_san_pham'];
                $hinh = $_POST['hinh'];
                $linksp = $_POST['linksp'];
                $giam_gia = $_POST['giam_gia'];
                if (isset($_POST['sl']) && $_POST['sl'] > 0) {
                    $sl = $_POST['sl'];
                } else {
                    $sl = 1;
                }

                $fg = 0;

                $i = 0;
                foreach ($_SESSION['giohang'] as $item) {
                    if ($item[1] == $ten_san_pham) {
                        $slnew = $sl + $item[5];
                        $_SESSION['giohang'][$i][5] = $slnew;
                        $fg = 1;
                        break;
                    }
                    $i++;
                }
                if ($fg == 0) {
                    $item = array($id_san_pham, $ten_san_pham, $hinh, $linksp, $giam_gia, $sl);
                    array_unshift($_SESSION['giohang'], $item);
                }
            }
            header("location:index.php?act=viewcart&thongbao=" . $thongbao);
            break;
        case "checkout":
            $err = "";
            if (isset($_POST['dathang']) && ($_POST['dathang'])) {
                $id_nguoi_dung = $_POST['id_nguoi_dung'];
                $ten_nguoi_nhan = $_POST['hoten'];
                $_SESSION['id_nguoi_dung'] = $_POST['id_nguoi_dung'];
                $ngay_dat_hang = date('Y-m-d');
                $trang_thai = "Chờ xác nhận";
                $diachi = $_POST['diachi'];
                $sdt_nhan_hang = $_POST['sdt'];
                $tong_tien = $_POST['tongtien'];
                $ghi_chu = $_POST['ghichu'];
                insert_donhang($id_nguoi_dung, $ten_nguoi_nhan, $ngay_dat_hang, $sdt_nhan_hang, $diachi, $tong_tien, $trang_thai, $ghi_chu);
                $idctdh = loadidmax_ctdh();
                $id_ctdh = $idctdh['id_ctdh'] + 1;
                $err = $idctdh['id_ctdh'] + 1;
                for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                    $dh = loadidmax_donhang();
                    capnhat_sl_sanpham($_SESSION['giohang'][$i][0], $_SESSION['giohang'][$i][5]);
                    insert_ctdh($id_ctdh, $dh['id_don_hang'], $_SESSION['giohang'][$i][0], $_SESSION['giohang'][$i][5], $_SESSION['giohang'][$i][4], ($_SESSION['giohang'][$i][4] * $_SESSION['giohang'][$i][5]),'false');
                }
                unset($_SESSION['giohang']);
                header("location:index.php?act=trangthaidonhang");
            }
            $onenguoidung = checkuser($_SESSION['user'], $_SESSION['pass']);
            include "checkout.php";
            break;
        case "del":
            if (isset($_GET['i']) && $_GET['i'] >= 0) {
                if (isset($_SESSION['giohang']))
                    array_splice($_SESSION['giohang'], $_GET['i'], 1);
            } else {
                if (isset($_SESSION['giohang'])) unset($_SESSION['giohang']);
            }

            if (isset($_SESSION['giohang']) && $_SESSION['giohang'] > 0) {
                include "viewcart.php";
            } else
                include "home.php";
            break;
        case "addtocart":
            if (isset($_POST['btnaddcart']) && ($_POST['btnaddcart'])) {
                $id_san_pham = $_POST['id_san_pham'];
                $ten_san_pham = $_POST['ten_san_pham'];
                $hinh = $_POST['hinh'];
                $linksp = $_POST['linksp'];
                $giam_gia = $_POST['giam_gia'];
                if (isset($_POST['sl']) && $_POST['sl'] > 0) {
                    $sl = $_POST['sl'];
                } else {
                    $sl = 1;
                }

                $fg = 0;

                $i = 0;
                foreach ($_SESSION['giohang'] as $item) {
                    if ($item[1] == $ten_san_pham) {
                        $slnew = $sl + $item[5];
                        $_SESSION['giohang'][$i][5] = $slnew;
                        $fg = 1;
                        break;
                    }
                    $i++;
                }
                if ($fg == 0) {
                    $item = array($id_san_pham, $ten_san_pham, $hinh, $linksp, $giam_gia, $sl);
                    array_unshift($_SESSION['giohang'], $item);
                }
            }
            header("location:index.php?act=viewcart&thongbao=" . $thongbao);

        case "viewcart":
            if (isset($_GET['thongbao'])) {
                $thongbao = $_GET['thongbao'];
            }
            include "viewcart.php";
            break;
        case "danhan":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $trangthai = "Đã nhận";
                nhanhang($id, $trangthai);
            }
            $loadall_donhang = loadall_donhang_chuanhan($_SESSION['id_nguoi_dung']);
            include "trangthaidonhang.php";
            break;
            case "binhluan":
                $onenguoidung = checkuser($_SESSION['user'], $_SESSION['pass']);
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
$loai_danh_gia=$_POST['loai_danh_gia'];
$noi_dung=$_POST['noidung'];
$id_nguoi_dung=$_POST['id_nguoi_dung'];
$trang_thai_binh_luan=$_POST['trang_thai_binh_luan'];
$id_san_pham=$_POST['id_san_pham'];
$ngaybinhluan=date('Y-m-d');
$id_binh_luan_cha=$_POST['id_binh_luan_cha'];
insert_binhluan($id_san_pham, $loai_danh_gia, $noi_dung, $id_nguoi_dung, $ngaybinhluan,$trang_thai_binh_luan,$id_binh_luan_cha,$_POST['id_ctdh']);

                }
                
                    $onesp = loadone_sanpham($id_san_pham);
                    extract($onesp);
                    $listnguoidung=loadall_nguoi_dung();
                    $listbinhluan=loadall_binhluan($id_san_pham);
                    $sp_cung_loai = load_sanpham_cungloai($id_san_pham, $id_danh_muc);
                    include "product-detail.php";
                
    
                        
                
                break;
        
        // case "category-1_loc":
        //     if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
        //         $kyw = $_POST['kyw'];
        //     } else {
        //         $kyw = "";
        //     }
        //     if (isset($_GET['id_danh_muc']) && ($_GET['id_danh_muc'] > 0)) {
        //         $id_danh_muc = $_GET['id_danh_muc'];
        //     } else {
        //         $id_danh_muc = 0;
        //     }
        //     $dssp = loc_sanpham($kyw, $id_danh_muc);
        //     include "category-1_loc.php";
        //     break;
            // case "category-2":
            //     include "category-2.php";
            //     break;
        case "product-detail":
            if (isset($_GET['id_san_pham']) && ($_GET['id_san_pham'] > 0)) {
                $id = $_GET['id_san_pham'];
                if (isset($_GET['id_danh_muc']) && ($_GET['id_danh_muc'] > 0)) {
                    $id_danh_muc = $_GET['id_danh_muc'];
                } else {
                    $id_danh_muc = 0;
                }
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $listbinhluan=loadall_binhluan($id);
                $listnguoidung=loadall_nguoi_dung();
                $sp_cung_loai = load_sanpham_cungloai($id, $id_danh_muc);
                include "product-detail.php";
            } else {
                //  include "view/home.php"; 
            }


            break;
            case "dangnhap":
                $login_err="";
                 
                  if(isset($_POST['login_username'])&&isset($_POST['login_password'])){
                    $check_user = checkuser($_POST['login_username'], $_POST['login_password']);
                    if ($check_user) {
                        $_SESSION['id_nguoi_dung']=$check_user['id_nguoi_dung'];
                        $_SESSION['user']=$_POST['login_username'];
                        $_SESSION['pass']=$_POST['login_password'];
                        header("location:/index.php");
                    
                    } else{
                        $login_err="Tên tài khoản hoặc mật khẩu không đúng.";
                    }
                }
                include "login.php";
                break;
        default:
            include 'home.php';

            break;
    }
} else {
    include 'home.php';
}
include "app/views/demoxml.com/html/nimis/footer.php";
