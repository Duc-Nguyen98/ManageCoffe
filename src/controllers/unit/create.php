<?php include '../../layout/header.php'; ?>
<?php require 'script.php'; ?>

<!--Main layout-->

<main style="margin-top: 58px;">
    <div class="container-fluid py-4 my-5">
        <div class="card text-center">
            <div class="card-header text-start">
                <h5>Tạo mới thông tin chi tiết - #IDV </h5>
            </div>
            <div class="card-body">
                <form autocomplete="off" action="" method="POST">
                    <input type="hidden" id="id" value="" />
                    <div class="row">

                        <div class="col-6">
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="name" class="form-control " value="" />
                                <label class="form-label" for="form8Example">Đơn vị tính</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <!-- Name input -->
                            <div class="form-outline" data-mdb-input-init>
                                <input type="text" id="symbol" class="form-control " value="" />
                                <label class="form-label" for="text">Ký hiệu viết tắt &</label>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-12">
                            <!-- Name input -->
                            <div class="form-outline" data-mdb-input-init>
                                <textarea class="form-control " id="note" rows="4"></textarea>
                                <label class="form-label" for="textAreaExample">Mô tả thông tin</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted d-flex justify-content-between">
                        <a href="<?php echo $base_url; ?>unit.php" type="button" class="btn btn-secondary me-2" data-mdb-ripple-init>Quay về</a>
                        <div class="d-flex">
                            <button id="btnLuuThayDoi" type="button" class="btn btn-primary me-2" data-mdb-ripple-init onclick="submitData2('insert')">Lưu thay đổi</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>;

</main>

<script>
    function submitData2(action) {
        var name = document.getElementById("name").value;
        var symbol = document.getElementById("symbol").value;
        var note = document.getElementById("note").value;

        if (name === '' || symbol === '') {
            alert("Vui lòng điền đầy đủ thông tin.");
        } else{
            submitData('insert');
        }
    }
</script>


<!--Main layout-->
<script src="https://cdn.jsdelivr.net/gh/Duc-Nguyen98/ManageCoffe/src/js/mdb.umd.min.js"></script>
<?php include '../../layout/footer.php'; ?>