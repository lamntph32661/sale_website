<nav class="main-header navbar navbar-expand navbar-white navbar-light">


  <div class="row" style="height: 20%;">
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box">
        <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

        <div class="info-box-content" style="width: 200px;">
          <span class="info-box-text">Danh mục</span>
          <span class="info-box-number"><?php echo $sldm ?></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box">
        <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

        <div class="info-box-content" style="width: 200px;">
          <span class="info-box-text">Sản phẩm</span>
          <span class="info-box-number"><?php echo $slsp ?></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box">
        <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

        <div class="info-box-content" style="width: 200px;">
          <span class="info-box-text">Tài khoản</span>
          <span class="info-box-number">13,648</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box">
        <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>

        <div class="info-box-content" style="width: 200px;">
          <span class="info-box-text">Likes</span>
          <span class="info-box-number">93,139</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>

    <!-- /.col -->
  </div>



  </div>
  <!-- /.row -->
</nav>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <div class="row w-100">
    <div class="col-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Biểu đồ</h3>

        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 100%; margin-bottom: 2%;">
          <div class="boxcharts" style="margin-top: 2%; display: flex; justify-content: space-around;">
            <div class="">
              <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
              <canvas id="myChart" style="width:130%"></canvas>

              <script>
                const now = new Date();
                const currentYear = now.getFullYear();
                const xValues = [currentYear - 9, currentYear - 8, currentYear - 7, currentYear - 6, currentYear - 5, currentYear - 4, currentYear - 3, currentYear - 2, currentYear - 1, currentYear];

                new Chart("myChart", {
                  type: "line",
                  data: {
                    labels: xValues,
                    datasets: [{
                        data: [
                          <?php

                          $tong = count($dh);
                          $i = 1;


                          foreach ($dh as $donhang) {
                            extract($donhang);
                            if ($i == $tong) $dauphay = "";
                            else $dauphay = ",";
                            echo $donhang['nam_1_tong_tien']  . $dauphay;
                            $i = $i + 1;
                          } ?>
                          //  , 2004, 200, 1060, 1060, 1070, 1110, 1330, 2210, 2000, 2478
                        ],
                        borderColor: "red",
                        fill: false
                      },
                      // {
                      //   data: [1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000],
                      //   borderColor: "green",
                      //   fill: false
                      // },
                      // {
                      //   data: [1600, 1700, 1000, 1900, 3000, 2700, 4000, 5000, 3000, 7000],
                      //   borderColor: "black",
                      //   fill: false
                      // }, {
                      //   data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100],
                      //   borderColor: "blue",
                      //   fill: false
                      // }
                    ]
                  },
                  options: {

                    legend: {
                      display: false
                    },
                    title: {
                      display: true,
                      text: 'Doanh thu trong 10 năm gần nhất'
                    }
                  }
                });
              </script>
            </div>
            <div class="">
              <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
              <canvas id="myChart2" style="width:130%;"></canvas>

              <script>
                const now2 = new Date();
                const currentYear2 = now2.getUTCMonth();
                // const xValues2 = [currentYear2 - 9, currentYear2 - 8, currentYear2 - 7, currentYear2 - 6, currentYear2 - 5, currentYear2 - 4, currentYear2 - 3, currentYear2 - 2, currentYear2 - 1, currentYear2];
                const xValues2 = [];
                for (let i = 30; i >= 1; i--) {
                  const previousDate = new Date(now);
                  previousDate.setDate(now.getDate() - i);
                  const dayOfMonth = previousDate.getDate();
                  xValues2.push(dayOfMonth);
                }
                new Chart("myChart2", {
                  type: "line",
                  data: {
                    labels: xValues2,
                    datasets: [
                      {
                        data: [
                          <?php

                              $tong = count($dh);
                              $i = 1;


                              foreach ($ngay as $donhang) {
                                extract($donhang);
                                if ($i == $tong) $dauphay = "";
                                else $dauphay = ",";
                                echo $donhang['tong_tien_ngay_1']  . $dauphay;
                                $i = $i + 1;
                              } 
                              ?>
                       //   200, 1060, 1060, 1070, 1110, 1330, 2210, 2000, 2478, 2004, 200, 1060, 1060, 1070, 1110, 1330, 2210, 2000, 2478, 2004, 200, 1060, 1060, 1070, 1110, 1330, 2210, 2000, 2478
                        ],
                        borderColor: "blue",
                        fill: false
                      },
                      // {
                      //   data: [1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000],
                      //   borderColor: "green",
                      //   fill: false
                      // },
                      // {
                      //   data: [1600, 1700, 1000, 1900, 3000, 2700, 4000, 5000, 3000, 7000],
                      //   borderColor: "black",
                      //   fill: false
                      // }, {
                      //   data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100],
                      //   borderColor: "blue",
                      //   fill: false
                      // }
                    ]
                  },
                  options: {
                    legend: {
                      display: false
                    },
                    title: {
                      display: true,
                      text: 'Doanh thu trong 30 ngày gần nhất'
                    }
                  }
                });
              </script>
            </div>
          </div>



          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <a href="index.php?act=bieudo"><input class="btn btn-primary" type="button" value="Xem biểu đồ" style="margin-left: 6px;"></a>
    </div>
    <!-- /.row -->
</nav>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
<div class="row w-100" style="height: 595px;">
    <div class="col-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Biểu đồ</h3>
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 200px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 500px;">
    <div id="piechart"></div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {
        'packages': ['corechart']
      });
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        // Set Data
        var data = google.visualization.arrayToDataTable([
          ['Danh mục', 'Số lượng sản phẩm'],
          <?php
          $tongdm = count($listthongke);
          $i = 1;
          foreach ($listthongke as $thongke) {
            extract($thongke);
            if ($i == $tongdm) $dauphay = "";
            else $dauphay = ",";
            echo "['" . $thongke['tendm'] . "'," . $thongke['countsp'] . "]" . $dauphay;
            $i = $i + 1;
          }
          ?>
        ]);
        // Set Options
        var options = {
          'title': 'Biểu đồ thống kê số lượng sản phẩm theo danh mục',
          'width': 600,
          'height': 500
        };
        // Draw
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>
  </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    
  </div>
  <!-- /.row -->
</nav>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <div class="row w-100" style="height: 595px;">
    <div class="col-12">
      <div class="card  card-primary">
        <div class="card-header">
          <h3 class="card-title">Thống kê sản phẩm</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 200px;">
            

            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 500px;">
          <table class="table table-head-fixed text-nowrap">
            <tr>
              <th>Mã sản phẩm</th>
              <th>Tên sản phẩm</th>
              <th>Ảnh</th>
              <th>Giá</th>
              <th>Danh mục</th>
              <th>Lượt bán</th>
              <th>Số lượng tồn kho</th>
              
            </tr>
            <?php
            foreach ($ban_chay as $ban) {
              extract($ban);
              echo '<tr>
                    <td>' . $id_san_pham . '</td>
                    <td>' . $ten_san_pham . '</td>
                    <td><img src="/public/uploads/' . $hinh . '" alt="" height="60px"></td>
                    <td>' . $giam_gia . '</td>
                    <td>' . $ten_danh_muc . '</td>
                    <td>' . $luot_ban . '</td>
                    <td>' . $so_luong . '</td>
                    
                </tr>';
            }
            ?>
          </table>
          </div>



          <!-- /.card-body -->
        <!-- /.card -->
      </div>
    </div>
    <!-- /.row -->
</nav>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <div class="row w-100">
    <div class="col-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Thống kê</h3>
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 200px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 500px;">

          <table class="table table-head-fixed text-nowrap">
            <tr>
              <th>Mã danh mục</th>
              <th>Tên danh mục</th>
              <th>Số lượng</th>
              <th>Giá cao nhất</th>
              <th>Giá thấp nhất</th>
              <th>Giá trung bình</th>
            </tr>
            <?php
            foreach ($listthongke as $tk) {
              extract($tk);
              echo '<tr>
                    <td>' . $madm . '</td>
                    <td>' . $tendm . '</td>
                    <td>' . $countsp . '</td>
                    <td>' . $maxprice . '</td>
                    <td>' . $minprice . '</td>
                    <td>' . $avgprice . '</td>
                </tr>';
            }
            ?>
          </table>
          <div class="row">


          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <a href="index.php?act=bieudo"><input class="btn btn-primary" type="button" value="Xem biểu đồ" style="margin-left: 6px;"></a>
    </div>
    <!-- /.row -->
</nav>