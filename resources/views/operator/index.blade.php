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
                <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Home</a></li>
                <li class="breadcrumb-item active">ຕິດຕາມອຸປະກອນ</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <section class="content">

        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="row">


                    {{-- @foreach ($data as $item) --}}
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0"> </div>
                            <div class="card-body pt-0">
                                <div class="row">


                                    <div class="col-7">
                                        <h2 class="lead"><br>
                                            {{-- <h6><b>{{$item->rankname->name}} {{$item->name}} {{$item->firstname}} </b></b></h3> --}}
                                                <h6><b>ຊື່ອຸປະກອນ: </b></b></h3>
                                            <p class="text-muted text-sm">
                                                {{-- <h6><b>ຕຳແໜ່ງ: {{$item->party_responsibility}} </b></b></h4><br> --}}
                                            <h6><b>ຕຳແໜ່ງ:  </b></b></h4><br>
                                            {{-- <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i
                                                            class="fas fa-lg fa-building"></i></span>
                                                    <h6><b>ທີ່ຢູ່ປະຈຸບັນ:</b>
                                                </li>
                                                </h6>
                                                <li class="small"><span class="fa-li"><i
                                                            class="fas fa-lg fa-phone"></i></span>
                                                    <h6><b>ເບີໂທ:</b> </h6>
                                                </li>
                                            </ul> --}}
                                    </div>
                                    <div class="col-5 text-center">
                                        {{-- <img src="../../{{$item->filepictute}}" alt=""class="img-fluid"> --}}
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
                    {{-- @endforeach --}}



                </div>
            </div>
        </div>
    </section>
@endsection
