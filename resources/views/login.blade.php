<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ກອງພັນ206</title>

  <link rel="icon" type="image/png" href="{{asset('dist/img/armylogo.png')}}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <style>
    @font-face{
      font-family: saysettha;
      src: url({{asset('public\plugins\summernote\font\saysettha.ttf')}});
    }
    </style>
</head>
<body class="hold-transition login-page class="hold-transition sidebar-mini style="font-family: 'saysettha'" >
<div class="login-box">
  <div class="login-logo">
    <a target="_blank"><img src="{{asset('dist/img/armylogo.png')}}" height="90"><br></a>
    <a><b><h4></h4></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">ກະລຸນາເຂົ້າລະບົບກ່ອນໃຊ້ງານ!</p>

      <form action="{{route('login.store')}}" method="post">

        @csrf

        @if (count($errors)>0)
            <div class="card-body">
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hiddan="true">&times;</button>
                    <i class="icon fas fa-ban">ມີບັນຫາ </i></br>
                    @foreach ($errors->all() as $errors)
                    {{$errors}} </br>
                    @endforeach
                </div>
            </div>
        @endif
        @if (session('message'))
            <div class="alert alert-danger">
                {{session('massage')}}
            </div>
        @endif

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <button type="button" class="btn btn-primary">ID</button>
              </div>
          <input type="phone" class="form-control" name="phone"  placeholder="ID">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="#"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">ເຂົ້າລະບົບ</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
</body>
</html>
