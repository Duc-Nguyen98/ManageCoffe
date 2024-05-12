<?php include '../../layout/header.php'; ?>
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
                    echo "<h5>Cập nhật thông tin chi tiết - #IBD$value </h5>";
                } else {
                    // Xử lý khi không có giá trị được truyền
                    echo "null";
                }
                ?>
            </div>
            <div class="card-body">
                <?php
                if (isset($_GET['id'])) {
                    $value = $_GET['id'];
                    // Thực hiện truy vấn SQL
                    $query = "SELECT * FROM brands WHERE id = $value";

                    $result = mysqli_query($conn, $query);

                    // Kiểm tra và hiển thị dữ liệu trả về
                    if ($result && mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $id = $row["id"];
                        $name = $row["name"];
                        $slug = $row["slug"];
                        $note = $row["note"];

                        ?>
                        <form autocomplete="off" action="" method="POST">
                            <input type="hidden" id="id" value="<?= $id ?>" />

                            <div class="row">
                                <div class="col-6">
                                    <!-- Name input -->
                                    <div data-mdb-input-init class="form-outline">
                                        <input type="text" id="name" class="form-control" value="<?= $name ?>" />
                                        <label class="form-label" for="Name">Tên thương hiệu</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <!-- Email input -->
                                    <div data-mdb-input-init class="form-outline">
                                        <input type="text" id="slug" class="form-control" value="<?= $slug ?>" />
                                        <label class="form-label" for="form8Example2">Slug</label>
                                    </div>
                                </div>
                            </div>

                            <hr />
                            <div class="row">
                                <div class="col-12">
                                    <!-- Name input -->
                                    <div class="form-outline" data-mdb-input-init>
                                        <textarea class="form-control " id="note" rows="4"><?= $note ?></textarea>
                                        <label class="form-label" for="textAreaExample">Mô tả thông tin</label>
                                    </div>
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
        <div class="card-footer text-muted d-flex justify-content-between">
            <a href="<?php echo $base_url; ?>brands.php" type="button" class="btn btn-secondary me-2"
                data-mdb-ripple-init>Quay về</a>
            <div class="d-flex">
                <button id="btnLuuThayDoi" type="button" class="btn btn-primary me-2" data-mdb-ripple-init
                    onclick="submitData2('edit')">Lưu thay đổi</button>
            </div>
        </div>

    </div>
    </div>
</main>

<!--Main layout-->
<script>
    function submitData2(action) {
        var name = document.getElementById("name").value;
        var slug = document.getElementById("slug").value;

        if (name === '' || slug === '') {
            alert("Vui lòng điền đầy đủ thông tin.");
        } else {
            submitData('edit');
        }
    }
</script>

<!-- resetInputs -->
<script src="https://cdn.jsdelivr.net/gh/Duc-Nguyen98/ManageCoffe/src/js/mdb.umd.min.js"></script>
<?php include '../../layout/footer.php'; ?>