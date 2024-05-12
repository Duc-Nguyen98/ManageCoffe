<?php include 'layout/header.php'; ?>
<!--Main layout-->
<main style="margin-top: 58px;">
    <div class="container-fluid py-4 my-5">
        <div class="row">
            <div class="col-12">
                <div class="card text-center">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title text-left mb-0">Bảng Đơn Vị Tính - Ký Hiệu</h5>
                        <div class="exportAction">
                            <button type="button" class="btn btn-success" data-mdb-ripple-init><i class="fas fa-file-excel fa-lg"></i> Excel</button>
                            <button type="button" class="btn btn-danger" data-mdb-ripple-init><i class="far fa-file-pdf fa-lg"></i> PDF</button>
                            <button type="button" class="btn btn-info" data-mdb-ripple-init> <i class="fas fa-file-arrow-up fa-lg"></i> Import</button>
                            <a href="<?php echo $base_url; ?>controllers/unit/create.php" class="btn btn-primary" data-mdb-ripple-init><i class="fas fa-folder-plus fa-lg"></i> Thêm Mới</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table align-middle mb-0 bg-white table-hover">
                            <thead class="bg-light">
                                <tr class="text-start">
                                    <th>#</th>
                                    <th>ID Đơn vị</th>
                                    <th>Đơn vị tính</th>
                                    <th>Ký hiệu</th>
                                    <th>Mô tả</th>
                                    <th>Ngày Tạo</th>
                                    <th>Lịch sử cập nhật</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //! Handle Data Query Table
                                $rows = mysqli_query($conn, "SELECT * FROM units WHERE soft_delete = 0 ORDER BY id DESC");
                                $i = 1;

                                while ($row = mysqli_fetch_assoc($rows)) {
                                ?>
                                    <tr id="<?= $row['id']; ?>" class="text-start fw-bold">
                                        <td><?= $row['id']; ?></td>
                                        <td>
                                            <p class="fw-normal mb-1"><b>IDV<?= $row['id']; ?></b></p>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1"><b><?= $row['name']; ?></b></p>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary rounded-pill d-inline"><?= $row['symbol']; ?></span>
                                        </td>
                                        <td>
                                            <span data-mdb-ripple-init data-mdb-tooltip-init data-mdb-placement="bottom" title="<?= $row['note'] ?>">
                                                <?= truncateText($row['note']); ?>
                                            </span>
                                        </td>
                                        <td class="text-muted"><?= $row['created_at']; ?></td>
                                        <td class="text-muted"><?= $row['updated_at']; ?></td>
                                        <td>
                                            <a href="<?php echo $base_url; ?>controllers/unit/view.php?id=<?= $row['id']; ?>" class="btn btn-link btn-rounded btn-sm fw-bold bg-info bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-eye fa-lg"></i>
                                            </a>
                                            <a href="<?php echo $base_url; ?>controllers/unit/edit.php?id=<?= $row['id']; ?>" class="btn btn-link btn-rounded btn-sm fw-bold bg-primary bg-gradient text-white" data-mdb-ripple-color="dark">
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

            </div>
        </div>
    </div>
</main>
<!--Main layout-->

<?php include 'layout/footer.php'; ?>