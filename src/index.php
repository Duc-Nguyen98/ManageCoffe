<?php include 'layout/header.php'; ?>

<!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">
                <a href="#" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                    <i class="fas fa-tachometer-alt fa-fw fa-lg me-2"></i><span>Bảng Điều Khiển</span>
                </a>
                <!-- Collapse 1 -->
                <a class="list-group-item list-group-item-action py-2 ripple" aria-current="true" data-mdb-collapse-init href="#collapseExample1" aria-expanded="true" aria-controls="collapseExample1">
                    <i class="fas fa-tachometer-alt fa-fw fa-lg me-2"></i><span>Người Dùng</span>
                </a>
                <!-- Collapsed content -->
                <ul id="collapseExample1" class="collapse show  list-group list-group-flush">
                    <li class="list-group-item py-1">
                        <a href="" class="text-reset">Tài Khoản</a>
                    </li>
                    <li class="list-group-item py-1">
                        <a href="" class="text-reset">Vai Trò</a>
                    </li>
                </ul>
                <!-- Collapse 1 -->
                <!-- Collapse 2 -->
                <a class="list-group-item list-group-item-action py-2 ripple" aria-current="true" data-mdb-collapse-init href="#collapseExample2" aria-expanded="true" aria-controls="collapseExample2">
                    <i class="fas fa-tachometer-alt fa-fw fa-lg me-2"></i>
                    <span>Nguyên Liệu
                        <i class="fas fa-circle-notch  float-end"></i>
                    </span>
                </a>

                <!-- Collapsed content -->
                <ul id="collapseExample2" class="collapse show  list-group list-group-flush">
                    <li class="list-group-item py-1">
                        <a href="" class="text-reset"><i class="fas fa-angles-right me-2 fa-sm"></i>Nguyên Liệu</a>
                    </li>
                    <li class="list-group-item py-1">
                        <a href="" class="text-reset"><i class="fas fa-angles-right me-2 fa-sm"></i>Danh Mục</a>
                    </li>
                    <li class="list-group-item py-1">
                        <a href="" class="text-reset"><i class="fas fa-angles-right me-2 fa-sm"></i>Thương Hiệu</a>
                    </li>
                </ul>
                <!-- Collapse 2 -->
                <!-- Collapse 3 -->
                <a class="list-group-item list-group-item-action py-2 ripple" aria-current="true" data-mdb-collapse-init href="#collapseExample3" aria-expanded="true" aria-controls="collapseExample3">
                    <i class="fas fa-tachometer-alt fa-fw fa-lg me-2"></i><span>Công Thức</span>
                </a>
                <!-- Collapsed content -->
                <!-- <ul id="collapseExample3" class="collapse  list-group list-group-flush">
                    <li class="list-group-item py-1">
                        <a href="" class="text-reset">Tài Khoản</a>
                    </li>
                    <li class="list-group-item py-1">
                        <a href="" class="text-reset">Vai Trò</a>
                    </li>
                </ul> -->
                <!-- Collapse 3 -->
                <!-- Collapse 4 -->
                <a class="list-group-item list-group-item-action py-2 ripple" aria-current="true" data-mdb-collapse-init href="#collapseExample4" aria-expanded="true" aria-controls="collapseExample4">
                    <i class="fas fa-tachometer-alt fa-fw fa-lg me-2"></i><span>Kho</span>
                </a>
                <!-- Collapsed content -->
                <!-- <ul id="collapseExample4" class="collapse  list-group list-group-flush">
                    <li class="list-group-item py-1">
                        <a href="" class="text-reset">Tài Khoản</a>
                    </li>
                    <li class="list-group-item py-1">
                        <a href="" class="text-reset">Vai Trò</a>
                    </li>
                </ul> -->
                <!-- Collapse 4 -->
                <!-- Collapse 5 -->
                <a class="list-group-item list-group-item-action py-2 ripple" aria-current="true" data-mdb-collapse-init href="#collapseExample5" aria-expanded="true" aria-controls="collapseExample5">
                    <i class="fas fa-tachometer-alt fa-fw fa-lg me-2"></i><span>Báo Cáo</span>
                </a>
                <!-- Collapsed content -->
                <!-- <ul id="collapseExample4" class="collapse  list-group list-group-flush">
                    <li class="list-group-item py-1">
                        <a href="" class="text-reset">Tài Khoản</a>
                    </li>
                    <li class="list-group-item py-1">
                        <a href="" class="text-reset">Vai Trò</a>
                    </li>
                </ul> -->
                <!-- Collapse 5 -->
            </div>
        </div>
    </nav>
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-collapse-init data-mdb-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Brand -->
            <a class="navbar-brand" href="#">
                <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="25" alt="MDB Logo" loading="lazy" />
            </a>
            <!-- Search form -->
            <form class="d-none d-md-flex input-group w-auto my-auto">
                <input autocomplete="off" type="search" class="form-control rounded" placeholder='Search (ctrl + "/" to focus)' style="min-width: 225px;" />
                <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
            </form>

            <!-- Right links -->
            <ul class="navbar-nav ms-auto d-flex flex-row">
                <!-- Notification dropdown -->
                <li class="nav-item dropdown">
                    <a data-mdb-dropdown-init class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-bell"></i>
                        <span class="badge rounded-pill badge-notification bg-danger">1</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Some news</a></li>
                        <li><a class="dropdown-item" href="#">Another news</a></li>
                        <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                    </ul>
                </li>
                <!-- Icon dropdown -->
                <li class="nav-item dropdown">
                    <a data-mdb-dropdown-init class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <i class="flag-united-kingdom flag m-0"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="#"><i class="flag-united-kingdom flag"></i>English
                                <i class="fa fa-check text-success ms-2"></i></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="flag-poland flag"></i>Polski</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="flag-china flag"></i>中文</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="flag-japan flag"></i>日本語</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="flag-germany flag"></i>Deutsch</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="flag-france flag"></i>Français</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="flag-spain flag"></i>Español</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="flag-russia flag"></i>Русский</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="flag-portugal flag"></i>Português</a>
                        </li>
                    </ul>
                </li>

                <!-- Avatar -->
                <li class="nav-item dropdown">
                    <a data-mdb-dropdown-init class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle" height="22" alt="Avatar" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">My profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main style="margin-top: 58px;">
    <div class="container-fluid py-4 my-5">
        <div class="row">
            <div class="col-3">
                <div class="card bg-primary bg-gradient text-white">
                    <div class="card-body">
                        <h5 class="card-title">$0</h5>
                        <p class="card-text">Thanh toán nhà cung cấp</p>
                    </div>
                    <a class="card-footer text-white text-center" href="#">Thêm thông tin <i class="fas fa-circle-right fa-lg"></i></a>
                </div>
            </div>
            <div class="col-3">
                <div class="card bg-danger bg-gradient text-white">
                    <div class="card-body">
                        <h5 class="card-title">$0</h5>
                        <p class="card-text">Thanh toán nhà cung cấp</p>
                    </div>
                    <a class="card-footer text-white text-center" href="#">Thêm thông tin <i class="fas fa-circle-right fa-lg"></i></a>

                </div>
            </div>
            <div class="col-3">
                <div class="card bg-success bg-gradient text-white">
                    <div class="card-body">
                        <h5 class="card-title">$0</h5>
                        <p class="card-text">Thanh toán nhà cung cấp</p>
                    </div>
                    <a class="card-footer text-white text-center" href="#">Thêm thông tin <i class="fas fa-circle-right fa-lg"></i></a>

                </div>
            </div>
            <div class="col-3">
                <div class="card bg-info bg-gradient text-white">
                    <div class="card-body">
                        <h5 class="card-title">$0</h5>
                        <p class="card-text">Thanh toán nhà cung cấp</p>
                    </div>
                    <a class="card-footer text-white text-center" href="#">Thêm thông tin <i class="fas fa-circle-right fa-lg"></i></a>

                </div>
            </div>

        </div>
        <div class="row my-3">
            <div class="card text-left">
                <div class="card-header"> <i class="fas fa-chart-line fa-lg"></i> Hoạt động gần đây
                </div>
                <div class="card-body">
                    <!-- Tabs navs -->
                    <ul class="nav nav-tabs mb-3" id="ex-with-icons" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a data-mdb-tab-init class="nav-link active" id="ex-with-icons-tab-1" href="#ex-with-icons-tabs-1" role="tab" aria-controls="ex-with-icons-tabs-1" aria-selected="true"><i class="fas fa-chart-pie fa-fw me-2"></i>Sales</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a data-mdb-tab-init class="nav-link" id="ex-with-icons-tab-2" href="#ex-with-icons-tabs-2" role="tab" aria-controls="ex-with-icons-tabs-2" aria-selected="false"><i class="fas fa-chart-line fa-fw me-2"></i>Subscriptions</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a data-mdb-tab-init class="nav-link" id="ex-with-icons-tab-3" href="#ex-with-icons-tabs-3" role="tab" aria-controls="ex-with-icons-tabs-3" aria-selected="false"><i class="fas fa-cogs fa-fw me-2"></i>Settings</a>
                        </li>
                    </ul>
                    <!-- Tabs navs -->

                    <!-- Tabs content -->
                    <div class="tab-content" id="ex-with-icons-content">

                        <div class="tab-pane fade show active" id="ex-with-icons-tabs-1" role="tabpanel" aria-labelledby="ex-with-icons-tab-1">
                            <!-- table 1 -->
                            <table class="table align-middle mb-0 bg-white table-hover">
                                <thead class="bg-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Position</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1">John Doe</p>
                                                    <p class="text-muted mb-0">john.doe@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">Software engineer</p>
                                            <p class="text-muted mb-0">IT department</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-success rounded-pill d-inline">Active</span>
                                        </td>
                                        <td>Senior</td>
                                        <td>
                                            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-info bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-eye fa-lg"></i>
                                            </button>
                                            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-primary bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-marker fa-lg"></i>

                                            </button>
                                            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-danger bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-recycle fa-lg"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://mdbootstrap.com/img/new/avatars/6.jpg" class="rounded-circle" alt="" style="width: 45px; height: 45px" />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1">Alex Ray</p>
                                                    <p class="text-muted mb-0">alex.ray@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">Consultant</p>
                                            <p class="text-muted mb-0">Finance</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary rounded-pill d-inline">Onboarding</span>
                                        </td>
                                        <td>Junior</td>
                                        <td>
                                            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-info bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-eye fa-lg"></i>
                                            </button>
                                            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-primary bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-marker fa-lg"></i>

                                            </button>
                                            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-danger bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-recycle fa-lg"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://mdbootstrap.com/img/new/avatars/7.jpg" class="rounded-circle" alt="" style="width: 45px; height: 45px" />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1">Kate Hunington</p>
                                                    <p class="text-muted mb-0">kate.hunington@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">Designer</p>
                                            <p class="text-muted mb-0">UI/UX</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-warning rounded-pill d-inline">Awaiting</span>
                                        </td>
                                        <td>Senior</td>
                                        <td>
                                            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-info bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-eye fa-lg"></i>
                                            </button>
                                            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-primary bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-marker fa-lg"></i>

                                            </button>
                                            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-danger bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-recycle fa-lg"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- end table 1 -->
                        </div>
                        <div class="tab-pane fade" id="ex-with-icons-tabs-2" role="tabpanel" aria-labelledby="ex-with-icons-tab-2">
                            <!-- table 2 -->
                            <table class="table align-middle mb-0 bg-white table-hover">
                                <thead class="bg-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Position</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1">John Doe</p>
                                                    <p class="text-muted mb-0">john.doe@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">Software engineer</p>
                                            <p class="text-muted mb-0">IT department</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-success rounded-pill d-inline">Active</span>
                                        </td>
                                        <td>Senior</td>
                                        <td>
                                            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-info bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-eye fa-lg"></i>
                                            </button>
                                            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-primary bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-marker fa-lg"></i>

                                            </button>
                                            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-danger bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-recycle fa-lg"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://mdbootstrap.com/img/new/avatars/6.jpg" class="rounded-circle" alt="" style="width: 45px; height: 45px" />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1">Alex Ray</p>
                                                    <p class="text-muted mb-0">alex.ray@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">Consultant</p>
                                            <p class="text-muted mb-0">Finance</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary rounded-pill d-inline">Onboarding</span>
                                        </td>
                                        <td>Junior</td>
                                        <td>
                                            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-info bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-eye fa-lg"></i>
                                            </button>
                                            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-primary bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-marker fa-lg"></i>

                                            </button>
                                            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-danger bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-recycle fa-lg"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://mdbootstrap.com/img/new/avatars/7.jpg" class="rounded-circle" alt="" style="width: 45px; height: 45px" />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1">Kate Hunington</p>
                                                    <p class="text-muted mb-0">kate.hunington@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">Designer</p>
                                            <p class="text-muted mb-0">UI/UX</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-warning rounded-pill d-inline">Awaiting</span>
                                        </td>
                                        <td>Senior</td>
                                        <td>
                                            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-info bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-eye fa-lg"></i>
                                            </button>
                                            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-primary bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-marker fa-lg"></i>

                                            </button>
                                            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-danger bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-recycle fa-lg"></i>
                                            </button>
                                        </td>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- end table 2 -->
                        </div>
                        <div class="tab-pane fade" id="ex-with-icons-tabs-3" role="tabpanel" aria-labelledby="ex-with-icons-tab-3">
                            <!-- table 3 -->
                            <table class="table align-middle mb-0 bg-white table-hover">
                                <thead class="bg-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Position</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1">John Doe</p>
                                                    <p class="text-muted mb-0">john.doe@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">Software engineer</p>
                                            <p class="text-muted mb-0">IT department</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-success rounded-pill d-inline">Active</span>
                                        </td>
                                        <td>Senior</td>
                                        <td>
                                            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-info bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-eye fa-lg"></i>
                                            </button>
                                            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-primary bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-marker fa-lg"></i>

                                            </button>
                                            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-danger bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-recycle fa-lg"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://mdbootstrap.com/img/new/avatars/6.jpg" class="rounded-circle" alt="" style="width: 45px; height: 45px" />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1">Alex Ray</p>
                                                    <p class="text-muted mb-0">alex.ray@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">Consultant</p>
                                            <p class="text-muted mb-0">Finance</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary rounded-pill d-inline">Onboarding</span>
                                        </td>
                                        <td>Junior</td>
                                        <td>
                                            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-info bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-eye fa-lg"></i>
                                            </button>
                                            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-primary bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-marker fa-lg"></i>

                                            </button>
                                            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-danger bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-recycle fa-lg"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://mdbootstrap.com/img/new/avatars/7.jpg" class="rounded-circle" alt="" style="width: 45px; height: 45px" />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1">Kate Hunington</p>
                                                    <p class="text-muted mb-0">kate.hunington@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">Designer</p>
                                            <p class="text-muted mb-0">UI/UX</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-warning rounded-pill d-inline">Awaiting</span>
                                        </td>
                                        <td>Senior</td>
                                        <td>
                                            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-info bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-eye fa-lg"></i>
                                            </button>
                                            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-primary bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-marker fa-lg"></i>

                                            </button>
                                            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-danger bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-recycle fa-lg"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- end table 3 -->
                        </div>
                    </div>
                    <!-- Tabs content -->
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-7">
                <div class="card text-left">
                    <div class="card-header">Báo cáo nhập xuất hàng (2024)</div>
                    <div class="card-body">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="card text-left">
                    <div class="card-header"> Top 5 nguyên liệu nhập (2024)
                    </div>
                    <div class="card-body">
                        <table class="table align-middle mb-0 bg-white table-hover">
                            <thead class="bg-light">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Money</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://mdbootstrap.com/img/new/avatars/6.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                            <div class="ms-3">
                                                <p class="fw-bold mb-1">Cà phê chồn</p>
                                                <p class="text-muted mb-0">Cà phê</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge badge-success rounded-pill d-inline">Active</span>
                                    </td>
                                    <td>$100000</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://mdbootstrap.com/img/new/avatars/6.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                            <div class="ms-3">
                                                <p class="fw-bold mb-1">Cà phê chồn</p>
                                                <p class="text-muted mb-0">Cà phê</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge badge-success rounded-pill d-inline">Active</span>
                                    </td>
                                    <td>$100000</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://mdbootstrap.com/img/new/avatars/6.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                            <div class="ms-3">
                                                <p class="fw-bold mb-1">Cà phê chồn</p>
                                                <p class="text-muted mb-0">Cà phê</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge badge-success rounded-pill d-inline">Active</span>
                                    </td>
                                    <td>$100000</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://mdbootstrap.com/img/new/avatars/6.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                            <div class="ms-3">
                                                <p class="fw-bold mb-1">Cà phê chồn</p>
                                                <p class="text-muted mb-0">Cà phê</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge badge-success rounded-pill d-inline">Active</span>
                                    </td>
                                    <td>$100000</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://mdbootstrap.com/img/new/avatars/6.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                            <div class="ms-3">
                                                <p class="fw-bold mb-1">Cà phê chồn</p>
                                                <p class="text-muted mb-0">Cà phê</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge badge-success rounded-pill d-inline">Active</span>
                                    </td>
                                    <td>$100000</td>
                                </tr>

                            </tbody>
                        </table>
                        <!-- end table 1 -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-7">
                <div class="card text-left">
                    <div class="card-header">Cảnh báo hàng tồn kho</div>
                    <div class="card-body">
                        <table class="table align-middle mb-0 bg-white table-hover">
                            <thead class="bg-light">
                                <tr>
                                    <th>#</th>
                                    <th>ID sản phẩ</th>
                                    <th>Tên</th>
                                    <th>Số lượng | Cảnh báo</th>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="fw-bold mb-1">AP-000002</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">Celeron Silver N5030 15.6"</p>
                                    </td>
                                    <td>
                                        <span class="badge badge-warning rounded-pill d-inline p-2 mx-1">21 Pcs</span>
                                        <span class="badge badge-danger rounded-pill d-inline p-2 mx-1">10 Pcs</span>

                                    </td>

                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="fw-bold mb-1">AP-000002</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">Celeron Silver N5030 15.6"</p>
                                    </td>
                                    <td>
                                        <span class="badge badge-warning rounded-pill d-inline p-2 mx-1">21 Pcs</span>
                                        <span class="badge badge-danger rounded-pill d-inline p-2 mx-1">10 Pcs</span>

                                    </td>

                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="fw-bold mb-1">AP-000002</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">Celeron Silver N5030 15.6"</p>
                                    </td>
                                    <td>
                                        <span class="badge badge-warning rounded-pill d-inline p-2 mx-1">21 Pcs</span>
                                        <span class="badge badge-danger rounded-pill d-inline p-2 mx-1">10 Pcs</span>

                                    </td>

                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="fw-bold mb-1">AP-000002</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">Celeron Silver N5030 15.6"</p>
                                    </td>
                                    <td>
                                        <span class="badge badge-warning rounded-pill d-inline p-2 mx-1">21 Pcs</span>
                                        <span class="badge badge-danger rounded-pill d-inline p-2 mx-1">10 Pcs</span>

                                    </td>

                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="fw-bold mb-1">AP-000002</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">Celeron Silver N5030 15.6"</p>
                                    </td>
                                    <td>
                                        <span class="badge badge-warning rounded-pill d-inline p-2 mx-1">21 Pcs</span>
                                        <span class="badge badge-danger rounded-pill d-inline p-2 mx-1">10 Pcs</span>

                                    </td>

                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="fw-bold mb-1">AP-000002</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">Celeron Silver N5030 15.6"</p>
                                    </td>
                                    <td>
                                        <span class="badge badge-warning rounded-pill d-inline p-2 mx-1">21 Pcs</span>
                                        <span class="badge badge-danger rounded-pill d-inline p-2 mx-1">10 Pcs</span>

                                    </td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="card text-left">
                    <div class="card-header">Thống kê (2024)</div>
                    <div class="card-body">
                        <canvas id="myChart2"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!--Main layout-->

<?php include 'layout/footer.php'; ?>