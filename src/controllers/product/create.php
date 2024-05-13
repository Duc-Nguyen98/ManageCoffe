    <?php include '../../layout/header.php'; ?>
    <?php include '../../utils/barCode.php'; ?>
    <?php require 'script.php'; ?>


    <!--Main layout-->

    <main style="margin-top: 58px;">
        <div class="container-fluid py-4 my-5">
            <div class="card text-center">
                <div class="card-header text-start">
                    <h5>Tạo mới thông tin chi tiết - #ISP </h5>
                </div>
                <div class="card-body">
                    <!-- Query data -->
                    <div class="row">
                        <div class="col-3">
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="name" class="form-control " value="" />
                                <label class="form-label" for="form8Example<?= $value ?>">Tên Công Thức </label>
                            </div>
                        </div>
                        <div class="col-3">
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="slug" class="form-control " value="" />
                                <label class="form-label" for="form8Example<?= $value ?>">slug </label>
                            </div>
                        </div>
                        <div class="col-3">
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="number" id="purchase_price" class="form-control " value="" />
                                <label class="form-label" for="form8Example<?= $value ?>">Giá Nhập </label>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="shadow-5">
                                <select data-mdb-select-init data-mdb-filter="true" id="unit_id">
                                    <label class="form-label select-label">Đơn vị đo</label>
                                    <?php
                                    // Thực hiện truy vấn SQL
                                    $query = "SELECT DISTINCT id, name FROM `units`";
                                    $result = mysqli_query($conn, $query);

                                    // Lặp qua các kết quả và tạo các tùy chọn
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $id = $row['id'];
                                        $name = $row['name'];
                                        echo "<option value='$id'>$name</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3">
                            <!-- Last name input -->
                            <select data-mdb-select-init data-mdb-filter="true" id="idcategory">
                                <?php
                                // Thực hiện truy vấn SQL
                                $query = "SELECT DISTINCT id, name FROM `product_categories`";
                                $result = mysqli_query($conn, $query);

                                // Kiểm tra và hiển thị kết quả
                                if ($result && mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $id = $row['id'];
                                        $name = $row['name'];
                                        // Tạo các tùy chọn
                                        echo "<option value='$id'>$name</option>";
                                    }
                                } else {
                                    echo "<option value=''>Không có danh mục</option>";
                                }
                                ?>
                            </select>
                            <label class="form-label select-label">Danh Mục</label>

                        </div>
                        <div class="col-3">
                            <select data-mdb-select-init data-mdb-filter="true" id="brand_id">
                                <?php
                                // Thực hiện truy vấn SQL
                                $query = "SELECT DISTINCT id,name FROM `brands` ";

                                $result = mysqli_query($conn, $query);

                                // Kiểm tra và hiển thị kết quả
                                if ($result && mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $id = $row['id'];
                                        $name = $row['name'];
                                        // Tạo các tùy chọn
                                        echo "<option value='$id'>$name</option>";
                                    }
                                } else {
                                    echo "<option value=''>Không có thương hiệu</option>";
                                }
                                ?>
                            </select>
                            <label class="form-label select-label">Thương hiệu</label>

                        </div>

                        <div class="col-3">
                            <div class="shadow-5">
                                <select data-mdb-select-init id="status">
                                    <option value="0">Đang hợp tác</option>
                                    <option value="1">Tạm ngừng hợp tác </option>
                                </select>
                                <label class="form-label select-label">Trạng Thái</label>
                            </div>
                        </div>
                        <div class="col-3">
                            <select data-mdb-select-init id="barcode">
                                <option value="1">Tạo tự động</option>
                                <option value="2" disabled>Tạo thủ công</option>
                            </select>
                            <label class="form-label select-label">Tạo mã vạch</label>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-12">
                            <!-- Name input -->
                            <div class="form-outline" data-mdb-input-init>
                                <textarea class="form-control " id="note" rows="12"></textarea>
                                <label class="form-label" for="textAreaExample">Mô Tả Thông Tin</label>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer text-muted d-flex justify-content-between">
                        <a href="<?php echo $base_url; ?>product.php" type="button" class="btn btn-secondary me-2"
                            data-mdb-ripple-init>Quay về</a>
                        <div class="d-flex">
                            <button id="btnLuuThayDoi" type="button" class="btn btn-primary me-2" data-mdb-ripple-init
                                onclick="submitData2('insert')">Lưu thay đổi</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>;

    </main>
    <script>
        function submitData2(action) {
            var name = document.getElementById("name").value;
            var slug = document.getElementById("slug").value;
            var idcategory = document.getElementById("idcategory").value;
            var purchase_price = document.getElementById("purchase_price").value;
            var note = document.getElementById("note").value;
            var status = document.getElementById("status").value;
            var brand_id = document.getElementById("brand_id").value;
            var unit_id = document.getElementById("unit_id").value;

            if (name === '' || slug === '' || idcategory === '' || purchase_price === '' || status === '' || brand_id === '' || unit_id === '') {
                alert("Vui lòng điền đầy đủ thông tin.");
            } else {
                submitData('insert');
            }
        }
    </script>
    <!--Main layout-->
    <script src="https://cdn.jsdelivr.net/gh/Duc-Nguyen98/ManageCoffe/src/js/mdb.umd.min.js"></script>
    <?php include '../../layout/footer.php'; ?>