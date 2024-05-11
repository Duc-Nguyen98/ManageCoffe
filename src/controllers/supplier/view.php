<?php include '../../layout/header.php'; ?>
<!--Main layout-->

<main style="margin-top: 58px;">
    <div class="container-fluid py-4 my-5">
        <div class="card text-center">
            <div class="card-header text-start">
                <?php
                if (isset($_GET['id'])) {
                    $value = $_GET['id'];
                    // Kết hợp giá trị $value vào phần tử HTML
                    echo "<h5>Xem thông tin chi tiết - #NCC$value </h5>";
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
                    $query = "SELECT * FROM `suppliers` WHERE id = $value";
                    $result = mysqli_query($conn, $query);

                    // Kiểm tra và hiển thị dữ liệu trả về
                    if ($result && mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $name = $row["name"];
                        $image = $row["image"];
                        $email = $row["email"];
                        $phone     = $row["phone"];
                        $company_name    = $row["company_name"];
                        $address = $row["address"];
                        $status     = $row["status"];
                        $update_at = $row["update_at"];
                ?>
                        <div class="row">
                            <div class="col-4">
                                <!-- Email input -->
                                <div data-mdb-input-init class="form-outline">
                                    <input type="email" id="form8Example2" class="form-control active" value="<?= $name ?>" />
                                    <label class="form-label" for="form8Example<?= $value ?>">Nhà Cung Cấp</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <!-- Name input -->
                                <div class="form-outline" data-mdb-input-init>
                                    <input type="email" id="typeEmail" class="form-control active" value="<?= $phone ?>" />
                                    <label class="form-label" for="text">Số Điện Thoại </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <!-- Email input -->
                                <div data-mdb-input-init class="form-outline">
                                    <input type="email" id="form8Example2" class="form-control active" value="<?= $company_name ?>" />
                                    <label class="form-label" for="form8Example<?= $value ?>">Công Ty </label>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-4">
                                <!-- First name input -->
                                <div data-mdb-input-init class="form-outline">
                                    <input type="text" id="form8Example3" class="form-control active" value="<?= $update_at ?>" />
                                    <label class="form-label" for="form8Example3">Lịch Sử Cập Nhật</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <!-- Last name input -->
                                <!-- Last name input -->
                                <div data-mdb-input-init class="form-outline">
                                    <input type="text" id="form8Example4" class="form-control active" value="<?= ($status == 0 ? " Đang hợp tác	" : "Tạm dừng hợp tác") ?>" />
                                    <label class="form-label" for="form8Example4">Trạng Thái</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <!-- First name input -->
                                <div data-mdb-input-init class="form-outline">
                                    <input type="text" id="form8Example3" class="form-control active" value="<?= $address ?>" />
                                    <label class="form-label" for="form8Example3">Địa Chỉ </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <img src="<?=$image ?>" class="img-fluid rounded-circle" alt="Townhouses and Skyscrapers" />
                            </div>
                        </div>
                        <div class="card-footer text-muted d-flex justify-content-between">
                            <a href="<?= $base_url ?>supplier.php" type="button" class="btn btn-secondary me-2" data-mdb-ripple-init>Quay về</a>
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