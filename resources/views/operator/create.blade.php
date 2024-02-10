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
    <section class="content">
        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="card card-default">

                    <div class="card-header">
                        <h3 class="card-title">
                            <h4 class="card-title">ເພີ່ມໃໝ່</h4>
                        </h3>
                    </div>
                    @if (count($errors) > 0)
                        <div class="card-body">
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                                <i class="icon fas fa-ban"> ມີບັນຫາ </i></br>
                                @foreach ($errors->all() as $error)
                                    {{ $error }} </br>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    <form>
                        {{-- <form method="POST" action="{{route('user.store')}}"> --}}
                        @csrf

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="address">ຮູບພາບອຸປະກອນ</label>
                                        <input type="text" class="form-control" name="address"
                                            placeholder="ຮູບພາບອຸປະກອນ">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="address">ຊື່ ແລະ ຢີ່ຫໍ້ອຸປະກອນ</label>
                                        <input type="text" class="form-control" name="address"
                                            placeholder="ຊື່ ແລະ ຢີ່ຫໍ້ອຸປະກອນ">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="address">ລາຍລະອຽດ</label>
                                        <input type="text" class="form-control" name="address" placeholder="ລາຍລະອຽດ">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>ການຊອ້ມແປງ</label>
                                        <select class="form-control select2" name="role_id" style="width: 100%;">
                                            @foreach ($opera_status as $rl)
                                    <option value="{{$rl->id}}">{{$rl->name}}</option>
                                @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">ບັນທຶກ</button>
                            <a class="btn btn-warning" href="{{ route('user.index') }}">ກັບຄືນ</a>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </section>
@endsection
