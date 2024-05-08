<?php include 'layout/header.php'; ?>
<?php include 'utils/client/getAccountRoleBadgeClass.php'; ?>

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
                                <tr class="text-start">
                                    <th>#</th>
                                    <th>Tên Vai Trò</th>
                                    <th>Mô Tả Quyền & Vai Trò</th>
                                    <th>Trạng Thái</th>
                                    <th>Ngày Tạo</th>
                                    <th>Lịch Sử Cập Nhật</th>
                                    <th>Hoạt Động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //! Handle Data Query Table
                                $rows = mysqli_query($conn, "SELECT * FROM role WHERE soft_delete = 0");
                                $i = 1;

                                while ($row = mysqli_fetch_assoc($rows)) {
                                ?>
                                    <tr id="<?= $row['id']; ?>" class="text-start fw-bold">
                                        <td><?= $row['id']; ?></td>
                                        <td><b>IRP<?= $row['id']; ?></b></td>
                                        <td>
                                            <span class="badge <?= getAccountRoleBadgeClass($row['id']); ?> rounded-pill d-inline">
                                                <?= $row['name'] ?>
                                            </span>
                                        </td>
                                        <td>
                                            <span data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="bottom" title="<?= $row['note'] ?>">
                                                <?= truncateText($row['note']); ?>
                                            </span>
                                        </td>
                                        <td class="text-muted"><?= $row['created_at']; ?></td>
                                        <td class="text-muted"><?= $row['updated_at']; ?></td>
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
                                <?php };
                                //! Handle Data Query Table
                                ?>
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