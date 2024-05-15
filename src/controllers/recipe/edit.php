<?php include '../../layout/header.php'; ?>
<?php include '../../utils/formatCurrency.php'; ?>
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
                    echo "<h5>Xem thông tin chi tiết - #IDR$value</h5>";
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
                    r.*,  -- Lấy tất cả các cột từ bảng recipe
                    p.name AS product_name, 
                    rp.count_export, 
                    p.purchase_price
                    FROM recipe r
                    JOIN recipe_product rp ON r.id = rp.id_recipe  -- Kết nối bảng recipe với recipe_product
                    JOIN product p ON rp.id_product = p.id  -- Kết nối bảng recipe_product với product
                    WHERE r.id = $value;  -- Giả sử bạn muốn thông tin cho công thức với id là 1
                    ";
                    $result = mysqli_query($conn, $query);

                    // Kiểm tra và hiển thị dữ liệu trả về
                    if ($result && mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $name = $row["name"];
                        $image = $row["image"];
                        $price_recipe = $row["price_recipe"];
                        $count_export = $row["count_export"];
                        $purchase_price = $row["purchase_price"];
                        $created_at = $row["created_at"];
                        $updated_at = $row["updated_at"];
                        $created_by = $row["created_by"];
                        $des_recipe = $row["des_recipe"];

                        ?>
                        <div class="row">
                            <div class="col-3">
                                <!-- Email input -->
                                <div data-mdb-input-init class="form-outline">
                                    <input type="email" id="form8Example2" class="form-control active" value="<?= $name ?>" />
                                    <label class="form-label" for="form8Example<?= $value ?>">Tên Công Thức </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <!-- Email input -->
                                <div data-mdb-input-init class="form-outline">
                                    <input type="email" id="form8Example2" class="form-control active"
                                        value="<?= formatCurrency($price_recipe) ?>" />
                                    <label class="form-label" for="form8Example<?= $value ?>">Giá Bán </label>
                                </div>
                            </div>
                            <div class="col-2">
                                <!-- Name input -->
                                <div class="form-outline" data-mdb-input-init>
                                    <input type="email" id="typeEmail" class="form-control active" value="<?= $created_by ?>" />
                                    <label class="form-label" for="text">Tác Giả </label>
                                </div>
                            </div>
                            <div class="col-2">
                                <!-- First name input -->
                                <div data-mdb-input-init class="form-outline">
                                    <input type="text" id="form8Example3" class="form-control active"
                                        value="<?= $created_at ?>" />
                                    <label class="form-label" for="form8Example3">Ngày Tạo</label>
                                </div>
                            </div>
                            <div class="col-2">
                                <!-- First name input -->
                                <div data-mdb-input-init class="form-outline">
                                    <input type="text" id="form8Example3" class="form-control active"
                                        value="<?= $updated_at ?>" />
                                    <label class="form-label" for="form8Example3">Lịch Sử Cập Nhật</label>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-7">
                                <!-- Name input -->
                                <?php
                                if (isset($_GET['id'])) {
                                    $value = $_GET['id'];
                                    // Thực hiện truy vấn SQL
                                    $query2 = "SELECT product.id, product.barcode, product.name, recipe_product.count_export, product.purchase_price
    FROM recipe_product 
    JOIN product ON recipe_product.id_product = product.id
    WHERE recipe_product.id_recipe = $value";
                                    $result2 = mysqli_query($conn, $query2);

                                    // Kiểm tra và hiển thị dữ liệu trả về
                                    if ($result2 && mysqli_num_rows($result2) > 0) {
                                        echo '<table class="table table-hover">
                                                <thead>
                                                    <tr class="table">
                                                        <th scope="col">#</th>
                                                        <th scope="col">Barcode</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Count Export</th>
                                                        <th scope="col">Purchase Price</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>';
                                        // Đọc từng bản ghi và hiển thị dữ liệu
                                        while ($row2 = mysqli_fetch_assoc($result2)) {
                                            echo "<tr>";
                                            echo "<th scope='row'>" . $row2['id'] . "</th>";
                                            echo "<td>" . generateBarcodeHTML($row2['barcode'], $row2['id']) . "</td>";
                                            echo "<td><p class='fs-6 fw-bold'> " . $row2['name'] . "</p></td>";


                                            echo "<td><div class='form-outline' data-mdb-input-init>" .
                                                "<input type='number' id='typeNumber' class='form-control' value='" . $row2['count_export'] . "' />" .
                                                
                                                "</div></td>";

                                            echo "<td><strong>" . formatCurrency($row2['purchase_price']) . "</strong></td>";
                                            echo "<td>Delete</td>";
                                            echo "</tr>";
                                        }
                                        echo '</tbody></table>';
                                    } else {
                                        echo "<p>Không tìm thấy dữ liệu hoặc có lỗi xảy ra trong quá trình truy vấn.</p>";
                                    }
                                } else {
                                    echo "<p>Không tìm thấy dữ liệu hoặc có lỗi xảy ra trong quá trình truy vấn.</p>";
                                }
                                ?>

                            </div>
                            <div class="col-5">
                                <!-- Name input -->
                                <div class="form-outline" data-mdb-input-init>
                                    <textarea class="form-control active" id="textAreaExample"
                                        rows="12"><?= $des_recipe ?></textarea>
                                    <label class="form-label" for="textAreaExample">Các bước pha chế & chế biến:</label>
                                </div>
                            </div>
                        </div>

                        <hr />

                        <div class="card-footer text-muted d-flex justify-content-between">
                            <a href="<?php echo $base_url; ?>recipe.php" type="button" class="btn btn-secondary me-2"
                                data-mdb-ripple-init>Quay về</a>
                            <div class="d-flex">
                                <button id="btnLuuThayDoi" type="button" class="btn btn-primary me-2" data-mdb-ripple-init
                                    onclick="submitData2('insert')">Lưu thay đổi</button>
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