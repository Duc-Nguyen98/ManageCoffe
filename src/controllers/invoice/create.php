<?php include '../../layout/header.php'; ?>
<?php include '../../utils/formatCurrency.php'; ?>

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
                        <select id="multiSelection" name="recipes" class="form-select" data-mdb-select-init>

                            <?php
                            $query = "SELECT * FROM `recipe`";
                            $result = $conn->query($query);

                            // Check if there are results
                            if ($result->num_rows > 0) {
                                // Loop through the results and create an option for each row
                                while ($row = $result->fetch_assoc()) {
                                    echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                                }

                            } else {
                                echo '<option value="">Không tìm thấy công thức, vui lòng thử lại sau!</option>';
                            }
                            ?>
                            <label class="form-label select-label">Chọn công thức</label>';
                        </select>
                    </div>

                    <div class="row">
                        <table class="table">
                            <tbody>
                                <table class="table">
                                    <thead class="table-info">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nguyên Liệu</th>
                                            <th scope="col">Số lượng</th>
                                            <th scope="col">Giá bán</th>
                                            <th scope="col">Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><b><span class="fw-light">#IDR1</span>-1</b></td>
                                            <td><b>1/SL</b></td>
                                            <td><b>1</b></td>
                                            <td><b>1</b></td>
                                        </tr>
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
                                        aria-describedby="basic-addon2" id="sum_quanity" value="" disabled
                                        oninput="calculateSum()" />
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
                                        aria-describedby="basic-addon2" id="sum_sale_price" value="" disabled
                                        oninput="calculateSum()" />
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
                                <h6>Thành tiền: </h6>
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
    let d1 = document.getElementById("sum_quanity").defaultValue = 0;
    let d2 = document.getElementById("sum_sale_price").defaultValue = 0;
    let d3 = document.getElementById("discount").defaultValue = 0;
    let d4 = document.getElementById("transport").defaultValue = 0;
    let d5 = document.getElementById("final_value").defaultValue = 0;

    function calculateSum() {
        let s1 = parseFloat(document.getElementById('sum_quanity').value) || 0;
        let s2 = parseFloat(document.getElementById('sum_sale_price').value) || 0;
        let s3 = parseFloat(document.getElementById('discount').value) || 0;
        let s4 = parseFloat(document.getElementById('transport').value) || 0;
        let s5 = s1 + s2 + s3 + s4;
        document.getElementById('final_value').value = s5;
    }
</script>
<!-- MDBootstrap JS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/Duc-Nguyen98/ManageCoffe/src/js/mdb.umd.min.js"></script>
<?php include '../../layout/footer.php'; ?>