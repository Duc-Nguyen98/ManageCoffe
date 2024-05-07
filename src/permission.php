<?php include 'layout/header.php'; ?>
<!--Main layout-->
<main style="margin-top: 58px;">
    <div class="container-fluid py-4 my-5">
        <div class="row">
            <div class="col-12">
                <div class="card text-center">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title text-left mb-0">Bảng Quyền & Vai Trò</h5>
                        <div class="exportAction">
                            <a href="<?php echo $base_url; ?>controllers/permission/create.php" class="btn btn-primary" data-mdb-ripple-init><i class="fas fa-folder-plus fa-lg"></i> Thêm Mới</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table align-middle mb-0 bg-white table-hover">
                            <thead class="bg-light">
                                <tr>
                                    <th>#</th>
                                    <th>Tên Vai Trò</th>
                                    <th>Mô Tả</th>
                                    <th>Trạng Thái</th>
                                    <th>Lịch Sử Cập Nhật</th>
                                    <th>Hoạt Động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="ms-3">
                                            <p class="fw-bold mb-1">Quản trị viên cấp cao</p>
                                        </div>
                                    </td>

                                    <td>
                                        Super admin có thể gán quyền cho người khác với các vai trò khác nhau để quản lý công ty và nhân sự...
                                    </td>
                                    <td>
                                        <span class="badge badge-success rounded-pill d-inline">Đang Hoạt Động</span>
                                    </td>
                                    <td class="text-muted">10:20:30 - 03/05/2024</td>
                                    <td>
                                        <a href="<?php echo $base_url; ?>controllers/permission/view.php" class="btn btn-link btn-rounded btn-sm fw-bold bg-info bg-gradient text-white" data-mdb-ripple-color="dark">
                                            <i class="fas fa-eye fa-lg"></i>
                                        </a>
                                        <a href="<?php echo $base_url; ?>controllers/permission/edit.php" class="btn btn-link btn-rounded btn-sm fw-bold bg-primary bg-gradient text-white" data-mdb-ripple-color="dark">
                                            <i class="fas fa-marker fa-lg"></i>

</a>
                                        <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-danger bg-gradient text-white" data-mdb-ripple-color="dark">
                                            <i class="fas fa-recycle fa-lg"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="ms-3">
                                            <p class="fw-bold mb-1">Quản trị viên cấp cao</p>
                                        </div>
                                    </td>

                                    <td>
                                        Super admin có thể gán quyền cho người khác với các vai trò khác nhau để quản lý công ty và nhân sự...
                                    </td>
                                    <td>
                                        <span class="badge badge-success rounded-pill d-inline">Đang Hoạt Động</span>
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


                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
<!--Main layout-->

<?php include 'layout/footer.php'; ?>