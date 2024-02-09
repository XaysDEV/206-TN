<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ກອງພັນ206</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition layout-top-nav">
    <body class="hold-transition layout-top-nav class="hold-transition sidebar-mini style="font-family: 'saysettha'">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-dark">
    <div class="container">
      <a class="navbar-brand">
        <img src="{{asset('dist/img/armylogo.png')}}" class="brand-image img-circle elevation-1" style="opacity: 10">
        <span class="brand-text font-weight-light">ສູນຄຸ້ມຄອງຂໍ້ມູນ ແລະ ຂ່າວສານ ສູນ206</span>
      </a>
      </button>

    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="text-center"> ບັນດາພະແນກການ <small>ສູນ 206</small></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
            <div class="col-lg-4 col-6">
              <!-- small card -->
              <div class="small-box bg-info">
                <div class="inner">
                  <p> <h4>ພະແນການເມືອງ</h4></p>
                </div>
                <div class="icon">
                  <i class="fas fa-chart-pie"></i>
                </div>
                {{-- <a href="{{route('login.index')}}" class="small-box-footer"> --}}
                  ເຂົ້າສູ່ລະບົບ  <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
              <!-- small card -->
              <div class="small-box bg-success">
                <div class="inner">


                  <p><h4>ພະແນກເສນາ</h4></p>
                </div>
                <div class="icon">
                  <i class="fas fa-chart-pie"></i>
                </div>
                <a href="#" class="small-box-footer">
                ເຂົ້າສູ່ລະບົບ  <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
              <!-- small card -->
              <div class="small-box bg-warning">
                <div class="inner">
                    <p><h4>ພະແນກເຕັກນິກສື່ສານ</h4></p>
                </div>
                <div class="icon">
                  <i class="fas fa-chart-pie"></i>
                </div>
                   <a href="{{route('login.index')}}" class="small-box-footer">
                    ເຂົ້າສູ່ລະບົບ <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
            <!-- ./col -->

            <!-- ./col -->
          </div>

          <div class="row">
           <div class="col-lg-4 col-6">
              <!-- small card -->
              <div class="small-box bg-warning">
                <div class="inner">
                    <p><h4>ພະແນກເຕັກນິກສື່ສານ</h4></p>
                </div>
                <div class="icon">
                  <i class="fas fa-chart-pie"></i>
                </div>
                <a href="#" class="small-box-footer">
                    ເຂົ້າສູ່ລະບົບ <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-3 ">
              <!-- small card -->
              <div class="small-box bg-secondary">
                <!-- Loading (remove the following to stop the loading)-->
                {{-- <div class="overlay dark">
                  <i class="fas fa-3x fa-sync-alt"></i>
                </div> --}}
                <!-- end loading -->
                <div class="inner">
                    <p><h4>ພະແນກບໍລິຫານ</h4></p>
                </div>
                <div class="icon">
                  <i class="fas fa-chart-pie"></i>
                </div>
                <a href="#" class="small-box-footer">
                  ເຂົ້າສູ່ລະບົບ <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>

            <div class="col-lg-4 col-6">
                <!-- small card -->
                <div class="small-box bg-danger">
                  <div class="inner">
                      <p><h4>ພະແນກເຕັກນິກ</h4></p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-chart-pie"></i>
                  </div>
                  <a href="#" class="small-box-footer">
                      ເຂົ້າສູ່ລະບົບ <i class="fas fa-arrow-circle-right"></i>
                  </a>
                </div>
              </div>
            <!-- ./col -->
          </div>
      </div><!-- /.container-fluid -->
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
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
        ສູນ 206 ກົມສື່ສານ | version 0.0.1
    </div>
    <!-- Default to the left -->
    <strong>ພັດທະນາໂດຍ: ຊັ້ນ I ໄຊຍະພອນ ຈັນມາລາດ</a>.</strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
</body>
</html>
