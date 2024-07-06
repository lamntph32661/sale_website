<?php
function insert_donhang($id_nguoi_dung,$ten_nguoi_nhan, $ngay_dat_hang,$sdt_nhan_hang,$diachi,$tong_tien, $trang_thai, $ghi_chu)
{
    $sql = "INSERT INTO `don_hang`(`id_nguoi_dung`,`ten_nguoi_nhan`, `ngay_dat_hang`,`sdt_nhan_hang`,`dia_chi_giao_hang`, `tong_tien`, `trang_thai`, `ghi_chu`) 
    VALUES ('$id_nguoi_dung','$ten_nguoi_nhan','$ngay_dat_hang','$sdt_nhan_hang','$diachi','$tong_tien','$trang_thai','$ghi_chu')";
    pdo_execute($sql);
}
function sp_ban_chay()  {
    $sql="SELECT 
    ctdh.id_san_pham, 
    SUM(ctdh.so_luong) AS luot_ban, 
    sp.giam_gia, 
    sp.ten_san_pham, 
    sp.hinh, 
    sp.id_danh_muc,
    sp.so_luong,
    dm.ten_danh_muc
FROM 
    san_pham sp
INNER JOIN 
     ctdh ON sp.id_san_pham = ctdh.id_san_pham 
INNER JOIN 
    danh_muc dm ON sp.id_danh_muc = dm.id_danh_muc
GROUP BY 
    ctdh.id_san_pham 
ORDER BY 
    luot_ban DESC;";
    $ban_chay=pdo_query($sql);
    return $ban_chay;
}
function loadall_donhang_chuanhan($id)
{
    $sql = "SELECT * FROM `don_hang` WHERE trang_thai <> 'Đã nhận' <> trang_thai like 'Đã hủy' AND id_nguoi_dung =".$id;
    $dh = pdo_query($sql);
    return $dh;
}
function loadall_donhang_danhan_dahuy($id)
{
    $sql = "SELECT * FROM `don_hang` WHERE (trang_thai like 'Đã nhận' or trang_thai like 'Đã hủy') AND id_nguoi_dung =".$id;
    $dh = pdo_query($sql);
    return $dh;
}
function thongke_doanhthu_theongay()
{
    
    $sql = "SELECT 
    DATE_SUB(CURRENT_DATE, INTERVAL t.n DAY) AS ngay,
    SUM(CASE WHEN DATE(ngay_dat_hang) = DATE_SUB(CURRENT_DATE, INTERVAL t.n DAY) THEN tong_tien ELSE 0 END) AS tong_tien_ngay_1
FROM 
    don_hang,
    (SELECT 0 AS n UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL
     SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9 UNION ALL
     SELECT 10 UNION ALL SELECT 11 UNION ALL SELECT 12 UNION ALL SELECT 13 UNION ALL SELECT 14 UNION ALL
     SELECT 15 UNION ALL SELECT 16 UNION ALL SELECT 17 UNION ALL SELECT 18 UNION ALL SELECT 19 UNION ALL
     SELECT 20 UNION ALL SELECT 21 UNION ALL SELECT 22 UNION ALL SELECT 23 UNION ALL SELECT 24 UNION ALL
     SELECT 25 UNION ALL SELECT 26 UNION ALL SELECT 27 UNION ALL SELECT 28 UNION ALL SELECT 29 UNION ALL SELECT 30) AS t
WHERE 
    trang_thai LIKE 'Đã nhận'
GROUP BY
    ngay
ORDER BY
    ngay ASC;
";
    $ngay = pdo_query($sql);
    return $ngay;
}
function thongke_donhang_danhan()
{
    $sql = "SELECT 
    COALESCE(SUM(CASE WHEN YEAR(ngay_dat_hang)=(YEAR(CURRENT_DATE)-9) THEN tong_tien ELSE 0 END), 0) AS nam_1_tong_tien
FROM 
    don_hang
WHERE 
    trang_thai LIKE 'Đã nhận'
    AND YEAR(ngay_dat_hang) = (YEAR(CURRENT_DATE) - 9)
UNION ALL
SELECT 
    COALESCE(SUM(CASE WHEN YEAR(ngay_dat_hang)=(YEAR(CURRENT_DATE)-8) THEN tong_tien ELSE 0 END), 0) AS nam_2_tong_tien
FROM 
    don_hang
WHERE 
    trang_thai LIKE 'Đã nhận'
    AND YEAR(ngay_dat_hang) = (YEAR(CURRENT_DATE) - 8)
UNION ALL
SELECT 
    COALESCE(SUM(CASE WHEN YEAR(ngay_dat_hang)=(YEAR(CURRENT_DATE)-7) THEN tong_tien ELSE 0 END), 0) AS nam_3_tong_tien
FROM 
    don_hang
WHERE 
    trang_thai LIKE 'Đã nhận'
    AND YEAR(ngay_dat_hang) = (YEAR(CURRENT_DATE) - 7)
UNION ALL
SELECT 
    COALESCE(SUM(CASE WHEN YEAR(ngay_dat_hang)=(YEAR(CURRENT_DATE)-6) THEN tong_tien ELSE 0 END), 0) AS nam_4_tong_tien
FROM 
    don_hang
WHERE 
    trang_thai LIKE 'Đã nhận'
    AND YEAR(ngay_dat_hang) = (YEAR(CURRENT_DATE) - 6)
UNION ALL
SELECT 
    COALESCE(SUM(CASE WHEN YEAR(ngay_dat_hang)=(YEAR(CURRENT_DATE)-5) THEN tong_tien ELSE 0 END), 0) AS nam_5_tong_tien
FROM 
    don_hang
WHERE 
    trang_thai LIKE 'Đã nhận'
    AND YEAR(ngay_dat_hang) = (YEAR(CURRENT_DATE) - 5)
UNION ALL
SELECT 
    COALESCE(SUM(CASE WHEN YEAR(ngay_dat_hang)=(YEAR(CURRENT_DATE)-4) THEN tong_tien ELSE 0 END), 0) AS nam_6_tong_tien
FROM 
    don_hang
WHERE 
    trang_thai LIKE 'Đã nhận'
    AND YEAR(ngay_dat_hang) = (YEAR(CURRENT_DATE) - 4)
UNION ALL
SELECT 
    COALESCE(SUM(CASE WHEN YEAR(ngay_dat_hang)=(YEAR(CURRENT_DATE)-3) THEN tong_tien ELSE 0 END), 0) AS nam_7_tong_tien
FROM 
    don_hang
WHERE 
    trang_thai LIKE 'Đã nhận'
    AND YEAR(ngay_dat_hang) = (YEAR(CURRENT_DATE) - 3)
UNION ALL
SELECT 
    COALESCE(SUM(CASE WHEN YEAR(ngay_dat_hang)=(YEAR(CURRENT_DATE)-2) THEN tong_tien ELSE 0 END), 0) AS nam_8_tong_tien
FROM 
    don_hang
WHERE 
    trang_thai LIKE 'Đã nhận'
    AND YEAR(ngay_dat_hang) = (YEAR(CURRENT_DATE) - 2)
UNION ALL
SELECT 
    COALESCE(SUM(CASE WHEN YEAR(ngay_dat_hang)=(YEAR(CURRENT_DATE)-1) THEN tong_tien ELSE 0 END), 0) AS nam_9_tong_tien
FROM 
    don_hang
WHERE 
    trang_thai LIKE 'Đã nhận'
    AND YEAR(ngay_dat_hang) = (YEAR(CURRENT_DATE) - 1)
UNION ALL
SELECT 
    COALESCE(SUM(CASE WHEN YEAR(ngay_dat_hang)=(YEAR(CURRENT_DATE)-0) THEN tong_tien ELSE 0 END), 0) AS nam_10_tong_tien
FROM 
    don_hang
WHERE 
    trang_thai LIKE 'Đã nhận'
    AND YEAR(ngay_dat_hang) = YEAR(CURRENT_DATE);

";
    $dh = pdo_query($sql);
    return $dh;
}
function load_trangthai_donhang($id)
{
    $sql = "SELECT * FROM `don_hang` WHERE id_don_hang = ".$id." order by id_don_hang desc";
    $dh = pdo_query_one($sql);
    return $dh;
}
function update_trangthai_donhang($id,$hoten,$trangthai,$ghichu,$diachi,$sdt)
{
    $sql = "UPDATE `don_hang` SET `trang_thai`='$trangthai' ,`ghi_chu`='$ghichu' ,`ten_nguoi_nhan`='$hoten' ,`sdt_nhan_hang`='$sdt', `dia_chi_giao_hang`='$diachi' where id_don_hang =".$id;
    pdo_execute($sql);
}
function nhanhang($id,$trangthai)
{
    $sql = "UPDATE `don_hang` SET `trang_thai`='$trangthai'  where id_don_hang =".$id;
    pdo_execute($sql);
}
function delete_donhang($id)
{
    $sql = "UPDATE `don_hang` SET `trang_thai`='Đã hủy' WHERE  id_don_hang =".$id;
    pdo_execute($sql);
}
function loadall_donhang_admin_chuanhan()
{
    $sql = "SELECT don_hang.id_don_hang, don_hang.ghi_chu, don_hang.ten_nguoi_nhan, nguoi_dung.ho_ten, don_hang.ngay_dat_hang, don_hang.tong_tien, don_hang.trang_thai
    FROM don_hang 
    JOIN nguoi_dung ON don_hang.id_nguoi_dung = nguoi_dung.id_nguoi_dung 
    WHERE don_hang.trang_thai <> 'Đã nhận' AND don_hang.trang_thai <> 'Đã hủy';";
    $dh = pdo_query($sql);
    return $dh;
}
function loadall_donhang_admin_danhan()
{
    $sql = "SELECT don_hang.id_don_hang, nguoi_dung.ho_ten,don_hang.ten_nguoi_nhan, don_hang.ngay_dat_hang, don_hang.tong_tien, don_hang.trang_thai
    FROM don_hang 
    JOIN nguoi_dung ON don_hang.id_nguoi_dung = nguoi_dung.id_nguoi_dung where don_hang.trang_thai like 'Đã nhận' or don_hang.trang_thai like 'Đã hủy'";
    $dh = pdo_query($sql);
    return $dh;
}
function load_ctdh($id)
{
    $sql = "SELECT sp.id_san_pham,sp.hinh, ctdh.so_luong,ctdh.trang_thai_binh_luan, ctdh.id_don_hang, ctdh.gia,ctdh.id_ctdh, ctdh.thanh_tien, sp.ten_san_pham, sp.hinh, sp.giam_gia
    FROM ctdh
    JOIN san_pham sp ON ctdh.id_san_pham = sp.id_san_pham WHERE id_don_hang =".$id;
    $dh = pdo_query($sql);
    return $dh;
}
function insert_ctdh($id_ctdh, $id_don_hang, $id_san_pham, $so_luong, $gia, $thanh_tien,$trang_thai_binh_luan)
{
    $sql = "INSERT INTO `ctdh`(`id_ctdh`,`id_don_hang`, `id_san_pham`, `so_luong`, `gia`, `thanh_tien`,`trang_thai_binh_luan`) 
    VALUES ('$id_ctdh','$id_don_hang','$id_san_pham','$so_luong','$gia','$thanh_tien','$trang_thai_binh_luan')";
    pdo_execute($sql);
}
function loadidmax_donhang()
{
    $sql = "SELECT *
    FROM don_hang
    ORDER BY id_don_hang DESC
    LIMIT 1;";
    $dh = pdo_query_one($sql);
    return $dh;
}
function loadidmax_ctdh()
{
    $sql = "SELECT *
    FROM ctdh
    ORDER BY id_ctdh DESC
    LIMIT 1;";
    $dh = pdo_query_one($sql);
    return $dh;
}
