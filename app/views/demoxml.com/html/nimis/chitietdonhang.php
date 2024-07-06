<section class="breadcumb_top_area">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="bread_top_box">
          <h2>histories</h2>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="breadcumb_area">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="bread_box">
          <ul class="breadcumb">
            <li><a href="index.php">home <span>|</span></a></li>
            <li><a href="#">Shop <span>|</span></a></li>
            <li class="active"><a href="#">cart</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="main_cart_area">
  <div class="container">

    <br>

    <table style="border: 1; border-collapse: collapse;">
      <tr>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Hình</th>
        <th>Số lượng</th>
        <th>Giá</th>
        <th>Thành tiền</th>
        <th>Chức năng</th>
      </tr>
      <tbody>
        <?php
        foreach ($load_ctdh as $donhang) {
          extract($ttdh);
          extract($donhang); ?>
          <div class="formdanhgia">
            <div class="modal" id="myModal">
              <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <div class="Review_input1">
                  <div class="review_input_heading">
                    <h3>Write your comment</h3>
                    <div class="multi_line"></div>
                  </div>
                  <div class="review_comment_input">
                    <?php
                    $guibinhluan = '';
                    if (isset($_SESSION['user']))
                      $guibinhluan = '<input type="submit" value="Submit Comment" name="themmoi" />';
                    else $guibinhluan = '<a href="/app/views/demoxml.com/html/nimis/login-form-20/login.php" class=""   onclick="return confirm(\' Vui lòng đăng nhập\')"><input type="button" value="Submit Comment" /></a>'
                    ?>
                    <form action="index.php?act=binhluan" method="post">
                      <?php
                      if (isset($_SESSION['user'])) if (is_array($onenguoidung)) extract($onenguoidung);
                      ?>
                      <input type="hidden" name="id_nguoi_dung" value="<?= $id_nguoi_dung ?>">
                      <input type="hidden" name="id_san_pham" value="<?= $id_san_pham ?>">
                      <input type="hidden" name="id_ctdh" value="<?= $id_ctdh ?>">
                      <input type="hidden" name="trang_thai_binh_luan" value="true">
                      <select name="loai_danh_gia" id="" style="border: 1px solid #d3d3d3;
    color: #333;
    font-size: 12px;
    height: 30px;
    margin-bottom: 10px;
	background: transparent none repeat scroll 0 0;
    padding: 0 10px;
    text-transform: uppercase;
    width: 100%;">
                        <option value="1">Rất tệ</option>
                        <option value="2">Tệ</option>
                        <option value="3">Không hài lòng</option>
                        <option value="4">Hài lòng</option>
                        <option value="5">Rất hài lòng</option>
                        <option value="6">Chưa mua</option>
                      </select><br>

                      <textarea name="noidung" id="" cols="30" rows="10" placeholder="Write your comment"></textarea><br>
                      <!-- <input type="submit" value="Submit Review" name="themmoi" /> -->
                      <?= $guibinhluan ?>

                    </form>
                  </div>
                </div>

              </div>
            </div>
          </div>
        <?php

          $mualai = "";
          $danhgia = "";

          $linksp = "index.php?act=product-detail&id_san_pham=" . $id_san_pham;

          if ($trang_thai == "Đã nhận" || $trang_thai == "Đã hủy") {
            $mualai = '<form action="index.php?act=mualai" method="post">
								<input type="hidden" name="id_san_pham" value="' . $id_san_pham . '">
										<input type="hidden" name="ten_san_pham" value="' . $ten_san_pham . '">
										<input type="hidden" name="hinh" value="' . $hinh . '">
										<input type="hidden" name="linksp" value="' . $linksp . '">	
										<input type="hidden" name="giam_gia" value="' . $giam_gia . '">	<input type="submit" value="Mua lại" name="mualai"  class="btnfunction"></form>';
          } else {
            $mualai = "";
          }
          if ($trang_thai_binh_luan !== 'true') {
            $danhgia = '<button class="btnfunction" onclick="openModal()">Đánh giá</button>';
          } else $danhgia = "";
          echo '<tr>
                                <td>' . $id_san_pham . '</td>
                                <td>' . $ten_san_pham . '</td>
                                <td><img src="/public/uploads/' . $hinh . '" alt="" style="height: 80px;"></td>
                                <td>' . $so_luong . '</td>
                                <td>$' . $gia . '</td>
                                <td>' . $thanh_tien . '</td>
                                <td>' . $danhgia . ' ' . $mualai . '</td>
                                </tr>
                                 
                                        
										
								 ';
        }

        ?> <?php
            $capnhat1 = '
        <div class="form-group">
            <label for="exampleInputEmail1">Tên người nhận</label>
            <input type="text" class="form-control" id="exampleInputEmail1" value="' . $ten_nguoi_nhan . '" name="hoten">
          </div><div class="form-group">
            <label for="exampleInputEmail1">Số điện thoại nhận hàng</label>
            <input type="text" class="form-control" id="exampleInputEmail1" value="' . $sdt_nhan_hang . '" name="sdt">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Địa chỉ nhận hàng</label>
            <input type="text" class="form-control" id="exampleInputEmail1" value="' . $dia_chi_giao_hang . '" name="diachi">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Ghi chú</label>
            <input type="text" class="form-control" id="exampleInputEmail1" value="' . $ghi_chu . '" name="ghichu">
          </div><input type="submit" value="Cập nhật" name="capnhat" class="btn btn-success"><br><br>';
            $capnhat2 = '
          <div class="form-group">
            
            <label for="exampleInputEmail1">Tên người nhận ' . $ten_nguoi_nhan . '</label>
          </div><div class="form-group">
          <input type="hidden" class="form-control" id="exampleInputEmail1" value="' . $sdt_nhan_hang . '" name="sdt">
<input type="hidden" class="form-control" id="exampleInputEmail1" value="' . $dia_chi_giao_hang . '" name="diachi">
          <div class="form-group">
          <label for="exampleInputEmail1">Số điện thoại nhận hàng: ' . $sdt_nhan_hang . '</label>
          
        </div><div class="form-group">
        <label for="exampleInputEmail1">Địa chỉ nhận hàng: ' . $dia_chi_giao_hang . '</label>
        
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Ghi chú: ' . $ghi_chu . '</label>
        
      </div>
        ';
            $capnhat4 = '
          <div class="form-group">
            
            <label for="exampleInputEmail1">Tên người nhận ' . $ten_nguoi_nhan . '</label>
          </div><div class="form-group">
          <label for="exampleInputEmail1">Số điện thoại nhận hàng: ' . $sdt_nhan_hang . '</label>
          
        </div><div class="form-group">
        <label for="exampleInputEmail1">Địa chỉ nhận hàng: ' . $dia_chi_giao_hang . '</label>
        
      </div><div class="form-group">
      <label for="exampleInputEmail1">Ghi chú: ' . $ghi_chu . '</label>
    </div>';
            ?>
        <form action="index.php?act=capnhatdonhang" method="post" class="ml-5">
          <br><input type="hidden" name="id" value="<?= $id_don_hang ?>"><input type="hidden" name="trangthai" value="<?= $trang_thai ?>">
          <!-- <input type="hidden" name="hoten" value="<?= $ten_nguoi_nhan ?>">
          
          <input type="hidden" name="diachi" value="<?= $dia_chi_giao_hang ?>">
          <input type="hidden" name="sdt" value="<?= $sdt_nhan_hang ?>"> -->
          <?php
          if ($trang_thai == "Chờ xác nhận" || $trang_thai == "Đang chuẩn bị hàng") echo $capnhat1;
          else 
if ($trang_thai == "Đang giao" || $trang_thai == "Đã nhận") echo $capnhat2;
          else echo $capnhat4;

          ?>



        </form>
      </tbody>
    </table>
  </div>
  <script>
    function openModal() {
      var modal = document.getElementById("myModal");
      modal.style.display = "block";
    }

    function closeModal() {
      var modal = document.getElementById("myModal");
      modal.style.display = "none";
    }
  </script>
</section>