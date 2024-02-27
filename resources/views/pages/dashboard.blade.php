<!DOCTYPE html>
<html lang="en" style="height: 100% !important;">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 3</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>

<style>
  .small-box {
    background-color: white !important;
    border: 1px solid rgb(245, 242, 242);
  }

  .inner {
    color: black !important;
  }

  .icon i {
    color: rgb(68, 65, 65) !important;
  }

  .small-box-footer {
    background-color: #090909;
    color: white;
  }

  .bg-black {
    background-color: #021829 !important;
    color: white;
  }

  .dataTab {
    scrollbar-width: thin;
    scrollbar-color: blue black;
  }

  .dataTab::-webkit-scrollbar {
    width: 6px;
  }

  .dataTab::-webkit-scrollbar-thumb {
    background-color: blue;
  }

  .dataTab::-webkit-scrollbar-track {
    background-color: white;
  }
</style>

<style>
  @media (max-width: 1024px) {
    .hidden-mobile {
      display: none;
    }
  }

  .activedot {
    display: inline-block;
    position: relative;
    top: 0.8rem;
    right: 0.7rem;
    background-color: yellowgreen;
    border-radius: 50%;
    height: 10px !important;
    width: 10px !important;
  }
</style>


<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-secondary navbar-light text-sm"
      style="height:58px; background-color: #26618e !important;">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-light" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
          <a class="nav-link text-light" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <!-- <li class="nav-item">
        <a class="nav-link text-light" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
        <li class="nav-item hidden-mobile">
          <div class="user-panel  d-flex">
            <div class="image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              <span class="activedot"></span>
            </div>
            <div class="info">
              <a href="#" class="d-block text-white">Alexander Pierce</a>
            </div>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-secondary elevation-4"
      style="background-color: #021829 !important; height: 100vh !important;">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link text-light" style="background-color: #26618e !important;">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-normal text-white">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar" style="position: relative !important; overflow-y: auto !important;">

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-flat" data-widget="treeview" role="menu"
            data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="./main-index.html" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p> Dashboard </p>
              </a>
            </li>





            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-user"></i>
                <p>
                  User Details
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./addUser.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add User</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./View-User.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Users</p>
                  </a>
                </li>

              </ul>
            </li>




            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                  Complaint
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./addComplaint.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Complaint</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./PIA.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View PIA Complaint</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="District-Je-Ae.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View District Complaint</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./Breda-Admin.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Breda Complaint</p>
                  </a>
                </li>

              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-power-off"></i>
                <p> Logout </p>
              </a>
            </li>
          </ul>
          </li>
          </ul>
          </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper"
      style="height: max-content !important; max-height: max-content !important; min-height: calc(100vh - calc(3.5rem + 1px) - calc(3.5rem + 1px)) !important;">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active text-bold">Dashboard </li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-12">
              <div class="row">
                <div class="col-6">
                  <!-- small box -->
                  <div class="small-box">
                    <div class="icon">
                      <i class="fa fa-envelope" style="color: #2b4d74 !important;"></i>
                    </div>
                    <div class="inner">
                      <h3>150</h3>
                      <p>Total Complaints</p>
                    </div>
                    <a href="#" class="small-box-footer"
                      style="background-color: #2b4d74 !important; color: white !important;">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-6">
                  <!-- small box -->
                  <div class="small-box">
                    <div class="inner">
                      <h3>
                        53<sup style="font-size: 20px">%</sup>
                      </h3>
                      <p>Complaints Resolved</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-check" style="color: #023E88 !important;"></i>
                    </div>
                    <a href="#" class="small-box-footer"
                      style="background-color: #023E88 !important; color: white !important; ">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-6">
                  <!-- small box -->
                  <div class="small-box">
                    <div class="inner">
                      <h3>44</h3>
                      <p>Monthly Complaints</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-envelope-open " style="color: #1E90FF  !important;"></i>
                    </div>
                    <a href="#" class="small-box-footer"
                      style="background-color: #1E90FF !important; color: white !important;">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-6">
                  <!-- small box -->
                  <div class="small-box">
                    <div class="inner">
                      <h3>65</h3>
                      <p>Monthly  Resolved</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-check-circle" style="color: #013A63 !important;"></i>
                    </div>

                    <a href="#" class="small-box-footer "
                      style="background-color: #013A63 !important; color: white !important;">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <div class="col-6">
                  <!-- small box -->
                  <div class="small-box">
                    <div class="inner">
                      <h3>65</h3>
                      <p>Today's Complaints</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-envelope-square" style="color: #000080 !important;"></i>
                    </div>

                    <a href="#" class="small-box-footer"
                      style="background-color:#000080 !important; color: white !important;">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <div class="col-6">
                  <!-- small box -->
                  <div class="small-box">
                    <div class="inner">
                      <h3>65</h3>
                      <p>Today's  Resolved</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-check-square" style="color: #0019fd !important;"></i>
                    </div>

                    <a href="#" class="small-box-footer "
                      style="background-color: #0019fd !important;color: white !important;">More info <i
                        class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-lg-6 col-12">
              <div class="card p-2" id="pie">
                <h5 class="pl-3 pt-2">State Wise Complaints Donut Graph</h5>
                <div id="chart2"></div>

              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6 col-6">
              <div class="card p-2" id="bar">
                <h5 class="pl-3 pt-2">State Wise Bar Complaints</h5>
                <div id="chart"></div>
              </div>
            </div>

            <div class="col-lg-6 col-6">
              <div class="card " style='height: 500px'>
                <div class=" card-header " style="background-color: #002951; color: white;">
                  <h5>State Wise Complaints</h5>
                </div>
                <div class=" card-body dataTab" style=" overflow-y: auto">
                  <table class=" table table-bordered table-hover">
                    <thead class="" style="background-color: #4098f1; color: white;">
                      <tr>
                        <th>State</th>
                        <th>Number of Complaint</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Bihar</td>
                        <td>200</td>
                      </tr>
                      <tr>
                        <td>Bihar</td>
                        <td>200</td>
                      </tr>
                      <tr>
                        <td>Bihar</td>
                        <td>200</td>
                      </tr>
                      <tr>
                        <td>Bihar</td>
                        <td>200</td>
                      </tr>
                      <tr>
                        <td>Bihar</td>
                        <td>200</td>
                      </tr>
                      <tr>
                        <td>Bihar</td>
                        <td>200</td>
                      </tr>
                      <tr>
                        <td>Bihar</td>
                        <td>200</td>
                      </tr>


                    </tbody>
                    <tfoot>
                      <tr>
                        <th>State</th>
                        <th>Total number of Complaint</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>

            </div>

          </div>


        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
      </div>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE -->
  <script src="dist/js/adminlte.js"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard3.js"></script>
  <script>
    (function destroy() {
      document.getElementById('sidebar-overlay').remove();
    })();
  </script>
  <script>
    var options = {
      series: [{
        data: [44, 55, 41, 64, 22, 43, 21]
      }, {
        data: [53, 32, 33, 52, 13, 44, 32]
      }],
      chart: {
        type: 'bar',
        height: 430
      },
      plotOptions: {
        bar: {
          horizontal: false,
          dataLabels: {
            position: 'top',
          },
          barWidth: '10px',
        }
      },
      colors: ['#1E90FF', '#032174'],
      dataLabels: {
        enabled: true,
        offsetX: 0,
        offsetY: -15,
        style: {
          fontSize: '12px',
          colors: ['#000000']
        }
      },
      stroke: {
        show: true,
        width: 1,
        colors: ['#fff']
      },
      tooltip: {
        shared: true,
        intersect: false
      },
      xaxis: {
        categories: [2001, 2002, 2003, 2004, 2005, 2006, 2007],
      },
    };
    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
  </script>

  <script>
    var options = {
      series: [44, 55, 13, 43, 22],
      chart: {
        toolbar: {
          show: true,
          tools: {
            download: true,
          },
        },
        width: '100%',
        height: '450px',
        type: 'donut',
      },
      dataLabels: {
        enabled: true,
      },
      fill: {
        type: 'solid',
      },
      legend: {
        position: 'bottom'
      },
      labels: ['Team A', 'Team B', 'Team C', 'Team D', 'Team E'],
      colors: ['#000080', '#032174', '#1E90FF', '#023E88', '#013A63'],
      responsive: [{
        breakpoint: 450,
        options: {
          chart: {
            width: '80%'
          },
        }
      }]
    };

    var chart = new ApexCharts(document.querySelector("#chart2"), options);
    chart.render();

    let bar = document.getElementById('bar').clientHeight;
    bar = parseFloat(bar).toFixed(2);
    console.log(bar);
    document.getElementById('pie').setAttribute("style", `height:${470}px`);
  </script>

</body>

</html>