<?php include '../../layout/header.php'; ?>
<?php include '../../utils/barCode.php'; ?>

<!--Main layout-->

<main style="margin-top: 58px;">
    <div class="container-fluid py-4 my-5">
        <div class="card text-center">
            <div class="card-header text-start">
                <?php
                if (isset($_GET['id'])) {
                    $value = $_GET['id'];
                    // Kết hợp giá trị $value vào phần tử HTML
                    echo "<h5>Xem thông tin chi tiết - #ISP$value</h5>";
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
                        product.id = $value
                    ";
                    $result = mysqli_query($conn, $query);

                    // Kiểm tra và hiển thị dữ liệu trả về
                    if ($result && mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $name = $row["name"];
                        $image = $row["image"];
                        $slug = $row["slug"];
                        $idcategory     = $row["idcategory"];
                        $barcode     = $row["barcode"];
                        $purchase_price     = $row["purchase_price"];
                        $inventory_import     = $row["inventory_import"];
                        $inventory_export     = $row["inventory_export"];
                        $inventory_count     = $inventory_import - $inventory_export;
                        $note     = $row["note"];
                        $status     = $row["status"];
                        $barcode     = $row["barcode"];
                        $created_at     = $row["created_at"];
                        $update_at = $row["update_at"];
                        $categories_name = $row["categories_name"];
                        $brands_name = $row["brands_name"];
                        $units_name  = $row["units_name"];

                ?>
                        <div class="row">
                            <div class="col-2">
                                <!-- Email input -->
                                <div data-mdb-input-init class="form-outline">
                                    <input type="email" id="form8Example2" class="form-control active" value="<?= $name ?>" />
                                    <label class="form-label" for="form8Example<?= $value ?>">Tên Công Thức </label>
                                </div>
                            </div>
                            <div class="col-2">
                                <!-- Email input -->
                                <div data-mdb-input-init class="form-outline">
                                    <input type="email" id="form8Example2" class="form-control active" value="<?= $slug ?>" />
                                    <label class="form-label" for="form8Example<?= $value ?>">slug </label>
                                </div>
                            </div>
                            <div class="col-2">
                                <!-- Email input -->
                                <div data-mdb-input-init class="form-outline">
                                    <input type="email" id="form8Example2" class="form-control active" value="<?= $purchase_price ?> VNĐ" />
                                    <label class="form-label" for="form8Example<?= $value ?>">Giá Nhập </label>
                                </div>
                            </div>
                            <div class="col-2">
                                <!-- Last name input -->
                                <div data-mdb-input-init class="form-outline">
                                    <input type="text" id="form8Example4" class="form-control active" value="<?= $categories_name ?>" />
                                    <label class="form-label" for="form8Example4">Danh Mục</label>
                                </div>
                            </div>
                            <div class="col-2">
                                <!-- First name input -->
                                <div data-mdb-input-init class="form-outline">
                                    <input type="text" id="form8Example3" class="form-control active" value="<?= $brands_name ?>" />
                                    <label class="form-label" for="form8Example3">Thương Hiệu</label>
                                </div>
                            </div>

                            <div class="col-2">
                                <!-- Last name input -->
                                <div data-mdb-input-init class="form-outline">
                                    <input type="text" id="form8Example4" class="form-control active" value="<?= ($status == 0 ? " Đang hoạt động" : "Tạm dừng hoạt động") ?>" />
                                    <label class="form-label" for="form8Example4">Trạng Thái	</label>
                                </div>
                            </div>
                        </div>
                        <hr />
                      
                        <div class="row">
                            <div class="col-2">
                                <!-- First name input -->
                                <div data-mdb-input-init class="form-outline">
                                    <input type="text" id="form8Example3" class="form-control active" value="<?= $inventory_import ?> Sản Phẩm" />
                                    <label class="form-label" for="form8Example3">Tổng Nhập</label>
                                </div>
                            </div>
                            <div class="col-2">
                                <!-- First name input -->
                                <div data-mdb-input-init class="form-outline">
                                    <input type="text" id="form8Example3" class="form-control active" value="<?= $inventory_export ?> Sản Phẩm" />
                                    <label class="form-label" for="form8Example3">Tổng Xuất</label>
                                </div>
                            </div>
                            <div class="col-2">
                                <!-- First name input -->
                                <div data-mdb-input-init class="form-outline">
                                    <input type="text" id="form8Example3" class="form-control active" value="<?= $inventory_count ?> Sản Phẩm" />
                                    <label class="form-label" for="form8Example3">Tồn Kho</label>
                                </div>
                            </div>
                            <div class="col-2">
                                <!-- First name input -->
                                <div data-mdb-input-init class="form-outline">
                                    <input type="text" id="form8Example4" class="form-control active" value="<?= $units_name ?>" />
                                    <label class="form-label" for="form8Example4">Đơn Vị Đo</label>
                                </div>
                            </div>
                            <div class="col-2">
                                <!-- First name input -->
                                <div data-mdb-input-init class="form-outline">
                                    <input type="text" id="form8Example3" class="form-control active" value="<?= $created_at ?>" />
                                    <label class="form-label" for="form8Example3">Ngày Tạo</label>
                                </div>
                            </div>
                            <div class="col-2">
                                <!-- First name input -->
                                <div data-mdb-input-init class="form-outline">
                                    <input type="text" id="form8Example3" class="form-control active" value="<?= $update_at ?>" />
                                    <label class="form-label" for="form8Example3">Lịch Sử Cập Nhật</label>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-3">
                                <img src="<?= $image ?>" class="card-img-top" alt="Chicago Skyscrapers" />
                            </div>
                            <div class="col-6">
                                <!-- Name input -->
                                <div class="form-outline" data-mdb-input-init>
                                    <textarea class="form-control active" id="textAreaExample" rows="12"><?= $note ?></textarea>
                                    <label class="form-label" for="textAreaExample">Mô Tả Thông Tin</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <td class="text-center">
                                    <h5>Mã Vạch Sản Phẩm - #ISP <?= $value ?></h5>
                                    <?= generateBarcodeHTML($row['barcode'], $row['id']) ?>

                                </td>
                            </div>
                        </div>
                        <hr />
                        <div class="card-footer text-muted d-flex justify-content-between">
                            <a href="<?= $base_url ?>product.php" type="button" class="btn btn-secondary me-2" data-mdb-ripple-init>Quay về</a>
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