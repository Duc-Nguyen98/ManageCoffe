<?php include '../../layout/header.php'; ?>
<!--Main layout-->

<main style="margin-top: 58px;">
    <div class="container-fluid py-4 my-5">
        <div class="card text-center">
            <div class="card-header text-start">
                <h5>Tạo mới dữ liệu</h5>
            </div>
            <form action="">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <!-- Name input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="form8Example1" class="form-control" />
                                <label class="form-label" for="form8Example1">Name</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="email" id="form8Example2" class="form-control" />
                                <label class="form-label" for="form8Example2">Email address</label>
                            </div>
                        </div>
                    </div>

                    <hr />

                    <div class="row">
                        <div class="col">
                            <!-- Name input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="form8Example3" class="form-control" />
                                <label class="form-label" for="form8Example3">First name</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Name input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="form8Example4" class="form-control" />
                                <label class="form-label" for="form8Example4">Last name</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="email" id="form8Example5" class="form-control" />
                                <label class="form-label" for="form8Example5">Email address</label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer text-muted d-flex justify-content-between">
                    <a href="<?php echo $base_url; ?>recipe.php" type="button" class="btn btn-secondary me-2" data-mdb-ripple-init>Quay về</a>
                    <div class="d-flex">
                        <button type="button" class="btn btn-primary me-2" data-mdb-ripple-init>Lưu thay đổi</button>
                        <button type="button" class="btn btn-secondary" data-mdb-ripple-init onclick="resetInputs()">Đặt lại</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</main>

<!--Main layout-->



<!-- resetInputs -->
<?php include '../utils/resetInput.php'; ?>

<!-- resetInputs -->



<?php include '../../layout/footer.php'; ?>