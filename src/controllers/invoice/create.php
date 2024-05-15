<?php include '../../layout/header.php'; ?>
<?php include '../../utils/formatCurrency.php'; ?>
<?php include '../../utils/barCode.php'; ?>

<!--Main layout-->

<main style="margin-top: 58px;">
    <div class="container-fluid py-4 my-5">
        <div class="card text-center">
            <div class="card-header text-start">
                <h5>Tạo mới hóa đơn - #IVP</h5>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-12">
                        <select data-mdb-select-init data-mdb-filter="true" id="recipes">
                            <?php
                            // Thực hiện truy vấn SQL
                            $query = "SELECT id,name,status FROM `recipe`";
                            $result = mysqli_query($conn, $query);

                            // Kiểm tra và hiển thị kết quả
                            if ($result && mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $valueOption = $row['id'];
                                    $name = $row['name'];
                                    $status = $row['status'];
                                    // Tạo các tùy 
                                    echo "<option value='' hidden selected></option>";

                                    echo "<option value='$valueOption'>$name</option>";
                                }
                            } else {
                                echo "<option value=''>Không có danh mục</option>";
                            }
                            ?>
                        </select>
                        <label class="form-label select-label">Danh Mục Công Thức</label>
                    </div>

                    <div class="row">
                        <table class="table">
                            <tbody>
                                <table class="table">
                                    <thead class="table-info">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Tên</th>
                                            <th scope="col">Barcode</th>
                                            <th scope="col">SL Khả dụng</th>
                                            <th scope="col">Số lượng</th>
                                            <th scope="col">Giá bán</th>
                                            <th scope="col">Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Thực hiện truy vấn SQL
                                        $query2 = "SELECT 
                                        recipe_product.*, 
                                        product.id, 
                                        product.name, 
                                        product.barcode, 
                                        product.inventory_export 
                                        FROM 
                                            recipe_product
                                        JOIN 
                                            product 
                                        ON 
                                            recipe_product.id_product = product.id
                                        JOIN
                                            recipe
                                        ON
                                            recipe_product.id_recipe = recipe.id
                                        WHERE 
                                            recipe.id = 2;
                                        ";
                                        $result2 = mysqli_query($conn, $query2);
                                        if ($result2 && mysqli_num_rows($result2) > 0) {
                                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                                $id = $row2['id'];
                                                $name = $row2['name'];
                                                $price_export = $row2['price_export'];
                                                $barcode = $row2['barcode'];
                                                $inventory_export = $row2['inventory_export'];
                                                $count_export = $row2['count_export'];
                                                ?>
                                                <tr>
                                                    <th scope="row">$valueOption</th>
                                                    <td class="fs-6 fw-bold"><?php echo $name; ?></td>
                                                    <td class="fs-6 fw-bolder">
                                                        <?php echo generateBarcodeHTML($barcode, $id); ?>
                                                    </td>
                                                    <td>
                                                        <div class="input-group mb-3">
                                                            <input type="number" class="form-control" placeholder=""
                                                                aria-label="" min="0" aria-describedby="basic-addon2" disabled
                                                                value="<?php echo $inventory_export; ?>" />
                                                            <span class="input-group-text" id="basic-addon2">SL</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group mb-3">
                                                            <input type="number" class="form-control" placeholder=""
                                                                aria-label="" min="0" aria-describedby="basic-addon2"
                                                                value="<?= $count_export ?>" id="sum_quanity"
                                                                onchange="calculateSum()" />
                                                            <span class="input-group-text" id="basic-addon2">SL</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" placeholder="" aria-label=""
                                                                aria-describedby="basic-addon2" value="<?= $price_export ?>"
                                                                id="sum_sale_price" oninput="calculateSum()" />
                                                            <span class="input-group-text" id="basic-addon2">VNĐ</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" placeholder="" aria-label=""
                                                                aria-describedby="basic-addon2"
                                                                value="<?= $price_export * $count_export ?>" id="sum_total"
                                                                disabled />
                                                            <span class="input-group-text" id="basic-addon2">VNĐ</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        } else {
                                            echo "Không có dữ liệu.";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </tbody>
                        </table>

                    </div>
                    <div class="row mt-4 py-4 text-end">
                        <div class="row my-3">
                            <div class="col-10 ">
                                <h6>Tổng số lượng: </h6>
                            </div>
                            <div class="col-2 ">
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" placeholder="" aria-label=""
                                        aria-describedby="basic-addon2" value="" disabled />
                                    <span class="input-group-text" id="basic-addon2">SP</span>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-10 ">
                                <h6>Tổng tiền hàng: </h6>
                            </div>
                            <div class="col-2">
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" placeholder="" aria-label=""
                                        aria-describedby="basic-addon2" value="" disabled oninput="calculateSum()" />
                                    <span class="input-group-text" id="basic-addon2">VNĐ</span>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-10 ">
                                <h6>Giảm giá hóa đơn: </h6>
                            </div>
                            <div class="col-2">
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" placeholder="" aria-label=""
                                        aria-describedby="basic-addon2" id="discount" value=""
                                        oninput="calculateSum()" />
                                    <span class="input-group-text" id="basic-addon2">%</span>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-10">
                                <h6>Phí vận chuyển: </h6>
                            </div>
                            <div class="col-2">
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" placeholder="" aria-label=""
                                        aria-describedby="basic-addon2" id="transport" value=""
                                        oninput="calculateSum()" />
                                    <span class="input-group-text" id="basic-addon2">VNĐ</span>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-10 ">
                                <h6>Tổng tiền: </h6>
                            </div>
                            <div class="col-2">
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" placeholder="" aria-label=""
                                        aria-describedby="basic-addon2" id="final_value" value="" disabled
                                        oninput="calculateSum()" />
                                    <span class="input-group-text" id="basic-addon2">VNĐ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted d-flex justify-content-between pt-4">
                    <a href="<?= $base_url ?>invoice.php" type="button" class="btn btn-secondary me-2"
                        data-mdb-ripple-init>Quay về</a>
                    <button id="btnLuuThayDoi" type="button" class="btn btn-primary me-2" data-mdb-ripple-init
                        onclick="submitData2('create')">Lưu thay đổi</button>
                </div>
            </div>
        </div>
</main>

<!--Main layout-->
<script>

    window.onload = function () {
        // Lấy giá trị ban đầu của s1 và s2 khi trang được tải
        let initialS1 = parseFloat(document.getElementById('sum_quanity').value) || 0;
        let initialS2 = parseFloat(document.getElementById('sum_sale_price').value) || 0;
        let d3 = document.getElementById("discount").defaultValue = 0;
        let d4 = document.getElementById("transport").defaultValue = 0;
     

        // Hiển thị kết quả tính toán ban đầu
        calculateSum(initialS1, initialS2);

    }




    function calculateSum(a, b) {
        let s1 = parseFloat(document.getElementById('sum_quanity').value) || 0;
        let s2 = parseFloat(document.getElementById('sum_sale_price').value) || 0;
        sum = s1 * s2;
        document.getElementById('sum_total').value = sum

        let s3 = parseFloat(document.getElementById('discount').value) || 0;
        let s4 = parseFloat(document.getElementById('transport').value) || 0;
        // let s5 = s1 + s2 + s3 + s4;
        // document.getElementById('final_value').value = s5;
        // document.getElementById('final_value').value = s5;
        console.log(s1, s2, sum);


    }
</script>
<!-- MDBootstrap JS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/Duc-Nguyen98/ManageCoffe/src/js/mdb.umd.min.js"></script>
<?php include '../../layout/footer.php'; ?>