<?php include '../../layout/header.php'; ?>
<?php require 'script.php'; ?>

<!--Main layout-->

<main style="margin-top: 58px;">
    <div class="container-fluid py-4 my-5">
        <div class="card text-center">
            <div class="card-header text-start">
                <h5>Tạo mới thông tin chi tiết - #ICT </h5>
            </div>
            <form autocomplete="off" action="" method="POST">
                <input type="hidden" id="id" value="" />
                <div class="card-body">
                    <!-- Query data -->
                    <div class="row">
                        <div class="col-4">
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="name" class="form-control active" value="" />
                                <label class="form-label" for="form8Example">Danh Mục </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <!-- Name input -->
                            <div class="form-outline" data-mdb-input-init>
                                <input type="text" id="slug" class="form-control active" value="" />
                                <label class="form-label" for="text">slug </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <select data-mdb-select-init id="status">
                                <?php
                                // Thực hiện truy vấn SQL
                                $query = "SELECT DISTINCT status FROM `product_categories`";
                                $result = mysqli_query($conn, $query);

                                // Lặp qua các kết quả và tạo các tùy chọn
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $status = $row['status']; // Sửa thành 'status'
                                    $statusText = $status == 0 ? 'Hoạt động' : 'Tạm đóng';
                                    $selected = ($status == $is_active) ? 'selected' : '';

                                    // Tạo tùy chọn với giá trị và văn bản tương ứng, và kiểm tra xem liệu nó có được chọn hay không
                                    echo "<option value='$status' $selected>$statusText</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-12">
                            <!-- Name input -->
                            <div class="form-outline" data-mdb-input-init>
                                <textarea class="form-control active" id="note" rows="6"></textarea>
                                <label class="form-label" for="textAreaExample">Mô tả thông tin</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted d-flex justify-content-between">
                        <a href="<?php echo $base_url; ?>category.php" type="button" class="btn btn-secondary me-2"
                            data-mdb-ripple-init>Quay về</a>
                        <div class="d-flex">
                            <button id="btnLuuThayDoi" type="button" class="btn btn-primary me-2" data-mdb-ripple-init
                                onclick="submitData2('insert')">Lưu thay đổi</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>

<!--Main layout-->


<script>
    function submitData2(action) {
        var name = document.getElementById("name").value;
        var slug = document.getElementById("slug").value;
        var note = document.getElementById("note").value;
        var status = document.getElementById("status").value;

        if (name === '' || slug === '' || status === '') {
            alert("Vui lòng điền đầy đủ thông tin.");
        } else {
            submitData('insert');
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/gh/Duc-Nguyen98/ManageCoffe/src/js/mdb.umd.min.js"></script>
<?php include '../../layout/footer.php'; ?>