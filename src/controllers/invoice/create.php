<?php include '../../layout/header.php'; ?>
<?php include '../../utils/formatCurrency.php'; ?>

<!--Main layout-->

<main style="margin-top: 58px;">
    <div class="container-fluid py-4 my-5">
        <div class="card text-center">
            <div class="card-header text-start">
                <?php
                if (isset($_GET['id'])) {
                    $value = $_GET['id'];
                    // Kết hợp giá trị $value vào phần tử HTML
                    echo "<h5>Xem hóa đơn chi tiết - #IVP$value </h5>";
                } else {
                    // Xử lý khi không có giá trị được truyền
                    echo "null";
                }
                ?>
            </div>
            <div class="card-body">


                <!-- Query data -->
                <?php

                if (isset($_GET['id'])) {
                    $value = $_GET['id'];
                    // Thực hiện truy vấn SQL
                    $query = "SELECT 
                    invoices.*, 
                    invoice_product.discount AS discount,  
                    invoice_product.transport AS transport, 
                    SUM(invoice_product.quanity) AS sum_quanity , 
                    SUM(invoice_product.sale_price) AS sum_sale_price, 
                    client.name AS client_name
                FROM 
                    invoices
                JOIN 
                    client ON invoices.created_by = client.id 
                JOIN 
                    invoice_product ON invoice_product.invoice_id = invoices.id
                GROUP BY 
                    invoices.id
                HAVING 
                    invoices.id = $value";

                    $result = mysqli_query($conn, $query);

                    // Kiểm tra và hiển thị dữ liệu trả về
                    if ($result && mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $note = $row["note"];
                        $status = $row["status"];
                        $is_paid = $row["is_paid"];
                        $transport = $row["transport"];
                        $discount = $row["discount"];
                        $sum_quanity = $row["sum_quanity"];
                        $sum_sale_price = $row["sum_sale_price"];
                        $client_name = $row["client_name"];
                        $created_at = $row["created_at"];


                        // Tính tổng giá trị hóa đơn
                        $total_invoice_value = $sum_sale_price + $transport;

                        // Tính giảm giá phần trăm
                        $discount_amount = ($total_invoice_value * $discount) / 100;

                        // Tính giá trị cuối cùng
                        $final_value = $total_invoice_value - $discount_amount;
                        ?>

                        <div class="row">
                            <table class="table">
                                <tbody>
                                    <?php
                                    if (isset($_GET['id'])) {
                                        $value = $_GET['id'];
                                        // Thực hiện truy vấn SQL
                                        $query2 = "SELECT invoice_product.*, recipe.name AS recipe_name 
                                        FROM invoice_product 
                                        JOIN recipe 
                                        WHERE invoice_product.invoice_id = $value;
                                        ";
                                        $result2 = mysqli_query($conn, $query2);
                                        if ($result2 && mysqli_num_rows($result2) > 0) {
                                            $i = 1;
                                            ?>
                                            <table class="table">
                                                <thead class="table-info">
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">ID Công thức</th>
                                                        <th scope="col">Tên Công thức</th>
                                                        <th scope="col">Số lượng</th>
                                                        <th scope="col">Giá bán</th>
                                                        <th scope="col">Thành tiền</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php

                                                    while ($row2 = mysqli_fetch_assoc($result2)) {
                                                        $id = $row2["id"];
                                                        $invoice_id = $row2["invoice_id"];
                                                        $recipe_id = $row2["recipe_id"];
                                                        $recipe_name = $row2["recipe_name"];
                                                        $quanity = $row2["quanity"];
                                                        $unit_cost = $row2["unit_cost"];
                                                        $sale_price = $row2["sale_price"];
                                                        $created_at = $row2["created_at"];
                                                        ?>
                                                        <tr>
                                                            <th scope="row"><?= $i++ ?></th>
                                                            <td><b>IDR<?= $invoice_id ?></b></td>
                                                            <td><b><?= $recipe_name ?></b></td>
                                                            <td><b><?= $quanity ?>/SL</b></td>
                                                            <td><b><?= formatCurrency($unit_cost) ?></b></td>
                                                            <td><b><?= formatCurrency($sale_price) ?></b></td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        <?php } else {
                                            echo "<p>Không tìm thấy dữ liệu hoặc có lỗi xảy ra trong quá trình truy vấn.</p>";
                                        }
                                    } else {
                                        // Xử lý khi không có giá trị được truyền
                                        echo "<p>Không tìm thấy dữ liệu hoặc có lỗi xảy ra trong quá trình truy vấn.</p>";
                                    }
                                    ?>

                                </tbody>
                            </table>

                        </div>
                        <div class="row mt-4 py-4 text-end">
                            <div class="col-11 ">
                                <h6>Tổng số lượng: </h6>
                            </div>
                            <div class="col-1 ">
                                <h6><?= $sum_quanity ?>/SL</h6>
                            </div>
                            <div class="col-11 ">
                                <h6>Tổng tiền hàng: </h6>
                            </div>
                            <div class="col-1">
                                <h6><?= formatCurrency($sum_sale_price) ?></h6>
                            </div>
                            <div class="col-11 ">
                                <h6>Giảm giá hóa đơn: </h6>
                            </div>
                            <div class="col-1">
                                <h6><?= $discount ?>%</h6>
                            </div>
                            <div class="col-11 ">
                                <h6>Phí vận chuyển: </h6>
                            </div>
                            <div class="col-1">
                                <h6><?= formatCurrency($transport) ?></h6>
                            </div>
                            <div class="col-11 ">
                                <h6>Thành tiền: </h6>
                            </div>
                            <div class="col-1">
                                <h6><?= formatCurrency($final_value) ?></h6>
                            </div>
                        </div>
                        <div class="card-footer text-muted d-flex justify-content-between px-0 pt-4">

                            <a href="<?= $base_url ?>invoice.php" type="button" class="btn btn-secondary me-2"
                                data-mdb-ripple-init>Quay về</a>
                            <button id="btnLuuThayDoi" type="button" class="btn btn-primary me-2" data-mdb-ripple-init
                                onclick="submitData2('edit')">Lưu thay đổi</button>

                            <div class="row">
                                <div class="col-12 text-end">
                                    <h6 class="text-black-50 fst-italic">Tạo
                                        ngày: <?= $created_at ?> - Người tạo: <?= formatCurrency($final_value) ?></h6>
                                </div>
                            </div>

                        </div>
                        <?php
                    } else {
                        echo "<p>Không tìm thấy dữ liệu hoặc có lỗi xảy ra trong quá trình truy vấn.</p>";
                    }
                } else {
                    // Xử lý khi không có giá trị được truyền
                    echo "<p>Không tìm thấy dữ liệu hoặc có lỗi xảy ra trong quá trình truy vấn.</p>";
                }

                ?>
            </div>
        </div>
    </div>;

</main>

<!--Main layout-->
<script src="https://cdn.jsdelivr.net/gh/Duc-Nguyen98/ManageCoffe/src/js/mdb.umd.min.js"></script>
<?php include '../../layout/footer.php'; ?>