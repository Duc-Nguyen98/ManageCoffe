<?php include '../../layout/header.php'; ?>
<!--Main layout-->

<main style="margin-top: 58px;">
    <div class="container-fluid py-4 my-5">
        <div class="card text-center">
            <div class="card-header text-start">
                <h5>Tạo mới thông tin chi tiết - #IDR </h5>

            </div>
            <div class="card-body">
                <!-- Query data -->
                <div class="row">
                    <div class="col-3">
                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline">
                            <input type="text" id="name" class="form-control active" value="" />
                            <label class="form-label" for="form8Example<?= $value ?>">Tên Công Thức </label>
                        </div>
                    </div>
                    <div class="col-3">
                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline">
                            <input type="text" id="slug" class="form-control active" value="" />
                            <label class="form-label" for="form8Example<?= $value ?>">slug </label>
                        </div>
                    </div>
                    <div class="col-3">
                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline">
                            <input type="number" id="price_recipe" class="form-control active" value="" />
                            <label class="form-label" for="form8Example<?= $value ?>">Giá tham khảo </label>
                        </div>
                    </div>
                    <div class="col-3">
                        <!-- Name input -->
                        <div class="form-outline" data-mdb-input-init>
                            <input type="text" id="created_by" class="form-control active" value="" />
                            <label class="form-label" for="text">Tác Giả </label>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-12">
                        <div class="accordion" id="accordionExample">
                            <?php
                            // Dữ liệu từ truy vấn
                            $data = [
                                ['id' => 1, 'name' => 'Bạc hà', 'slug' => 'bac-ha 1', 'category_name' => 'Cà phê'],
                                ['id' => 2, 'name' => 'Bạc hà 1', 'slug' => 'bac-ha 2', 'category_name' => 'Cà phê'],
                                ['id' => 3, 'name' => 'Bạc hà 2', 'slug' => 'bac-ha 3', 'category_name' => 'Cà phê'],
                                ['id' => 4, 'name' => 'Bạc hà 3', 'slug' => 'bac-ha 4', 'category_name' => 'Cà phê'],
                                ['id' => 5, 'name' => 'Hạt bạch quả 1', 'slug' => 'hat-bach-qua 1', 'category_name' => 'Phụ trợ'],
                                ['id' => 6, 'name' => 'Hạt bạch quả 2', 'slug' => 'hat-bach-qua 2', 'category_name' => 'Phụ trợ'],
                                ['id' => 7, 'name' => 'Hạt bạch quả 3', 'slug' => 'hat-bach-qua 3', 'category_name' => 'Phụ trợ'],
                                ['id' => 8, 'name' => 'Hạt bạch quả 4', 'slug' => 'hat-bach-qua 4', 'category_name' => 'Phụ trợ'],
                                // Thêm các dòng dữ liệu khác ở đây...
                            ];

                            // Tạo mảng để nhóm các mục theo category_name
                            $count = 1;
                            $grouped_data = [];
                            foreach ($data as $row) {
                                $category_name = $row['category_name'];
                                if (!isset($grouped_data[$category_name])) {
                                    $grouped_data[$category_name] = [];
                                }
                                $grouped_data[$category_name][] = $row;
                            }

                            // Hiển thị các collapse accordion tương ứng với từng nhóm mục
                            foreach ($grouped_data as $category_name => $items) {
                                ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading<?php echo $category_name; ?>">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse<?php echo $id; ?>" aria-expanded="true"
                                            aria-controls="collapse<?php echo $id; ?>">
                                            <h5><?php echo $count . '. Danh Mục ' . $category_name; ?></h5>
                                        </button>
                                    </h2>
                                    <div id="collapse<?php echo $category_name; ?>" class="accordion-collapse collapse show"
                                        aria-labelledby="heading<?php echo $category_name; ?>"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body text-start">
                                            <?php foreach ($items as $item) { ?>
                                                <div class="row">
                                                    <div class="col-8">
                                                        <strong>- Nguyên Liệu: <?php echo $item['name']; ?></strong><br>
                                                        *Slug: <?php echo $item['slug']; ?>
                                                    </div>
                                                    <div class="col-4"> <!-- Sửa đổi col-2 thành col-4 -->
                                                        <div class="form-outline" data-mdb-input-init>
                                                            <input type="number" id="typeNumber_<?php echo $item['id']; ?>"
                                                                min="0" max="50" class="form-control" />
                                                            <label class="form-label"
                                                                for="typeNumber_<?php echo $item['id']; ?>">Số lượng</label>
                                                        </div>
                                                        <hr>
                                                        <div class="shadow-5">
                                                            <select data-mdb-select-init data-mdb-filter="true"
                                                                id="idcategory_<?php echo $item['id']; ?>">
                                                                <?php
                                                                // Thực hiện truy vấn SQL
                                                                $query = "SELECT DISTINCT id, symbol FROM `units`";
                                                                $result = mysqli_query($conn, $query);

                                                                // Kiểm tra và hiển thị kết quả
                                                                if ($result && mysqli_num_rows($result) > 0) {
                                                                    while ($unit_row = mysqli_fetch_assoc($result)) {
                                                                        $id = $unit_row['id'];
                                                                        $symbol = $unit_row['symbol'];
                                                                        // Tạo các tùy chọn
                                                                        echo "<option value='$id'>$symbol</option>";
                                                                    }
                                                                } else {
                                                                    echo "<option value=''>Không có danh mục</option>";
                                                                }
                                                                ?>
                                                            </select>
                                                            <label class="form-label select-label"
                                                                for="typeNumber_<?php echo $item['id']; ?>">Đơn
                                                                vị</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <hr>
                                                <br>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="card-footer text-muted d-flex justify-content-between">
                    <a href="<?php echo $base_url; ?>repice.php" type="button" class="btn btn-secondary me-2"
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

<!--Main layout-->
<script src="https://cdn.jsdelivr.net/gh/Duc-Nguyen98/ManageCoffe/src/js/mdb.umd.min.js"></script>
<?php include '../../layout/footer.php'; ?>