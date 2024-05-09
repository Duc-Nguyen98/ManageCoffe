<?php include 'layout/header.php'; ?>
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