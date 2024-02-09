@extends('layout.index')
@section('content')
  <!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0"></h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">ໜ້າທຳອິດ</li>
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
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <p>ພະນັກງານທັງໝົດມີ :</p>
              {{-- <h3>{{$count_employee}} ສະຫາຍ</h3> --}}
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">ເພີ່ມເຕີມ <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <p>ສິດນຳໃຊ້ມີ :</p>
                {{-- <h3>{{$count_role}} ຊິດ</h3> --}}
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">ເພີ່ມເຕີມ <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <p>ຜູ້ໃຊ້ລະບົບມີ :</p>
                {{-- <h3>{{$count_user}} ສະຫາຍ</h3> --}}
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
                <a href="#" class="small-box-footer">ເພີ່ມເຕີມ <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    {{-- <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-0">
                  <h3 class="card-title">ພະນັກງານໃຫມ່ ລ່າສຸດ</h3>
                  <div class="card-tools">
                    <a href="#" class="btn btn-tool btn-sm">
                      <i class="fas fa-download"></i>
                    </a>
                    <a href="#" class="btn btn-tool btn-sm">
                      <i class="fas fa-bars"></i>
                    </a>
                  </div>
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-striped table-valign-middle">
                    <thead>
                    <tr>
                      <th>ຊັ້ນ, ຊື່ ແລະ ນາມສະກຸນ</th>
                      <th>ເລກປະຈຳຕົວທະຫານ</th>
                      <th>ວັນເດືອນປີເກີດ</th>
                      <th>ລາຍລະອຽດ</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($new_emp as $item)
                    <tr>
                        <td>
                          <img src="{{asset($item->filepictute)}}" alt="Product 1" class="img-circle img-size-32 mr-2">
                          {{$item->rankname->name}} {{$item->name}} {{$item->firstname}}
                        </td>
                        <td>{{$item->codeid}}</td>
                        <td>{{$item->bod}}</td>
                        <td>
                          <a href="{{route('employee.index')}}" class="text-muted"> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                          </a>
                        </td>
                      </tr>
                    @endforeach

                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div> --}}
  </div>
</div>
<!-- /.content -->

@endsection
