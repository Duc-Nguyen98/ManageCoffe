<?php include 'layout/header.php'; ?>
<?php include 'utils/getAccountRoleBadgeClass.php'; ?>


<!--Main layout-->
<main style="margin-top: 58px;">
    <div class="container-fluid py-4 my-5">
        <div class="row">
            <div class="col-12">
                <div class="card text-center">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title text-left mb-0">Bảng Quản Lý Tài Khoản - client</h5>

                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <div class="input-group">
                                    <input type="search" class="form-control rounded" placeholder="Nhập từ khóa..." aria-label="Search" aria-describedby="search-addon" />
                                    <button type="button" class="btn btn-outline-primary" data-mdb-ripple-init>Tìm kiếm</button>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <select data-mdb-select-init multiple data-mdb-clear-button="true">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>
                                </select>
                                <label class="form-label select-label">Vai Trò</label>
                            </div>
                            <div class="col-md-3 mb-3">
                                <select data-mdb-select-init multiple data-mdb-clear-button="true">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                </select>
                                <label class="form-label select-label">Trạng Thái</label>
                            </div>
                            <div class="col-md-3 mb-3 exportAction">
                                <a href="<?php echo $base_url; ?>controllers/client/create.php" class="btn btn-primary" data-mdb-ripple-init><i class="fas fa-folder-plus fa-lg"></i> Thêm Mới</a>
                            </div>
                        </div>
                        <table class="table align-middle mb-0 bg-white table-hover">
                            <thead class="bg-light">
                                <tr class="text-start">
                                    <th>#</th>
                                    <th>ID Tài Khoản</th>
                                    <th>Vai Trò</th>
                                    <th>Email Đăng Nhập</th>
                                    <th>Trạng Thái</th>
                                    <th>Ngày Tạo</th>
                                    <th>Lịch Sử Cập Nhật</th>
                                    <th>Hoạt Động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //! Handle Data Query Table
                                $rows = mysqli_query($conn, "SELECT client.*, role.name AS role_name 
                                FROM client 
                                JOIN role ON client.account_role = role.id
                                WHERE client.soft_delete = 0;
                                ");
                                $i = 1;
                                while ($row = mysqli_fetch_assoc($rows)) {
                                ?>
                                    <tr id="<?= $row['id']; ?>" class="text-start fw-bold">
                                        <td><?= $row['id']; ?></td>
                                        <td><b>IAC<?= $row['id']; ?></b></td>
                                        <td>
                                            <span class="badge <?= getAccountRoleBadgeClass($row['account_role']); ?> rounded-pill d-inline">
                                                <?= $row['role_name'] ?>
                                            </span>
                                        </td>
                                        <td>
                                            <p class="fw-bold mb-1"><?= $row['email']; ?></p>
                                        </td>
                                        <td>
                                            <!-- Checked switch -->
                                            <div class="form-check form-switch">
                                                <input class="form-check-input mx-auto" type="checkbox" role="switch" id="flexSwitchCheckChecked" <?= $row['is_active'] == 0 ? 'checked disabled' : '' ?> />
                                            </div>

                                        </td>
                                        <td class="text-muted"><?= $row['created_at']; ?></td>
                                        <td class="text-muted"><?= $row['updated_at']; ?></td>
                                        <td>
                                            <a href="<?php echo $base_url; ?>controllers/client/view.php?id=<?= $row['id']; ?>" class="btn btn-link btn-rounded btn-sm fw-bold bg-info bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-eye fa-lg"></i>
                                            </a>

                                            <a href="<?php echo $base_url; ?>controllers/client/edit.php?id=<?= $row['id']; ?>" class="btn btn-link btn-rounded btn-sm fw-bold bg-primary bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-marker fa-lg"></i>

                                            </a>
                                            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-danger bg-gradient text-white" data-mdb-ripple-color="dark"  onclick="submitData(<?php echo $row['id']; ?>);">
                                                <i class="fas fa-recycle fa-lg"></i>
                                            </button>
                                        </td>
                                    </tr>
                                <?php };
                                //! Handle Data Query Table
                                ?>
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


<!-- cdnChart -->
<script src="https://cdn.jsdelivr.net/gh/Duc-Nguyen98/ManageCoffe/src/js/mdb.umd.min.js"></script>
<?php include 'layout/footer.php'; ?>