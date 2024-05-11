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
                    $query = "SELECT * FROM `recipe` WHERE id = $value";
                    $result = mysqli_query($conn, $query);

                    // Kiểm tra và hiển thị dữ liệu trả về
                    if ($result && mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $name = $row["name"];
                        $image = $row["image"];
                        $slug = $row["slug"];
                        $des_recipe     = $row["des_recipe"];
                        $created_by = $row["created_by"];
                        $created_at = $row["created_at"];
                        $updated_at = $row["updated_at"];
                        $list_recipe = json_decode($row["list_recipe"], true);

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
                                    <input type="email" id="form8Example2" class="form-control active" value="<?= $slug ?>" />
                                    <label class="form-label" for="form8Example<?= $value ?>">slug </label>
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
                                    <input type="text" id="form8Example3" class="form-control active" value="<?= $created_at ?>" />
                                    <label class="form-label" for="form8Example3">Ngày Tạo</label>
                                </div>
                            </div>
                            <div class="col-2">
                                <!-- First name input -->
                                <div data-mdb-input-init class="form-outline">
                                    <input type="text" id="form8Example3" class="form-control active" value="<?= $updated_at ?>" />
                                    <label class="form-label" for="form8Example3">Lịch Sử Cập Nhật</label>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-3">
                                <img src="<?= $image ?>" class="card-img-top" alt="Chicago Skyscrapers" />
                            </div>

                            <div class="col-3">
                                <!-- Name input -->
                                <ol class="list-group list-group-light list-group-numbered">
                                    <?php foreach ($list_recipe as $list) : ?>
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto">
                                                <div class="fw-bold"><?= $list['ingredient'] ?></div>
                                            </div>
                                            <span class="badge badge-primary rounded-pill"><?= $list['quantity'] . ' ' . $list['unit'] ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                            <div class="col-6">
                                <!-- Name input -->
                                <div class="form-outline" data-mdb-input-init>
                                    <textarea class="form-control active" id="textAreaExample" rows="12"><?= $des_recipe ?></textarea>
                                    <label class="form-label" for="textAreaExample">Các bước pha chế & chế biến:</label>
                                </div>
                            </div>
                        </div>

                        <hr />

                        <div class="card-footer text-muted d-flex justify-content-between">
                            <a href="<?= $base_url ?>recipe.php" type="button" class="btn btn-secondary me-2" data-mdb-ripple-init>Quay về</a>
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