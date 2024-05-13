<?php include 'layout/header.php'; ?>
<?php include 'utils/formatListRecipe.php'; ?>

<!--Main layout-->
<main style="margin-top: 58px;">
    <div class="container-fluid py-4 my-5">
        <div class="row">
            <div class="col-12">
                <div class="card text-center">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title text-left mb-0">Bảng Công Thức</h5>
                        <div class="exportAction">
                            <a href="<?php echo $base_url; ?>controllers/recipe/create.php" class="btn btn-primary" data-mdb-ripple-init><i class="fas fa-folder-plus fa-lg"></i> Thêm Mới</a>
                        </div>
                    </div>
                    <div class="card-body">

                        <table class="table align-middle mb-0 bg-white table-hover">
                            <thead class="bg-light">
                                <tr class="text-start">
                                    <th>#</th>
                                    <th>ID Công Thức</th>
                                    <th>Tên Công Thức</th>
                                    <th>Thành Phần</th>
                                    <th>Tác Giả</th>
                                    <th>Ngày Tạo</th>
                                    <th>Lịch Sử Cập Nhật</th>
                                    <th>Hoạt Động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //! Handle Data Query Table
                                $rows = mysqli_query($conn, "SELECT * FROM recipe WHERE soft_delete = 0 ORDER BY id DESC");
                                $i = 1;

                                while ($row = mysqli_fetch_assoc($rows)) {
                                ?>
                                    <tr id="<?= $row['id']; ?>" class="text-start fw-bold">
                                        <td><?= $row['id']; ?></td>
                                        <td><b>IDR<?= $row['id']; ?></b></td>

                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="<?= $row['image']; ?>" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1"><?= $row['name']; ?></p>
                                                    <p class="text-muted mb-0">*-<?= $row['slug']; ?></p>
                                                </div>
                                            </div>
                                        </td>
                                        <!-- <td>
                                            1.Sữa Vinamilk...
                                            <a href="#" class="badge badge-primary rounded-pill" data-mdb-tooltip-init data-mdb-placement="bottom" title="Sữa tươi - Kẹo sữa">14</a>
                                        </td> -->
                                        <td>
                                            <?= formatListRecipe($row['list_recipe']) ?>
                                        </td>
                                        <td><?= $row['created_by']; ?></td>
                                        <td class="text-muted"><?= $row['created_at']; ?></td>
                                        <td class="text-muted"><?= $row['updated_at']; ?></td>
                                        <td>
                                            <a href="<?php echo $base_url; ?>controllers/recipe/view.php?id=<?= $row['id']; ?>" class="btn btn-link btn-rounded btn-sm fw-bold bg-info bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-eye fa-lg"></i>
                                            </a>
                                            <a href="<?php echo $base_url; ?>controllers/recipe/edit.php?id=<?= $row['id']; ?>" class="btn btn-link btn-rounded btn-sm fw-bold bg-primary bg-gradient text-white" data-mdb-ripple-color="dark">
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

        <div class="row my-4">

        </div>
    </div>
</main>
<!--Main layout-->

<?php include 'layout/footer.php'; ?>