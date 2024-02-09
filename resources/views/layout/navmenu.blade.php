<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard.index') }}" class="brand-link">
        <img src="{{ asset('dist/img/armylogo.png') }}" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">ພະແນກເຕັກນິກສື່ສານ</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dashboard.index') }}"
                        class="nav-link {{ request()->routeIs('dashboard.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a href="{{ route('employee.index') }}"
                        class="nav-link {{ request()->routeIs('employee.index') ? 'active' : '' }}">
                        <i class="nav-icon far fa-address-card"></i>
                        <p>ຂໍ້ມູນພະນັກງານ</p>
                    </a>
                </li> --}}

                {{-- <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                        ພະນັກງານຕາມຊັ້ນ
                        <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <li class="nav-item">
                            <a href="{{route('lieutenant_colonel.index')}}" class="nav-link {{(request()->routeIs('lieutenant_colonel.index')) ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>ພະນັກງານຊັ້ນ ພັ.ທ:</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('major_lieutenant.index')}}" class="nav-link {{(request()->routeIs('major_lieutenant.index')) ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>ພະນັກງານຊັ້ນ ພັ.ຕ:</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('major_lieutenant.index')}}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>ພະນັກງານຊັ້ນ ຮ.ອ:</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>ພະນັກງານຊັ້ນ ຮ.ທ:</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>ພະນັກງານຊັ້ນ ຮ.ຕ:</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>ພະນັກງານຊັ້ນ ສ.ອ:</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>ພະນັກງານຊັ້ນ ສ.ທ:</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>ພະນັກງານຊັ້ນ ສ.ຕ:</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>ພະນັກງານຊັ້ນ ຊ.I:</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>ພະນັກງານຊັ້ນ ຊ.II:</p>
                            </a>
                        </li>
                    </li>
                </ul>
            </li> --}}

                {{-- <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            ພະນັກງານຕາມຊັ້ນ
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">

                                <a href="{{route('lieutenant_colonel.index')}}" class="nav-link {{(request()->routeIs('lieutenant_colonel.index')) ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ພະນັກງານຊັ້ນ ພັ.ທ:</p>
                            </a>
                        </li>
                        <li class="nav-item">

                            <a href="{{route('major_lieutenant.index')}}" class="nav-link {{(request()->routeIs('major_lieutenant.index')) ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ພະນັກງານຊັ້ນ ພັ.ຕ:</p>
                            </a>
                        </li>
                        <li class="nav-item">
                             <a href="{{route('Captain.index')}}" class="nav-link {{(request()->routeIs('Captain.index')) ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ພະນັກງານຊັ້ນ ຮ.ອ:</p>
                            </a>
                        </li>
                        <li class="nav-item">

                                <a href="{{route('lieutenant.index')}}" class="nav-link {{(request()->routeIs('lieutenant.index')) ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ພະນັກງານຊັ້ນ ຮ.ທ:</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('sub_lieutenant.index')}}" class="nav-link {{(request()->routeIs('sub_lieutenant.index')) ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ພະນັກງານຊັ້ນ ຮ.ຕ:</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('mishipman.index')}}" class="nav-link {{(request()->routeIs('mishipman.index')) ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ພະນັກງານຊັ້ນ ວ.ທ:</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('sergeant.index')}}" class="nav-link {{(request()->routeIs('sergeant.index')) ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ພະນັກງານຊັ້ນ ສ.ອ:</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('corporal.index')}}" class="nav-link {{(request()->routeIs('corporal.index')) ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ພະນັກງານຊັ້ນ ສ.ທ:</p>
                            </a>
                        </li>
                        <li class="nav-item">

                            <a href="{{route('lance_coporals.index')}}" class="nav-link {{(request()->routeIs('lance_coporals.index')) ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ພະນັກງານຊັ້ນ ສ.ຕ:</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('one_class.index')}}" class="nav-link {{(request()->routeIs('one_class.index')) ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ພະນັກງານຊັ້ນ ຊ.I:</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('two_class.index')}}" class="nav-link {{(request()->routeIs('two_class.index')) ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ພະນັກງານຊັ້ນ ຊ.II:</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}



                {{-- <li class="nav-item">
                <a href="#" class="nav-link {{(request()->routeIs('')) ? 'active' : ''}}">
                    <i class="nav-icon far fa-chart-bar"></i>
                    <p>ວຽກງານນະໂຍບາຍ</p>
                </a>
            </li> --}}
            {{-- <li class="nav-item">
                <a href="#" class="nav-link {{(request()->routeIs('')) ? 'active' : ''}}">
                  <i class="nav-icon fas fa-columns"></i>
                  <p>ວຽກງານປະກັນສັງຄົມ</p>
                </a>
              </li> --}}
                 {{-- <li class="nav-item">
                <a href="#" class="nav-link {{(request()->routeIs('#')) ? 'active' : ''}}">
                  <i class="nav-icon fas fa-business-time"></i>
                  <p>ຕຳແໜ່ງງານແລະການຈັດຕັ້ງ</p>
                </a>
              </li> --}}
                {{-- <li class="nav-item">
                <a href="#" class="nav-link {{(request()->routeIs('status.index')) ? 'active' : ''}}">
                  <i class="nav-icon fas fa-socks"></i>
                  <p>ສະຖານະພາບ</p>
                </a>
              </li> --}}
                {{-- <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-city"></i>
                  <p>
                    ທີ່ຢູ່: ບ້ານ, ເມືອງ, ແຂວງ
                    <i class="fas fa-angle-left right"></i>
                    <span class="badge badge-info right"></span>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link {{(request()->routeIs('village.index')) ? 'active' : ''}}">
                      <i class="nav-icon fas fa-home"></i>
                      <p>ຂໍ້ມູນບ້ານ</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link {{(request()->routeIs('province.index')) ? 'active' : ''}}">
                      <i class="nav-icon fas fa-home"></i>
                      <p>ຂໍ້ມູນເມືອງ</p>
                    </a>
                  </li>
                  <li class="nav-item{{(request()->routeIs('province.index')) ? 'active' : ''}}">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-home"></i>
                      <p>ຂໍ້ມູນແຂວງ</p>
                    </a>
                  </li>
                </ul>
              </li> --}}

                <!--setting-->

                <li class="nav-item">
                    <a href="{{route('operator.index')}}"
                        class="nav-link {{(request()->routeIs('operator.index') ? 'active' : '')}} ">
                        <i class="nav-icon fas fa-database"></i>
                        <p>ຕິດຕາມອຸປະກອນ</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('role.index')}}"
                        class="nav-link {{ request()->routeIs('role.index') ? 'active' : '' }} ">
                        <i class="nav-icon fas fa-user-lock"></i>
                        <p>ສິດນຳໃຊ້ລະບົບ</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href=" {{route('user.index') }}"
                        class="nav-link  {{ request()->routeIs('user.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>ຜູ້ໃຊ້ລະບົບ</p>
                    </a>
                </li>
            </ul>
        </nav>







    </div>
    <!-- /.sidebar -->
</aside>
