<?php include '../../layout/header.php'; ?>
<?php include '../../utils/formatListRecipe.php'; ?>
<!--Main layout-->

<main style="margin-top: 58px;">
    <div class="container-fluid py-4 my-5">
        <div class="card text-center">
            <div class="card-header text-start">
                <?php
                if (isset($_GET['id'])) {
                    $value = $_GET['id'];
                    // Kết hợp giá trị $value vào phần tử HTML
                    echo "<h5>Xem thông tin chi tiết - Quyền & Vai Trò - #IRP$value</h5>";
                } else {
                    // Xử lý khi không có giá trị được truyền
                    echo "null";
                }
                ?>
            </div>
            <form action="">
                <!-- Query data -->
                <?php

                if (isset($_GET['id'])) {
                    $value = $_GET['id'];
                    // Thực hiện truy vấn SQL
                    $query = "SELECT role.*, permissions.guard_name AS guard_name FROM role JOIN permissions ON role.id_permissions = permissions.id WHERE role.id = $value";
                    $result = mysqli_query($conn, $query);
                    $i = 0; // Khởi tạo i
                    // Kiểm tra và hiển thị dữ liệu trả về
                    if ($result && mysqli_num_rows($result) > 0) {
                        $i++;
                        $row = mysqli_fetch_assoc($result);
                        $name = $row["name"];
                        $note = $row["note"];
                        $created_at = $row["created_at"];
                        $updated_at = $row["updated_at"];

                        // Chuyển đổi dữ liệu JSON thành mảng PHP

                        $guard_name = json_decode($row["guard_name"], true);
                        // Hiển thị dữ liệu trong thẻ html
                ?>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <!-- Name input -->
                                    <div class="form-outline" data-mdb-input-init>
                                        <input type="email" id="typeEmail" class="form-control active" value="<?= $name ?>" />
                                        <label class="form-label" for="text">Tên</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <!-- First name input -->
                                    <div data-mdb-input-init class="form-outline">
                                        <input type="text" id="form8Example3" class="form-control active" value="<?= $created_at ?>" />
                                        <label class="form-label" for="form8Example3">Ngày Tạo </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <!-- First name input -->
                                    <div data-mdb-input-init class="form-outline">
                                        <input type="text" id="form8Example3" class="form-control active" value="<?= $updated_at ?>" />
                                        <label class="form-label" for="form8Example3">Lịch Sử Cập Nhật</label>
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-12">
                                    <!-- Name input -->
                                    <div class="form-outline" data-mdb-input-init>
                                        <textarea class="form-control active" id="textAreaExample" rows="4"><?= $note ?></textarea>
                                        <label class="form-label" for="textAreaExample">Mô tả thông tin</label>
                                    </div>
                                </div>
                            </div>
                            <hr />
                        </div>


                        <?php


                        // Kiểm tra nếu có dữ liệu và là mảng
                        if (is_array($guard_name)) {
                            // Mở thẻ table
                            echo '<table class="table table-hover text-start">
                                    <thead>
                                        <tr>
                                            <th scope="col">Phân Quyền & Vai Trò</th>
                                            <th scope="col">Xem</th>
                                            <th scope="col">Tạo Mới</th>
                                            <th scope="col">Cập Nhật</th>
                                            <th scope="col">Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider table-divider-color ">';

                            // Khai báo biến đếm
                            $i = 1;

                            // Duyệt qua mảng dữ liệu và hiển thị vào bảng
                            foreach ($guard_name as $item) {
                                echo '<tr><th scope="row"><i class="fas fa-business-time"></i> ' . $item['name'] . '</th>';
                                echo isset($item['view']) ? '<td>' . ($item['view'] == 0 ? '<i class="fas fa-check"></i>' : '-') . '</td>' : '<td>-</td>';
                                echo isset($item['create']) ? '<td>' . ($item['create'] == 0 ? '<i class="fas fa-check"></i>' : '-') . '</td>' : '<td>-</td>';
                                echo isset($item['update']) ? '<td>' . ($item['update'] == 0 ? '<i class="fas fa-check"></i>' : '-') . '</td>' : '<td>-</td>';
                                echo isset($item['delete']) ? '<td>' . ($item['delete'] == 0 ? '<i class="fas fa-check"></i>' : '-') . '</td>' : '<td>-</td>';
                                echo '</tr>';
                                // Tăng biến đếm
                                $i++;
                            }
                            // Đóng thẻ table
                            echo '</tbody></table>';
                        } else {
                            echo 'Không có dữ liệu.';
                        }
                        ?>
                        <div class="card-footer text-muted d-flex justify-content-between">
                            <a href="<?= $base_url ?>permission.php" type="button" class="btn btn-secondary me-2" data-mdb-ripple-init>Quay về</a>
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
            </form>
        </div>
    </div>
</main>

<!--Main layout-->
<script src="https://cdn.jsdelivr.net/gh/Duc-Nguyen98/ManageCoffe/src/js/mdb.umd.min.js"></script>
<?php include '../../layout/footer.php'; ?>