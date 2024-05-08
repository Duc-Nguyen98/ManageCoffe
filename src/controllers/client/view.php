<?php include '../../layout/header.php'; ?>
<!--Main layout-->

<main style="margin-top: 58px;">
    <div class="container-fluid py-4 my-5">
        <div class="card text-center">
            <div class="card-header text-start">
                <h5>Xem thông tin chi tiết</h5>
            </div>
            <form action="">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <!-- Name input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="form8Example1" class="form-control active" value="Ahihihihi" readonly />
                                <label class="form-label" for="form8Example1">Name</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="email" id="form8Example2" class="form-control active" value="yourname@example.com" readonly />
                                <label class="form-label" for="form8Example2">Email address</label>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col">
                            <!-- First name input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="form8Example3" class="form-control" value="First Name" readonly />
                                <label class="form-label" for="form8Example3">First name</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Last name input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="form8Example4" class="form-control active" value="Last Name" readonly />
                                <label class="form-label" for="form8Example4">Last name</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="email" id="form8Example5" class="form-control active" value="email@example.com" readonly />
                                <label class="form-label" for="form8Example5">Email address</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted d-flex justify-content-between">
                    <a href="<?php echo $base_url; ?>client.php" type="button" class="btn btn-secondary me-2" data-mdb-ripple-init>Quay về</a>
                </div>
            </form>

        </div>
    </div>
</main>

<!--Main layout-->

<?php include '../../layout/footer.php'; ?>