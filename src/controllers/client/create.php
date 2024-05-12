<?php include '../../layout/header.php'; ?>
<?php include '../utils/resetInput.php'; ?>
<?php include '../../utils/generateToastScript.php'; ?>
<?php require 'script.php'; ?>



<!--Main layout-->

<main style="margin-top: 58px;">
    <div class="container-fluid py-4 my-5">
        <div class="card text-center">
            <div class="card-header text-start">
                <h5>Cập nhật thông tin chi tiết - #IAC </h5>
            </div>
            <div class="card-body">

                <form autocomplete="off" action="" method="POST">
                    <input type="hidden" id="id" value="" />
                    <div class="row">
                        <div class="col-2">
                            <!-- Name input -->
                            <div class="form-outline" data-mdb-input-init>
                                <input type="text" id="name" class="form-control active" value="" />
                                <label class="form-label" for="text">Họ Và Tên</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="email" id="email" class="form-control active" value="" />
                                <label class="form-label" for="form8Example<?= $value ?>">Email Đăng Nhập </label>
                            </div>
                        </div>
                        <div class="col-2">
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="password" id="password" class="form-control active" value="" />
                                <label class="form-label" for="form8Example<?= $value ?>">Mật Khẩu </label>
                            </div>
                        </div>
                        <div class="col-3">
                            <select data-mdb-select-init id="is_active">
                                <?php
                                // Thực hiện truy vấn SQL
                                $query = "SELECT DISTINCT is_active FROM `client`";
                                $result = mysqli_query($conn, $query);

                                // Lặp qua các kết quả và tạo các tùy chọn
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $isActive = $row['is_active'];
                                    $isActiveText = $isActive == 0 ? 'Đang hoạt động' : 'Tạm dừng hoạt động';
                                    $selected = ($isActive == $is_active) ? 'selected' : '';

                                    // Tạo tùy chọn với giá trị và văn bản tương ứng, và kiểm tra xem liệu nó có được chọn hay không
                                    echo "<option value='$isActive' $selected>$isActiveText</option>";
                                }
                                ?>
                            </select>


                            <label class="form-label select-label">Trạng Thái</label>
                        </div>
                        <div class="col-3">
                            <select data-mdb-select-init id="account_role">
                                <?php
                                // Thực hiện truy vấn SQL để lấy danh sách các role
                                $queryRoleOption = "SELECT id,name FROM `role`;";
                                $resultRoleOption = mysqli_query($conn, $queryRoleOption);

                                // Kiểm tra và hiển thị danh sách các option
                                if ($resultRoleOption && mysqli_num_rows($resultRoleOption) > 0) {
                                    $i = 1;
                                    while ($rowRoleOption = mysqli_fetch_assoc($resultRoleOption)) {
                                        // Hiển thị các option với giá trị là tên role và hiển thị là ID của role
                                        echo '<option value="' . $i++ . '">' . $rowRoleOption['name'] . '</option>';
                                    }
                                } else {
                                    // Xử lý trường hợp không có kết quả trả về
                                    echo '<option value="">Không có dữ liệu</option>';
                                }
                                ?>
                            </select>
                            <label class="form-label select-label">Quyền & Vai Trò</label>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <!-- We'll transform this input into a pond -->
                        <!-- <input type="file" id="uploadFile" class="filepond" name="filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="3"> -->
                        <!-- <input type="file" class="form-control" id="customFile" value=""/>
                                <img src="<?= $image ?>" class="card-img-top" alt="Chicago Skyscrapers" /> -->
                        <div class="col-12">
                            <!-- Name input -->
                            <div class="form-outline" data-mdb-input-init>
                                <textarea class="form-control active" id="note" rows="4" place></textarea   >
                                <label class="form-label" for="textAreaExample">Mô Tả Thông Tin</label>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer text-muted d-flex justify-content-between">
                        <a href="<?php echo $base_url; ?>client.php" type="button" class="btn btn-secondary me-2" data-mdb-ripple-init>Quay về</a>
                        <div class="d-flex">
                            <button id="btnLuuThayDoi" type="button" class="btn btn-primary me-2" data-mdb-ripple-init onclick="submitData('insert')">Lưu thay đổi</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>;
</main>



<!--Main layout-->

<script src="https://cdn.jsdelivr.net/gh/Duc-Nguyen98/ManageCoffe/src/js/mdb.umd.min.js"></script>

<?php include '../../layout/footer.php'; ?>