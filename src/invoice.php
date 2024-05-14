<?php include 'layout/header.php'; ?>
<?php include 'utils/formatCurrency.php'; ?>

<!--Main layout-->
<main style="margin-top: 58px;">
    <div class="container-fluid py-4 my-5">
        <div class="row">
            <div class="col-12">
                <div class="card text-center">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title text-left mb-0">Bảng Đơn Vị Tính - Ký Hiệu</h5>
                        <div class="exportAction">
                            <button type="button" class="btn btn-success" data-mdb-ripple-init><i
                                    class="fas fa-file-excel fa-lg"></i> Excel</button>
                            <button type="button" class="btn btn-info" data-mdb-ripple-init> <i
                                    class="fas fa-file-arrow-up fa-lg"></i> Import</button>

                            <a href="<?php echo $base_url; ?>controllers/unit/create.php" class="btn btn-primary"
                                data-mdb-ripple-init><i class="fas fa-folder-plus fa-lg"></i> Thêm Mới</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead class="text-start">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Hóa đơn</th>
                                    <th scope="col">Thành tiền</th>
                                    <th scope="col">Phí vận chuyển</th>
                                    <th scope="col">Giảm giá</th>
                                    <th scope="col">Tổng tiền</th>
                                    <th scope="col">Tạo ngày</th>
                                    <th scope="col">Người tạo</th>
                                    <th scope="col">Tình trạng</th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //! Handle Data Query Table
                                $rows = mysqli_query($conn, "SELECT 
                        invoices.*, 
                        invoice_product.discount AS discount,  
                        invoice_product.transport AS transport, 
                        SUM(invoice_product.quanity) AS sum_quanity , 
                        SUM(invoice_product.sale_price) AS sum_sale_price, 
                        client.name AS client_name
                        FROM 
                            invoices
                        JOIN 
                            client 
                            ON invoices.created_by = client.id 
                        JOIN 
                            invoice_product 
                            ON invoice_product.invoice_id = invoices.id
                        GROUP BY 
                            invoices.id;
                        ");

                        
                                $i = 1;

                                while ($row = mysqli_fetch_assoc($rows)) {
                                    $sum_sale_price = $row['sum_sale_price']; // Giá trị tổng của các sản phẩm
                                    $transport = $row['transport']; // Phí vận chuyển
                                    $discount_percentage = $row['discount']; // Phần trăm giảm giá (ví dụ: 30%)
                                
                                    // Tính tổng giá trị hóa đơn
                                    $total_invoice_value = $sum_sale_price + $transport;

                                    // Tính giảm giá phần trăm
                                    $discount_amount = ($total_invoice_value * $discount_percentage) / 100;

                                    // Tính giá trị cuối cùng
                                    $final_value = $total_invoice_value - $discount_amount;
                                    ?>

                                    <tr id="<?= $row['id']; ?>" class="text-start fw-bold">
                                        <td><?= $i++ ?></td>

                                        <td>
                                            <p class="fw-normal mb-1"><b>IVP<?= $row['id']; ?></b></p>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1"><b> <?= formatCurrency($row['sum_sale_price']) ?> </b>
                                            </p>
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
                                                class="badge <?= $row['is_paid'] == 0 ? 'badge-primary' : 'badge-secondary'; ?> rounded-pill d-inline">
                                                <?= $row['is_paid'] == 0 ? 'Đã thanh toán' : 'Chưa thanh toán'; ?>
                                            </span>
                                        </td>
                                        <td>
                                            <span
                                                class="badge <?= $row['status'] == 0 ? 'badge-success' : 'badge-danger'; ?> rounded-pill d-inline">
                                                <?= $row['status'] == 0 ? 'Xét duyệt' : 'Không duyệt'; ?>
                                            </span>
                                        </td>
                                        <td>
                                            <a href="<?php echo $base_url; ?>controllers/invoice/view.php?id=<?= $row['id']; ?>"
                                                class="btn btn-link btn-rounded btn-sm fw-bold bg-info bg-gradient text-white"
                                                data-mdb-ripple-color="dark">
                                                <i class="fas fa-eye fa-lg"></i>
                                            </a>
                                            <a href="#"
                                                class="btn btn-link btn-rounded btn-sm fw-bold bg-danger bg-gradient text-white"
                                                data-mdb-ripple-color="dark">
                                                <i class="far fa-file-pdf fa-lg"></i>
                                            </a>
                                            <a href="#"
                                                class="btn btn-link btn-rounded btn-sm fw-bold bg-warning bg-gradient text-white"
                                                data-mdb-ripple-color="dark">
                                                <i class="fas fa-triangle-exclamation fa-lg"></i>
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


            </div>
        </div>
    </div>
</main>


<?php include 'layout/footer.php'; ?>