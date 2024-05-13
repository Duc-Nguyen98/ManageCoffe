<?php include 'layout/header.php'; ?>
<?php include 'utils/formatCurrency.php'; ?>

<!--Main layout-->
<main style="margin-top: 58px;">
    <div class="container-fluid py-4 my-5">
        <div class="row">
            <div class="col-12">
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
                        $rows = mysqli_query($conn, "SELECT 
                        invoices.*, 
                        client.name AS client_name,
                        (SELECT DISTINCT SUM(sale_price) 
                         FROM `invoice_product` 
                         WHERE invoice_product.invoice_id = invoices.id
                        ) AS total_sale_price
                            FROM 
                                invoices 
                            JOIN 
                                client 
                            ON 
                                invoices.created_by = client.id 
                            ORDER BY 
                                invoices.created_at DESC;
                        ");

                        $i = 1;

                        while ($row = mysqli_fetch_assoc($rows)) {
                            $total_sale_price = $row['total_sale_price']; // Giá trị tổng của các sản phẩm
                            $transport = $row['transport']; // Phí vận chuyển
                            $discount_percentage = $row['discount']; // Phần trăm giảm giá (ví dụ: 30%)

                            // Tính tổng giá trị hóa đơn
                            $total_invoice_value = $total_sale_price + $transport;

                            // Tính giảm giá phần trăm
                            $discount_amount = ($total_invoice_value * $discount_percentage) / 100;

                            // Tính giá trị cuối cùng
                            $final_value = $total_invoice_value - $discount_amount;
                            ?>
                            
                            <tr id="<?= $row['id']; ?>" class="text-start fw-bold">
                                <td><?= $i++ ?></td>

                                <td>
                                    <p class="fw-normal mb-1"><b>IVB<?= $row['id']; ?></b></p>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1"><b> <?= formatCurrency($row['total_sale_price']) ?> </b></p>
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
                                        class="btn btn-link btn-rounded btn-sm fw-bold bg-warning bg-gradient text-white"
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
    </div>
</main>


<?php include 'layout/footer.php'; ?>