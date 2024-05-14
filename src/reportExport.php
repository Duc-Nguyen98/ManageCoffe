<?php include 'layout/header.php'; ?>
<?php include 'utils/formatCurrency.php'; ?>

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
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <div class="input-group">
                                        <input type="search" class="form-control rounded" placeholder="Nhập từ khóa..." aria-label="Search" aria-describedby="search-addon" />
                                        <button type="button" class="btn btn-outline-primary" data-mdb-ripple-init>Tìm kiếm</button>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3"></div> <!-- Thêm một cột trống để căn chỉnh -->
                                <div class="col-md-3 mb-3 d-flex justify-content-end">
                                    <a href="<?php echo $base_url; ?>controllers/client/create.php" class="btn btn-primary ms-auto" data-mdb-ripple-init><i class="fas fa-folder-plus fa-lg"></i> Thêm Mới</a>
                                </div>
                            </div>
                        </div>

                        <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Mã phiếu xuất</th>
                            <th scope="col">Thành tiền</th>
                            <th scope="col">Phí vận chuyển</th>
                            <th scope="col">Giảm giá</th>
                            <th scope="col">Tổng tiền</th>
                            <th scope="col">Tạo ngày</th>
                            <th scope="col">Người tạo</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Báo cáo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //! Handle Data Query Table
                        $rows = mysqli_query($conn, "SELECT invoices.*, invoice_product.discount, invoice_product.transport, SUM(invoice_product.quanity), SUM(invoice_product.sale_price), client.name AS client_name FROM invoices JOIN client ON invoices.created_by = client.id JOIN invoice_product ON invoice_product.invoice_id = invoices.id GROUP BY invoices.id;");   

                        

                        $i = 1;

                        while ($row = mysqli_fetch_assoc($rows)) {
                            ?>

                            <tr id="<?= $row['id']; ?>" class="text-start fw-bold">
                                <td><?= $i++ ?></td>

                                <td>
                                    <p class="fw-normal mb-1"><b>IVP<?= $row['id']; ?></b></p>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1"><b> <?= formatCurrency($row['sum_sale_price']) ?> </b></p>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1"><b> <?= formatCurrency($row['transport']) ?> </b></p>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1"><b><span class="text-primary">-
                                                <?= $row['discount'] ?>% </span></b></p>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1"><b> <?= formatCurrency($final_value) ?> </b></p>
                                </td>
                                <td class="text-muted"><?= $row['created_at']; ?></td>
                                <td class="text-muted"><?= $row['client_name']; ?></td>
                                <td>
                                    <span
                                        class="badge <?= $row['status'] == 0 ? 'badge-success' : 'badge-danger'; ?> rounded-pill d-inline">
                                        <?= $row['status'] == 0 ? 'Hợp lệ' : 'Không hợp lệ'; ?>
                                    </span>
                                </td>
                                <td>
                                    <!-- <a href="#"
                                        class="btn btn-link btn-rounded btn-sm fw-bold bg-success bg-gradient text-white"
                                        data-mdb-ripple-color="dark">
                                        <i class="fas fa-file-excel"></i>
                                    </a>
                                    <a href="#"
                                        class="btn btn-link btn-rounded btn-sm fw-bold bg-danger bg-gradient text-white"
                                        data-mdb-ripple-color="dark">
                                        <i class="far fa-file-pdf"></i>
                                    </a> -->
                                    <a href="#"
                                        class="btn btn-link btn-rounded btn-sm fw-bold bg-danger bg-gradient text-white"
                                        data-mdb-ripple-color="dark">
                                        <i class="fas fa-triangle-exclamation"></i>
                                    </a>


                                </td>
                            </tr>
                        </tbody>
                    <?php }
                        ;
                        //! Handle Data Query Table
                        ?>
                </table>
                    </div>
                </div>                  
                <!--Table-->
                
            </div>
        </div>
    </div>
</main>


<?php include 'layout/footer.php'; ?>