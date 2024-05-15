<?php include 'layout/header.php'; ?>
<?php include 'utils/formatCurrency.php'; ?>

<!--Main layout-->
<main style="margin-top: 58px;">
    <div class="container-fluid py-4 my-5">
        <div class="row">
            <div class="col-12">
                <div class="card text-center">
                    <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title text-left mb-0">Báo Cáo Nhập Hàng</h5>
                    </div>
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <div class="input-group rounded">
                                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" id="search-input"/>
                                        <span class="input-group-text border-0" id="search-addon">
                                            <i class="fas fa-search"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3"></div> <!-- Thêm một cột trống để căn chỉnh -->

                                <div class="col-md-3 mb-3 d-flex justify-content-end">
                                    <div class="exportAction">
                                        <nav data-mdb-sidenav-init id="sidenav-1" class="sidenav" data-mdb-hidden="true" data-mdb-right="true" style="width: 280px;">
                                            <ul class="sidenav-menu">
                                                <li class="sidenav-item pt-3">
                                                    <h5>BỘ LỌC</h5>
                                                </li>

                                                <li class="sidenav-item pt-4">
                                                    <h6 style="text-align: left;">Thời gian </h6>
                                                    <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                                                        <span style="font-weight : 400" ></span>
                                                    </div>
                                                </li>

                                                <li class="sidenav-item pt-4">
                                                    <h6 style="text-align: left;">Tình trạng </h6>
                                                    <select data-mdb-select-init name="status">
                                                        <option value="0" 
                                                            <?= isset($_GET['status']) == true ? ($_GET['status'] == '0' ? 'selected':''):''?>>
                                                            Đã thanh toán
                                                        </option>
                                                        <option value="1"  
                                                            <?= isset($_GET['status']) == true ? ($_GET['status'] == '1' ? 'selected':''):''?>>
                                                            Chưa thanh toán
                                                        </option>
                                                    </select>
                                                </li>

                                                <li class="sidenav-item pt-4">
                                                    <h6 style="text-align: left;">Trạng thái </h6>
                                                    <select data-mdb-select-init>
                                                        <option value="0">Hợp lệ</option>
                                                        <option value="1">Không hợp lệ</option>
                                                    </select>
                                                </li>

                                                <li class="sidenav-item pt-4" style="display:flex">
                                                        <button type="submit" class="btn btn-primary m-1 btn-sm btn-block " style="width: 45%;height: 40px">
                                                            <i class="fa-solid fa-filter mr-1"></i> Bộ lọc
                                                        </button>
                                                        <button type="button" class="btn btn-danger m-1 btn-sm btn-block" style="width: 45%;height: 40px">
                                                            <i class="fa-solid fa-ban mr-1"></i> Cài lại
                                                        </button>
                                                </li>
                                            </ul>
                                        </nav>
                                        <button data-mdb-ripple-init data-mdb-toggle="sidenav" data-mdb-target="#sidenav-1" class="btn btn-secondary" aria-controls="#sidenav-1" aria-haspopup="true">
                                            <i class="fa-solid fa-filter"></i>Bộ lọc
                                        </button>
                                        <button type="button" class="btn btn-success" data-mdb-ripple-init  id="downloadexcel" ><i class="fas fa-file-excel fa-lg"></i> Excel</button>
                                        <button type="button" class="btn btn-danger" data-mdb-ripple-init id="dl-pdf"><i class="far fa-file-pdf fa-lg"></i> PDF</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <table class="table table-hover" id="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Mã nhập hàng</th>
                                    <th scope="col">Thành tiền</th>
                                    <th scope="col">Phí vận chuyển</th>
                                    <th scope="col">Giảm giá</th>
                                    <th scope="col">Tổng tiền</th>
                                    <th scope="col">Tạo ngày</th>
                                    <th scope="col">Người tạo</th>
                                    <th scope="col">Tình trạng</th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">Báo cáo</th>
                                </tr>
                            </thead>
                            <tbody id="table_body">
                                <?php
                                //! Handle Data Query Table
                                $rows = mysqli_query($conn, "SELECT 
                                purchases.*, 
                                client.name AS client_name,
                                (SELECT DISTINCT SUM(purchase_price) 
                                FROM `purchases_product` 
                                WHERE purchases_product.purchases_id = purchases.id
                                ) AS total_sale_price
                                    FROM 
                                        purchases 
                                    JOIN 
                                        client 
                                    ON 
                                        purchases.created_by = client.id 
                                    ORDER BY 
                                        purchases.id DESC;
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
                                                class="badge <?= $row['is_paid'] == 0 ? 'badge-primary' : 'badge-secondary'; ?> rounded-pill d-inline">
                                                <?= $row['is_paid'] == 0 ? 'Đã thanh toán' : 'Chưa thanh toán'; ?>
                                            </span>
                                        </td>
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
        </div>
    </div>
</main>


<?php include 'layout/footer.php'; ?>