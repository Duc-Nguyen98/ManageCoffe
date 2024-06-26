<?php include '../../layout/header.php'; ?>
<?php include '../utils/resetInput.php'; ?>
<?php include '../../utils/generateToastScript.php'; ?>
<?php require 'script.php'; ?>



<!--Main layout-->

<main style="margin-top: 58px;">
    <div class="container-fluid py-4 my-5">
        <div class="card text-center">
            <div class="card-header text-start">
                <?php
                if (isset($_GET['id'])) {
                    $value = $_GET['id'];
                    // Kết hợp giá trị $value vào phần tử HTML
                    echo "<h5>Cập nhật thông tin chi tiết - #IAC$value </h5>";
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
                    $query = "SELECT client.*, role.name AS role_name FROM client JOIN role ON client.account_role = role.id WHERE client.id = $value";

                    $result = mysqli_query($conn, $query);

                    // Kiểm tra và hiển thị dữ liệu trả về
                    if ($result && mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $id = $row["id"];
                        $name = $row["name"];
                        $image = $row["image"];
                        $email = $row["email"];
                        $note = $row["note"];
                        $account_role = $row["account_role"];
                        $role_name = $row["role_name"];
                        $is_active = $row["is_active"];
                        $created_at = $row["created_at"];
                        $updated_at = $row["updated_at"];
                ?>
                        <form autocomplete="off" action="" method="POST">
                            <input type="hidden" id="id" value="<?= $id ?>" />
                            <div class="row">
                                <div class="col-3">
                                    <!-- Name input -->
                                    <div class="form-outline" data-mdb-input-init>
                                        <input type="text" id="name" class="form-control active" value="<?= $name ?>" />
                                        <label class="form-label" for="text">Họ Và Tên</label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <!-- Email input -->
                                    <div data-mdb-input-init class="form-outline">
                                        <input type="email" id="email" class="form-control active" value="<?= $email ?>" />
                                        <label class="form-label" for="form8Example<?= $value ?>">Email Đăng Nhập </label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <select data-mdb-select-init id="is_active">
                                        <option value="0" <?php if ($is_active == 0) echo 'selected'; ?>>Đang hoạt động</option>
                                        <option value="1" <?php if ($is_active == 1) echo 'selected'; ?>>Tạm dừng hoạt động</option>
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
                                            $i=1;
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
                                        <textarea class="form-control active" id="note" rows="4"><?= $note ?></textarea>
                                        <label class="form-label" for="textAreaExample">Mô Tả Thông Tin</label>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer text-muted d-flex justify-content-between">
                                <a href="<?php echo $base_url; ?>client.php" type="button" class="btn btn-secondary me-2" data-mdb-ripple-init>Quay về</a>
                                <div class="d-flex">
                                    <button id="btnLuuThayDoi" type="button" class="btn btn-primary me-2" data-mdb-ripple-init onclick="submitData2('edit')">Lưu thay đổi</button>
                                </div>
                            </div>

                        </form>
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


    <div class="toast position-fixed top-0 end-0 m-4 mb-5  fade" id="toast" role="alert" aria-live="assertive" aria-atomic="true" data-mdb-autohide="false" data-mdb-offset="50" data-mdb-color="success" style="margin-top:85px!important">
        <div class="toast-header">
            <strong class="me-auto">Thông Báo</strong>
            <button type="button" class="btn-close" data-mdb-dismiss="toast" aria-label="Close"></button>
        </div>
        <h6 class="toast-body" id="toastBody">Cập nhật thành công bản ghi!</h6>
    </div>

</main>

<script>
    function submitData2(action) {
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var account_role = document.getElementById("account_role").value;
        var is_active = document.getElementById("is_active").value;
        if (name === '' || email === '' || account_role === '' || is_active === '') {
            alert("Vui lòng điền đầy đủ thông tin.");
        } else{
            submitData('edit');
        }
    }
</script>


<!--Main layout-->

<script src="https://cdn.jsdelivr.net/gh/Duc-Nguyen98/ManageCoffe/src/js/mdb.umd.min.js"></script>

<?php include '../../layout/footer.php'; ?>
