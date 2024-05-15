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
                        <div class="form-outline">
                            <input type="text" id="name" class="form-control" value="" />
                            <label class="form-label" for="name">Tên Công Thức</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <!-- Slug input -->
                        <div class="form-outline">
                            <input type="text" id="slug" class="form-control" value="" />
                            <label class="form-label" for="slug">Slug</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <!-- Price input -->
                        <div class="form-outline">
                            <input type="number" id="price_recipe" class="form-control" value="" />
                            <label class="form-label" for="price_recipe">Giá tham khảo</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <!-- Author input -->
                        <div class="form-outline">
                            <input type="text" id="created_by" class="form-control" value="" />
                            <label class="form-label" for="created_by">Tác Giả</label>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <select id="productSelector" class="form-select" data-mdb-select="true">
                        <option value="">Chọn sản phẩm</option>
                        <!-- Add more options here -->
                    </select>
                </div>
                <hr />
                <div class="row" id="list_recipe">
                    <!-- Dynamic input will be added here -->
                </div>
                <div class="card-footer text-muted d-flex justify-content-between">
                    <button type="button" class="btn btn-secondary me-2" onclick="backToPrevious()">Quay về</button>
                    <button id="btnLuuThayDoi" type="button" class="btn btn-primary me-2"
                        onclick="submitData2('insert')">Lưu thay đổi</button>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    document.getElementById('productSelector').addEventListener('change', function () {
        var selectedValue = this.value;
        var listContainer = document.getElementById('list_recipe');
        if (selectedValue) {
            var newInput = document.createElement('input');
            newInput.type = 'text';
            newInput.className = 'form-control mt-2';
            newInput.placeholder = 'Nhập số lượng cho sản phẩm ' + selectedValue;
            listContainer.appendChild(newInput);
        }
    });

    function backToPrevious() {
        window.history.back();
    }

    function submitData2(action) {
        console.log("Lưu thay đổi cho hành động:", action);
    }
</script>

<script src="https://cdn.jsdelivr.net/gh/Duc-Nguyen98/ManageCoffe/src/js/mdb.umd.min.js"></script>
<?php include '../../layout/footer.php'; ?>