@extends('layout.index')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>ຜູ້ໃຊ້ລະບົບ</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">ໜ້າແລກ</a></li>
            <li class="breadcrumb-item active">ຜູ້ໃຊ້ລະບົບ</li>
          </ol>
        </div>
      </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid">
        <div class="col-lg-12">
          <div class="card card-default">

            <div class="card-header">
              <h3 class="card-title"><h4 class="card-title">ແກ້ໄຂ</h4></h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>

            @if(count($errors)>0)
              <div class="card-body">
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <i class="icon fas fa-ban"> ມີບັນຫາ </i></br>
                  @foreach($errors->all() as $error)
                  {{$error}} </br>
                  @endforeach
                </div>
              </div>
            @endif

            <form method="POST" action="{{route('user.update', $user->id)}}">
                @csrf
                @method('PATCH')

                <div class="card-body">

                  <div class="row">
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                              <label for="rank">ຊັ້ນ</label>
                              <select class="form-control select2" name="rank_id" value="{{$user->rank_id}}" style="width: 100%;">
                                @foreach($rank as $rl)
                                    <option value="{{$rl->id}}">{{$rl->name}}</option>
                                @endforeach


                              </select>
                            </div>
                          </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="username">ຊື່ ແລະ ນາມສະກຸນ</label>
                                <input type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="ຊື່ ແລະ ນາມສະກຸນ">
                              </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                              <label for="password">ລະຫັດຜ່ານ</label>
                              <input type="password" class="form-control" name="password"  placeholder="ລະຫັດຜ່ານ">
                            </div>
                          </div>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                              <label for="phone">ເບີໂທລະສັບ</label>
                              <input type="text" class="form-control" name="phone" value="{{$user->phone}}"  placeholder="ເບີໂທລະສັບ">
                            </div>
                          </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="confirmpassword">ຢືນຢັນລະຫັດຜ່ານ</label>
                            <input type="password" class="form-control" name="confirmpassword"  placeholder="ຢືນຢັນລະຫັດຜ່ານ">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-9">
                      <div class="form-group">
                        <label for="address">ທີ່ຢູ່</label>
                        <input type="text" class="form-control" name="address" value="{{$user->address}}" placeholder="ທີ່ຢູ່">
                      </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                          <label>ສິດນຳໃຊ້ລະບົບ</label>
                          <select class="form-control select2" name="role_id" style="width: 100%;">
                            @foreach($role as $rl)
                                <option
                                @if ($user->role_id = $rl->id)
                                    {{'selected'}}
                                @endif
                                 value="{{$rl->id}}">{{$rl->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                  </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">ບັນທຶກ</button>
                    <a class="btn btn-warning" href="{{route('user.index')}}" >ກັບຄືນ</a>
                </div>
            </form>

          </div>

      </div>
    </div>
  </section>
@endsection
