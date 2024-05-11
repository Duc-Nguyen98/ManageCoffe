<?php include 'layout/header.php'; ?>
<?php include 'utils/formatCurrency.php'; ?>
<?php include 'utils/getInventoryBadge.php'; ?>
<?php include 'utils/getClassBadge.php'; ?>
<?php include 'utils/barCode.php'; ?>

<!--Main layout-->
<main style="margin-top: 58px;">
    <div class="container-fluid py-4 my-5">
        <div class="row">
            <div class="col-12">
                <div class="card text-center">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title text-left mb-0">Bảng Sản Phẩm - Nguyên Liệu </h5>
                        <div class="exportAction">
                            <button type="button" class="btn btn-success" data-mdb-ripple-init><i class="fas fa-file-excel fa-lg"></i> Excel</button>
                            <button type="button" class="btn btn-danger" data-mdb-ripple-init><i class="far fa-file-pdf fa-lg"></i> PDF</button>
                            <button type="button" class="btn btn-info" data-mdb-ripple-init> <i class="fas fa-file-arrow-up fa-lg"></i> Import</button>
                            <a href="<?php echo $base_url; ?>controllers/product/create.php" class="btn btn-primary" data-mdb-ripple-init><i class="fas fa-folder-plus fa-lg"></i> Thêm Mới</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table align-middle mb-0 bg-white table-hover">
                            <thead class="bg-light">
                                <tr class="text-start">
                                    <th>#</th>
                                    <th>ID Sản Phẩm</th>
                                    <th>Sản Phẩm</th>
                                    <th>Danh Mục</th>
                                    <th class="text-center">Mã Vạch</th>
                                    <th>Tổng Nhập</th>
                                    <th>Tổng Xuất</th>
                                    <th>Tồn Kho-*</th>
                                    <th>Tình Trạng</th>
                                    <th>Giá Nhập</th>
                                    <th>Lịch Sử Cập Nhật</th>
                                    <th>Trạng Thái</th>
                                    <th class="text-center">Hoạt Động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //! Handle Data Query Table
                                $rows = mysqli_query($conn, "SELECT 
                                product.*, 
                                product_categories.name AS categories_name, 
                                brands.name AS brands_name, 
                                units.name AS units_name 
                                FROM 
                                    product 
                                JOIN 
                                    product_categories ON product.idcategory = product_categories.id 
                                JOIN 
                                    brands ON product.brand_id = brands.id 
                                JOIN 
                                    units ON product.unit_id = units.id 
                                WHERE 
                                    product.soft_delete = 0;
                                ;
                                 ");
                                $i = 1;
                                while ($row = mysqli_fetch_assoc($rows)) {
                                ?>
                                    <tr id="<?= $row['id']; ?>" class="text-start fw-bold">
                                        <td><?= $row['id']; ?></td>
                                        <td><b>ISP<?= $row['id']; ?></b></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="<?= $row['image']; ?>" alt="" style="width: 45px; height: 45px" class="rounded-circle">
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1 text-capitalize"><?= $row['name']; ?></p>
                                                    <p class="text-muted mb-0">*-<?= $row['slug']; ?></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <?= $row['categories_name'] ?>
                                        </td>
                                        <td class="text-center">
                                            <?= generateBarcodeHTML($row['barcode'], $row['id']) ?>
                                        </td>
                                        <td>
                                        <h4 class="badge badge-secondary rounded-pill d-inline"><?= $row['inventory_import']?>/SL</h4>
                                        </td>
                                        <td>
                                            <h4 class="badge badge-secondary rounded-pill d-inline"><?= $row['inventory_export']?>/SL</h4>
                                        </td>
                                        <td>
                                            <?= getInventoryBadge($row['inventory_import'] - $row['inventory_export']) ?>
                                        </td>
                                        <td>
                                            <?= getInventoryText($row['inventory_import'] - $row['inventory_export']) ?>
                                        </td>

                                        <td>
                                            <b><?= formatCurrency($row['purchase_price']); ?></b>
                                        </td>
                                        <td class="text-muted"><?= $row['update_at']; ?></td>
                                        <td>
                                            <span class="badge <?= $row['status'] == 0 ? 'badge-success' : 'badge-danger'; ?> rounded-pill d-inline">
                                                <?= $row['status'] == 0 ? 'Đang hợp tác' : 'Tạm ngừng hợp tác'; ?>
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <a href="<?php echo $base_url; ?>controllers/product/view.php?id=<?= $row['id']; ?>" class="btn btn-link btn-rounded btn-sm fw-bold bg-info bg-gradient text-white" data-mdb-ripple-color="dark">
                                                <i class="fas fa-eye fa-lg"></i>
                                            </a>
                                            <a href="<?php echo $base_url; ?>controllers/product/edit.php" class="btn btn-link btn-rounded btn-sm fw-bold bg-primary bg-gradient text-white" data-mdb-ripple-color="dark">
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

<script>
    JsBarcode(".barcode").init();
</script>
<script scr="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.6/dist/JsBarcode.all.min.js"></script>
<?php include 'layout/footer.php'; ?>