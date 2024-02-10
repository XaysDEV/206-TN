@extends('layout.index')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ຕິດຕາມອຸປະກອນ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">ຕິດຕາມອຸປະກອນ</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    {{-- <section class="content">

        <div class="card card-solid">
            <div class="card-body pb-0">

                @if (Auth::user()->rolename->name == 'admin')
                    <a class="btn btn-sm btn-primary" href="#">ເພີ່ມໃຫມ່</a> <br><br>
                @endif
                <div class="row">


                    @foreach ($data as $item)
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0"> </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="lead"><br>
                                            <h6><b>{{$item->rankname->name}} {{$item->name}} {{$item->firstname}} </b></b></h3>
                                            <h6><b>ຊື່ອຸປະກອນ: </b></b></h3>
                                                <p class="text-muted text-sm">
                                                    <h6><b>ຕຳແໜ່ງ: {{$item->party_responsibility}} </b></b></h4><br>
                                                <h6><b>ຕຳແໜ່ງ: </b></b></h4><br>
                                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i
                                                            class="fas fa-lg fa-building"></i></span>
                                                    <h6><b>ທີ່ຢູ່ປະຈຸບັນ:</b>
                                                </li>
                                                </h6>
                                                <li class="small"><span class="fa-li"><i
                                                            class="fas fa-lg fa-phone"></i></span>
                                                    <h6><b>ເບີໂທ:</b> </h6>
                                                </li>
                                            </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="../../{{$item->filepictute}}" alt=""class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="#" class="btn btn-sm bg-teal">
                                        <i class="fas fa-pencil-alt"></i> ແກ້ໄຂຂໍ້ມູນ
                                    </a>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="fas fa-trash"></i> ລືບຂໍ້ມູນ

                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                    @endforeach



                </div>
            </div>
        </div>
    </section> --}}

     <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                    @if (Auth::user()->rolename->name == 'admin')
                        <a class="btn btn-sm btn-primary" href="{{route('operator.create')}}">ເພີ່ມຜູ້ໃຊ້ລະບົບໃຫມ່</a>
                    @endif
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ລດ</th>
                            <th>ຮູບພາບອຸປະກອນ</th>
                            <th>ຊື່ ແລະ ຢີ່ຫໍ້ອຸປະກອນ</th>
                            <th>ລາຍລະອຽດ</th>
                            <th>ການຊ້ອມແປງ</th>

                            <th>ປູ່ມຄຳສັ່ງ</th>
                          </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt = 1;
                        @endphp
                        {{-- @foreach ($user as $item) --}}
                        <tr>
                            <td>{{$stt++}}</td>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>

                            <td>#</td>

                            <td>

                                  <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('ທ່ານຕ້ອງການລືມຫຼືບໍ?')"><i class="fas fa-trash"></i></button>
                                </form>


                            </td>

                        </tr>
                        {{-- @endforeach --}}

                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
@endsection
