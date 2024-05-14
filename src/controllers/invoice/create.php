<?php include '../../layout/header.php'; ?>
<?php include '../../utils/formatCurrency.php'; ?>

<!--Main layout-->

<main style="margin-top: 58px;">
    <div class="container-fluid py-4 my-5">
        <div class="card text-center">
            <div class="card-header text-start">
                <h5>Tạo mới hóa đơn - #IVP</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <table class="table">
                        <tbody>
                            <table class="table">
                                <thead class="table-info">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">ID Công thức</th>
                                        <th scope="col">Tên Công thức</th>
                                        <th scope="col">Số lượng</th>
                                        <th scope="col">Giá bán</th>
                                        <th scope="col">Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><b>IDR1</b></td>
                                        <td><b>1</b></td>
                                        <td><b>1/SL</b></td>
                                        <td><b>1</b></td>
                                        <td><b>1</b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </tbody>
                    </table>

                </div>
                <div class="row mt-4 py-4 text-end">
                    <div class="col-11 ">
                        <h6>Tổng số lượng: </h6>
                    </div>
                    <div class="col-1 ">
                        <h6>1/SL</h6>
                    </div>
                    <div class="col-11 ">
                        <h6>Tổng tiền hàng: </h6>
                    </div>
                    <div class="col-1">
                        <h6>1</h6>
                    </div>
                    <div class="col-11 ">
                        <h6>Giảm giá hóa đơn: </h6>
                    </div>
                    <div class="col-1">
                        <h6>1%</h6>
                    </div>
                    <div class="col-11 ">
                        <h6>Phí vận chuyển: </h6>
                    </div>
                    <div class="col-1">
                        <h6>1</h6>
                    </div>
                    <div class="col-11 ">
                        <h6>Thành tiền: </h6>
                    </div>
                    <div class="col-1">
                        <h6>1</h6>
                    </div>
                </div>
                <div class="card-footer text-muted d-flex justify-content-between px-0 pt-4">

                    <a href="<?= $base_url ?>invoice.php" type="button" class="btn btn-secondary me-2"
                        data-mdb-ripple-init>Quay về</a>
                    <button id="btnLuuThayDoi" type="button" class="btn btn-primary me-2" data-mdb-ripple-init
                        onclick="submitData2('edit')">Lưu thay đổi</button>
                </div>

            </div>
        </div>
    </div>;

</main>

<!--Main layout-->
<script src="https://cdn.jsdelivr.net/gh/Duc-Nguyen98/ManageCoffe/src/js/mdb.umd.min.js"></script>
<?php include '../../layout/footer.php'; ?>