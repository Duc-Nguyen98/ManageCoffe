<?php include 'layout/header.php'; ?>
<!--Main layout-->
<main style="margin-top: 58px;">
    <div class="container-fluid py-4 my-5">
        <div class="row">
            <div class="col-12">
                <div class="card text-center">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title text-left mb-0">Bảng Công Thức</h5>
                        <div class="exportAction">
                            <button type="button" class="btn btn-success" data-mdb-ripple-init><i class="fas fa-file-excel fa-lg"></i> Excel</button>
                            <button type="button" class="btn btn-danger" data-mdb-ripple-init><i class="far fa-file-pdf fa-lg"></i> PDF</button>
                            <button type="button" class="btn btn-info" data-mdb-ripple-init> <i class="fas fa-file-arrow-up fa-lg"></i> Import</button>
                            <button type="button" class="btn btn-primary" data-mdb-ripple-init><i class="fas fa-folder-plus fa-lg"></i> Thêm Mới</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Tabs navs -->
                        <ul class="nav nav-tabs mb-3" id="ex-with-icons" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a data-mdb-tab-init class="nav-link active" id="ex-with-icons-tab-1" href="#ex-with-icons-tabs-1" role="tab" aria-controls="ex-with-icons-tabs-1" aria-selected="true"><i class="fas fa-sitemap fa-fw me-2"></i>Xem Dạng Lưới</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a data-mdb-tab-init class="nav-link" id="ex-with-icons-tab-2" href="#ex-with-icons-tabs-2" role="tab" aria-controls="ex-with-icons-tabs-2" aria-selected="false"><i class="fas fa-border-all  fa-fw me-2"></i>Xem Dạng Bảng</a>
                            </li>
                        </ul>
                        <!-- Tabs navs -->

                        <!-- Tabs content -->
                        <div class="tab-content" id="ex-with-icons-content">
                            <div class="tab-pane fade show active" id="ex-with-icons-tabs-1" role="tabpanel" aria-labelledby="ex-with-icons-tab-1">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="card">
                                            <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                                                <img src="https://images.unsplash.com/photo-1551499779-ee50f1aa4d25?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" />
                                                <a href="#!">
                                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title text-capitalize"><b class="text-primary">EST:</b> Cà phê muối</h5>
                                                <p class="card-text">Một loại thức uống được làm từ những nguyên liệu và gia vị cơ bản như cà phê...</p>
                                                <div class="exportAction">
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-info bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Xem thêm" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-eye fa-lg"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-primary bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Chỉnh Sửa" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-marker fa-lg"></i>

                                                    </button>
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-danger bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Xóa" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-recycle fa-lg"></i>
                                                    </button>
                                                </div>
                                                <div class="my-3 text-muted"><b>Cập Nhật: </b> <i>10:20:30 - 03/05/2024</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="card">
                                            <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                                                <img src="https://images.unsplash.com/photo-1551499779-ee50f1aa4d25?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" />
                                                <a href="#!">
                                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title text-capitalize"><b class="text-primary">EST:</b> Cà phê muối</h5>
                                                <p class="card-text">Một loại thức uống được làm từ những nguyên liệu và gia vị cơ bản như cà phê...</p>
                                                <div class="exportAction">
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-info bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Xem thêm" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-eye fa-lg"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-primary bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Chỉnh Sửa" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-marker fa-lg"></i>

                                                    </button>
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-danger bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Xóa" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-recycle fa-lg"></i>
                                                    </button>
                                                </div>
                                                <div class="my-3 text-muted"><b>Cập Nhật: </b> <i>10:20:30 - 03/05/2024</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="card">
                                            <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                                                <img src="https://images.unsplash.com/photo-1551499779-ee50f1aa4d25?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" />
                                                <a href="#!">
                                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title text-capitalize"><b class="text-primary">EST:</b> Cà phê muối</h5>
                                                <p class="card-text">Một loại thức uống được làm từ những nguyên liệu và gia vị cơ bản như cà phê...</p>
                                                <div class="exportAction">
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-info bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Xem thêm" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-eye fa-lg"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-primary bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Chỉnh Sửa" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-marker fa-lg"></i>

                                                    </button>
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-danger bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Xóa" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-recycle fa-lg"></i>
                                                    </button>
                                                </div>
                                                <div class="my-3 text-muted"><b>Cập Nhật: </b> <i>10:20:30 - 03/05/2024</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="card">
                                            <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                                                <img src="https://images.unsplash.com/photo-1551499779-ee50f1aa4d25?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" />
                                                <a href="#!">
                                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title text-capitalize"><b class="text-primary">EST:</b> Cà phê muối</h5>
                                                <p class="card-text">Một loại thức uống được làm từ những nguyên liệu và gia vị cơ bản như cà phê...</p>
                                                <div class="exportAction">
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-info bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Xem thêm" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-eye fa-lg"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-primary bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Chỉnh Sửa" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-marker fa-lg"></i>

                                                    </button>
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-danger bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Xóa" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-recycle fa-lg"></i>
                                                    </button>
                                                </div>
                                                <div class="my-3 text-muted"><b>Cập Nhật: </b> <i>10:20:30 - 03/05/2024</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="card">
                                            <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                                                <img src="https://images.unsplash.com/photo-1551499779-ee50f1aa4d25?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" />
                                                <a href="#!">
                                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title text-capitalize"><b class="text-primary">EST:</b> Cà phê muối</h5>
                                                <p class="card-text">Một loại thức uống được làm từ những nguyên liệu và gia vị cơ bản như cà phê...</p>
                                                <div class="exportAction">
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-info bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Xem thêm" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-eye fa-lg"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-primary bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Chỉnh Sửa" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-marker fa-lg"></i>

                                                    </button>
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-danger bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Xóa" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-recycle fa-lg"></i>
                                                    </button>
                                                </div>
                                                <div class="my-3 text-muted"><b>Cập Nhật: </b> <i>10:20:30 - 03/05/2024</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="card">
                                            <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                                                <img src="https://images.unsplash.com/photo-1551499779-ee50f1aa4d25?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" />
                                                <a href="#!">
                                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title text-capitalize"><b class="text-primary">EST:</b> Cà phê muối</h5>
                                                <p class="card-text">Một loại thức uống được làm từ những nguyên liệu và gia vị cơ bản như cà phê...</p>
                                                <div class="exportAction">
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-info bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Xem thêm" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-eye fa-lg"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-primary bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Chỉnh Sửa" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-marker fa-lg"></i>

                                                    </button>
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-danger bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Xóa" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-recycle fa-lg"></i>
                                                    </button>
                                                </div>
                                                <div class="my-3 text-muted"><b>Cập Nhật: </b> <i>10:20:30 - 03/05/2024</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="card">
                                            <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                                                <img src="https://images.unsplash.com/photo-1551499779-ee50f1aa4d25?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" />
                                                <a href="#!">
                                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title text-capitalize"><b class="text-primary">EST:</b> Cà phê muối</h5>
                                                <p class="card-text">Một loại thức uống được làm từ những nguyên liệu và gia vị cơ bản như cà phê...</p>
                                                <div class="exportAction">
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-info bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Xem thêm" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-eye fa-lg"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-primary bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Chỉnh Sửa" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-marker fa-lg"></i>

                                                    </button>
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-danger bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Xóa" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-recycle fa-lg"></i>
                                                    </button>
                                                </div>
                                                <div class="my-3 text-muted"><b>Cập Nhật: </b> <i>10:20:30 - 03/05/2024</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="card">
                                            <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                                                <img src="https://images.unsplash.com/photo-1551499779-ee50f1aa4d25?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" />
                                                <a href="#!">
                                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title text-capitalize"><b class="text-primary">EST:</b> Cà phê muối</h5>
                                                <p class="card-text">Một loại thức uống được làm từ những nguyên liệu và gia vị cơ bản như cà phê...</p>
                                                <div class="exportAction">
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-info bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Xem thêm" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-eye fa-lg"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-primary bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Chỉnh Sửa" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-marker fa-lg"></i>

                                                    </button>
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-danger bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Xóa" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-recycle fa-lg"></i>
                                                    </button>
                                                </div>
                                                <div class="my-3 text-muted"><b>Cập Nhật: </b> <i>10:20:30 - 03/05/2024</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="card">
                                            <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                                                <img src="https://images.unsplash.com/photo-1551499779-ee50f1aa4d25?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" />
                                                <a href="#!">
                                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title text-capitalize"><b class="text-primary">EST:</b> Cà phê muối</h5>
                                                <p class="card-text">Một loại thức uống được làm từ những nguyên liệu và gia vị cơ bản như cà phê...</p>
                                                <div class="exportAction">
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-info bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Xem thêm" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-eye fa-lg"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-primary bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Chỉnh Sửa" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-marker fa-lg"></i>

                                                    </button>
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-danger bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Xóa" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-recycle fa-lg"></i>
                                                    </button>
                                                </div>
                                                <div class="my-3 text-muted"><b>Cập Nhật: </b> <i>10:20:30 - 03/05/2024</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="card">
                                            <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                                                <img src="https://images.unsplash.com/photo-1551499779-ee50f1aa4d25?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" />
                                                <a href="#!">
                                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title text-capitalize"><b class="text-primary">EST:</b> Cà phê muối</h5>
                                                <p class="card-text">Một loại thức uống được làm từ những nguyên liệu và gia vị cơ bản như cà phê...</p>
                                                <div class="exportAction">
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-info bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Xem thêm" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-eye fa-lg"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-primary bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Chỉnh Sửa" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-marker fa-lg"></i>

                                                    </button>
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-danger bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Xóa" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-recycle fa-lg"></i>
                                                    </button>
                                                </div>
                                                <div class="my-3 text-muted"><b>Cập Nhật: </b> <i>10:20:30 - 03/05/2024</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="card">
                                            <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                                                <img src="https://images.unsplash.com/photo-1551499779-ee50f1aa4d25?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" />
                                                <a href="#!">
                                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title text-capitalize"><b class="text-primary">EST:</b> Cà phê muối</h5>
                                                <p class="card-text">Một loại thức uống được làm từ những nguyên liệu và gia vị cơ bản như cà phê...</p>
                                                <div class="exportAction">
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-info bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Xem thêm" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-eye fa-lg"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-primary bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Chỉnh Sửa" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-marker fa-lg"></i>

                                                    </button>
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-danger bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Xóa" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-recycle fa-lg"></i>
                                                    </button>
                                                </div>
                                                <div class="my-3 text-muted"><b>Cập Nhật: </b> <i>10:20:30 - 03/05/2024</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="card">
                                            <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                                                <img src="https://images.unsplash.com/photo-1551499779-ee50f1aa4d25?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" />
                                                <a href="#!">
                                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title text-capitalize"><b class="text-primary">EST:</b> Cà phê muối</h5>
                                                <p class="card-text">Một loại thức uống được làm từ những nguyên liệu và gia vị cơ bản như cà phê...</p>
                                                <div class="exportAction">
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-info bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Xem thêm" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-eye fa-lg"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-primary bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Chỉnh Sửa" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-marker fa-lg"></i>

                                                    </button>
                                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-danger bg-gradient text-white" data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="top" title="Xóa" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-recycle fa-lg"></i>
                                                    </button>
                                                </div>
                                                <div class="my-3 text-muted"><b>Cập Nhật: </b> <i>10:20:30 - 03/05/2024</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ex-with-icons-tabs-2" role="tabpanel" aria-labelledby="ex-with-icons-tab-2">
                                <table class="table align-middle mb-0 bg-white table-hover">
                                    <thead class="bg-light">
                                        <tr>
                                            <th>#</th>
                                            <th>ID Công Thức</th>
                                            <th>Tên Công Thức</th>
                                            <th>Thành Phần</th>
                                            <th>Mô Tả</th>
                                            <th>Lịch Sử Cập Nhật</th>
                                            <th>Hoạt Động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><b>NCC1</b></td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                                    <div class="ms-3">
                                                        <p class="fw-bold mb-1">Cà Phê Muối</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                1.Sữa Vinamilk...
                                                <a href="#" class="badge badge-primary rounded-pill" data-mdb-tooltip-init data-mdb-placement="bottom" title="Sữa tươi - Kẹo sữa">14</a>
                                            </td>
                                            <td>
                                                Một loại thức uống được làm từ những nguyên liệu và gia vị cơ bản như cà phê...
                                            </td>
                                            <td class="text-muted">10:20:30 - 03/05/2024</td>
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
                                            <td>1</td>
                                            <td><b>NCC1</b></td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                                    <div class="ms-3">
                                                        <p class="fw-bold mb-1">Cà Phê Muối</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                1.Sữa Vinamilk...
                                                <a href="#" class="badge badge-primary rounded-pill" data-mdb-tooltip-init data-mdb-placement="bottom" title="Sữa tươi - Kẹo sữa">14</a>
                                            </td>
                                            <td>
                                                Một loại thức uống được làm từ những nguyên liệu và gia vị cơ bản như cà phê...
                                            </td>
                                            <td class="text-muted">10:20:30 - 03/05/2024</td>
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
                                            <td>1</td>
                                            <td><b>NCC1</b></td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                                    <div class="ms-3">
                                                        <p class="fw-bold mb-1">Cà Phê Muối</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                1.Sữa Vinamilk...
                                                <a href="#" class="badge badge-primary rounded-pill" data-mdb-tooltip-init data-mdb-placement="bottom" title="Sữa tươi - Kẹo sữa">14</a>
                                            </td>
                                            <td>
                                                Một loại thức uống được làm từ những nguyên liệu và gia vị cơ bản như cà phê...
                                            </td>
                                            <td class="text-muted">10:20:30 - 03/05/2024</td>
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
                                            <td>1</td>
                                            <td><b>NCC1</b></td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                                    <div class="ms-3">
                                                        <p class="fw-bold mb-1">Cà Phê Muối</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                1.Sữa Vinamilk...
                                                <a href="#" class="badge badge-primary rounded-pill" data-mdb-tooltip-init data-mdb-placement="bottom" title="Sữa tươi - Kẹo sữa">14</a>
                                            </td>
                                            <td>
                                                Một loại thức uống được làm từ những nguyên liệu và gia vị cơ bản như cà phê...
                                            </td>
                                            <td class="text-muted">10:20:30 - 03/05/2024</td>
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
                                            <td>1</td>
                                            <td><b>NCC1</b></td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                                    <div class="ms-3">
                                                        <p class="fw-bold mb-1">Cà Phê Muối</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                1.Sữa Vinamilk...
                                                <a href="#" class="badge badge-primary rounded-pill" data-mdb-tooltip-init data-mdb-placement="bottom" title="Sữa tươi - Kẹo sữa">14</a>
                                            </td>
                                            <td>
                                                Một loại thức uống được làm từ những nguyên liệu và gia vị cơ bản như cà phê...
                                            </td>
                                            <td class="text-muted">10:20:30 - 03/05/2024</td>
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
                                            <td>1</td>
                                            <td><b>NCC1</b></td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                                    <div class="ms-3">
                                                        <p class="fw-bold mb-1">Cà Phê Muối</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                1.Sữa Vinamilk...
                                                <a href="#" class="badge badge-primary rounded-pill" data-mdb-tooltip-init data-mdb-placement="bottom" title="Sữa tươi - Kẹo sữa">14</a>
                                            </td>
                                            <td>
                                                Một loại thức uống được làm từ những nguyên liệu và gia vị cơ bản như cà phê...
                                            </td>
                                            <td class="text-muted">10:20:30 - 03/05/2024</td>
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
                                <div class="my-3 d-flex justify-content-between align-items-center">
                                    <p class="m-0">
                                        Rows per page: <span class="text-primary"> 1 - 10</span> of <span class="text-primary"> 14</span>
                                    </p>
                                    <!-- pagination -->
                                    <nav aria-label="...">
                                        <ul class="pagination mb-0">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active" aria-current="page">
                                                <a class="page-link" href="#">2 <span class="visually-hidden">(current)</span></a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- pagination -->
                                </div>

                            </div>
                        </div>
                        <!-- Tabs content -->
                    </div>
                </div>

            </div>
        </div>

        <div class="row my-4">

        </div>
    </div>
</main>
<!--Main layout-->

<?php include 'layout/footer.php'; ?>