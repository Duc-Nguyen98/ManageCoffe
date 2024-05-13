<?php include 'layout/header.php'; ?>
<!--Main layout-->

<main style="margin-top: 58px;">

    <div class="container-fluid py-4 my-5">
        <div class="row">
            <!-- tiền nhập -->
            <div class="col-3">
                <?php $sql = "SELECT 
                        FORMAT(SUM(sub_total), 0) AS total_amount
                    FROM 
                        purchases
                    WHERE 
                        MONTH(Purchases_date) = MONTH(CURRENT_DATE())
                        AND YEAR(Purchases_date) = YEAR(CURRENT_DATE())";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Lấy dòng dữ liệu đầu tiên từ kết quả truy vấn
                        $row = $result->fetch_assoc();
                        // Gán giá trị total_amount vào biến $total_inventory_day
                        $total_inventory_day = $row["total_amount"];
                    } else {
                        // Nếu không có dữ liệu trả về, gán giá trị mặc định cho $total_inventory_day
                        $total_inventory_day = 0;
                    }
                    ?>
                <div class="card bg-primary bg-gradient text-white">
                    <div class="card-body">
                        <h6 class="card-title text-uppercase fw-normal">SỐ TIỀN NHẬP HÀNG</h6>
                        <p class="card-text fa-2x fw-bolder"><?= $total_inventory_day ?>đ</p>
                    </div>
                    <a class="card-footer text-white text-center" href="#">Thêm thông tin <i class="fas fa-circle-right fa-lg"></i></a>
                </div>
            </div>
            <!-- tiền thu được -->
            <div class="col-3">
                <?php
                    // Câu truy vấn SQL để lấy tổng số tiền từ bảng invoices
                    $sql = "SELECT FORMAT(SUM(sub_total), 0) AS total_amount
                            FROM invoices
                            WHERE MONTH(invoice_date) = MONTH(CURRENT_DATE()) AND YEAR(invoice_date) = YEAR(CURRENT_DATE())";

                    $result = $conn->query($sql);

                    // Kiểm tra kết quả và gán giá trị vào biến $total_inventory_import
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $total_inventory_import = $row["total_amount"];
                    } else {
                        $total_inventory_import = "0"; // Nếu không có kết quả, gán giá trị mặc định là 0
                    }
                    ?>
                <div class="card bg-danger bg-gradient text-white">
                    <div class="card-body">
                        <h6 class="card-title text-uppercase fw-normal">SỐ TIỀN THU ĐƯỢC</h6>
                        <p class="card-text fa-2x fw-bolder"><?= $total_inventory_import ?>đ</p>
                    </div>
                    <a class="card-footer text-white text-center" href="#">Thêm thông tin <i class="fas fa-circle-right fa-lg"></i></a>
                </div>
            </div>
            <!--Nguyên liệu trong kho-->
            <div class="col-3">
            <?php
                $sql = "SELECT COUNT(*) AS remaining_products FROM product WHERE (inventory_import - inventory_export) > 0 AND status = 0 AND soft_delete = 0";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Lấy kết quả từ câu truy vấn
                    $row = $result->fetch_assoc();
                    $remaining_products = $row["remaining_products"];

                    // In ra số lượng nguyên liệu còn trong kho
                    echo '<div class="card bg-success bg-gradient text-white">
                            <div class="card-body">
                                <h6 class="card-title text-uppercase fw-normal">SỐ NGUYÊN LIỆU TRONG KHO</h6>
                                <p class="card-text fa-2x fw-bolder">' . $remaining_products . '</p>
                            </div>
                            <a class="card-footer text-white text-center" href="#">Thêm thông tin <i class="fas fa-circle-right fa-lg"></i></a>
                        </div>';
                } else {
                    echo "0 results";
                }
                ?>
                <!--Số nguyên liệu sắp hết-->
            </div>
            <div class="col-3">
                <div class="card bg-info bg-gradient text-white fw-normal">
                    <div class="card-body">
                        <h6 class="card-title text-uppercase">NGUYÊN LIỆU SẮP HẾT</h6>
                        <p class="card-text fa-3x">/SP</p>
                    </div>
                    <a class="card-footer text-white text-center" href="#">Thêm thông tin <i class="fas fa-circle-right fa-lg"></i></a>
                </div>
            </div>
        </div>

        
        <div class="row my-3">
            <div class="col-7">
                <!--Biểu đồ-->
                <div class="card text-left">
                    <div class="card-header">Thống kê (2024)</div>
                    <div class="card-body">
                        <canvas id="chart-tooltips-formatting-example"></canvas>
                    </div>
                </div>
                <!--u-->
                <div class="card text-left">
                    <div class="card-header">Cảnh báo hàng tồn kho</div>
                    <div class="card-body">
                        <table class="table align-middle mb-0 bg-white table-hover">
                            <thead class="bg-light">
                                <tr>
                                    <th>#</th>
                                    <th>ID sản phẩ</th>
                                    <th>Tên</th>
                                    <th>Số lượng | Cảnh báo</th>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="fw-bold mb-1">AP-000002</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">Celeron Silver N5030 15.6"</p>
                                    </td>
                                    <td>
                                        <span class="badge badge-warning rounded-pill d-inline p-2 mx-1">21 Pcs</span>
                                        <span class="badge badge-danger rounded-pill d-inline p-2 mx-1">10 Pcs</span>

                                    </td>

                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="fw-bold mb-1">AP-000002</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">Celeron Silver N5030 15.6"</p>
                                    </td>
                                    <td>
                                        <span class="badge badge-warning rounded-pill d-inline p-2 mx-1">21 Pcs</span>
                                        <span class="badge badge-danger rounded-pill d-inline p-2 mx-1">10 Pcs</span>

                                    </td>

                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="fw-bold mb-1">AP-000002</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">Celeron Silver N5030 15.6"</p>
                                    </td>
                                    <td>
                                        <span class="badge badge-warning rounded-pill d-inline p-2 mx-1">21 Pcs</span>
                                        <span class="badge badge-danger rounded-pill d-inline p-2 mx-1">10 Pcs</span>

                                    </td>

                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="fw-bold mb-1">AP-000002</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">Celeron Silver N5030 15.6"</p>
                                    </td>
                                    <td>
                                        <span class="badge badge-warning rounded-pill d-inline p-2 mx-1">21 Pcs</span>
                                        <span class="badge badge-danger rounded-pill d-inline p-2 mx-1">10 Pcs</span>

                                    </td>

                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="fw-bold mb-1">AP-000002</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">Celeron Silver N5030 15.6"</p>
                                    </td>
                                    <td>
                                        <span class="badge badge-warning rounded-pill d-inline p-2 mx-1">21 Pcs</span>
                                        <span class="badge badge-danger rounded-pill d-inline p-2 mx-1">10 Pcs</span>

                                    </td>

                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="fw-bold mb-1">AP-000002</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">Celeron Silver N5030 15.6"</p>
                                    </td>
                                    <td>
                                        <span class="badge badge-warning rounded-pill d-inline p-2 mx-1">21 Pcs</span>
                                        <span class="badge badge-danger rounded-pill d-inline p-2 mx-1">10 Pcs</span>

                                    </td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-5">
                 <!--Top 5-->
                <div class="card text-left">
                    <div class="card-header"> Top 5 nguyên liệu bán chạy (2024)
                    </div>
                    <div class="card-body">
                        <table class="table align-middle mb-0 bg-white table-hover">
                            <thead class="bg-light">
                                <tr>
                                    <th>#</th>
                                    <th>Nguyên Liệu</th>
                                    <th class="text-center"> SL Nhập</th>
                                    <th class="text-center"> SL Xuất</th>
                                    <th>Danh Thu </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //! Handle Data Query Table

                                include 'utils/formatCurrency.php';


                                //! Handle Data Query Table
                                $rows = mysqli_query($conn, "SELECT *, product_categories.name AS categories_name 
                                    FROM product 
                                    JOIN product_categories ON product.idcategory = product_categories.id
                                    ORDER BY inventory_export DESC
                                    LIMIT 5;
                                    ;
                                    ");
                                $i = 1;
                                while ($row = mysqli_fetch_assoc($rows)) {
                                ?>
                                    <tr>
                                        <td id="<?= $row['id']; ?>"><b><?= $i ?></b></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="<?= $row['image'];  ?>" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1"><?= $row['name'];  ?></p>
                                                    <p class="text-muted mb-0"><?= $row['categories_name'];  ?></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span class="badge badge-primary rounded-pill d-inline"><?= $row['inventory_import'];  ?></span>
                                        </td>
                                        <td class="text-center">
                                            <span class=" badge badge-danger rounded-pill d-inline"><?= $row['inventory_export'];  ?></span>
                                        </td>
                                        <td><b>
                                                <?php
                                                // Sử dụng hàm formatCurrency() tại đây
                                                echo formatCurrency(($row['inventory_export'] * $row['purchase_price']));
                                                ?>
                                            </b></td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                //! Handle Data Query Table
                                ?>

                            </tbody>
                        </table>
                        <!-- end table 1 -->
                    </div>
                </div>

                <!--Biểu đồ-->
                <div class="card text-left">
                    <div class="card-header">Báo cáo nhập xuất hàng (2024)</div>
                    <div class="card-body">
                        <canvas id="chart-bar-double-datasets-example"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!--Main layout-->



<!-- cdnChart -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/Duc-Nguyen98/ManageCoffe/src/js/mdb.umd.min.js"></script>

<?php include 'utils/chartIndex.php'; ?>
<?php include 'layout/footer.php'; ?>