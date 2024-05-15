<?php include '../../layout/header.php'; ?>
<?php include '../../utils/barCode.php'; ?>
<?php require 'script.php'; ?>
<!--Main layout-->

<main style="margin-top: 58px;">
    <div class="container-fluid py-4 my-5">
        <div class="card text-center">
            <div class="card-header text-start">
                <h5>Tạo mới thông tin - #IDR</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <div class="form-outline" data-mdb-input-init>
                            <input type="text" id="form12" class="form-control" />
                            <label class="form-label" for="form12">Tên Công Thức</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-outline" data-mdb-input-init>
                            <input type="number" min="0" id="form12" class="form-control" />
                            <label class="form-label" for="form12">Giá Bán</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-outline" data-mdb-input-init>
                            <input type="text" id="form12" class="form-control" />
                            <label class="form-label" for="form12">Tác Giả</label>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-6">
                        <select data-mdb-select-init multiple id="productSelector">
                            <?php
                            $query = "SELECT id, name, barcode FROM `product`";
                            $result = mysqli_query($conn, $query);
                            if ($result && mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='" . $row['id'] . "' data-name='" . $row['name'] . "' data-barcode='" . $row['barcode'] . "'>" . $row['name'] . "</option>";
                                }
                            } else {
                                echo "<option value=''>Không có sản phẩm</option>";
                            }
                            ?>

                        </select>
                        <label class="form-label select-label">Chọn công thức</label>
                        <hr />
                        <div class="row" id="list_recipe">
                            <!-- Dynamic inputs will be added here -->
                        </div>
                    </div>

                </div>

                <div class="card-footer text-muted d-flex justify-content-between">
                    <button type="button" class="btn btn-secondary" onclick="backToPrevious()">Quay về</button>
                    <button type="button" class="btn btn-primary" onclick="submitData2('insert')">Lưu thay đổi</button>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    function createInput(className, type, value, readOnly) {
        let input = document.createElement('input');
        input.type = type;
        input.className = className;
        input.value = value;
        input.readOnly = readOnly;
        return input;
    }

    function createButton(className, text) {
        let button = document.createElement('button');
        button.className = className;
        button.type = 'button';
        button.innerText = text;
        return button;
    }

    document.getElementById('productSelector').addEventListener('change', function () {
        var selectedOption = this.options[this.selectedIndex];
        var listContainer = document.getElementById('list_recipe');

        var inputGroup = document.createElement('div');
        inputGroup.className = 'input-group mb-3';

        var nameInput = createInput('form-control', 'text', selectedOption.getAttribute('data-name'), true);
        var idInput = createInput('form-control', 'number', selectedOption.value, true);
        var barcodeInput = createInput('form-control', 'text', selectedOption.getAttribute('data-barcode'), true);
        inputGroup.append(nameInput, idInput, barcodeInput);

        var removeButton = createButton('btn btn-danger', 'Xóa');
        removeButton.onclick = function () {
            listContainer.removeChild(inputGroup);
        };

        var appendGroup = document.createElement('div');
        appendGroup.className = 'input-group-append';
        appendGroup.appendChild(removeButton);

        inputGroup.appendChild(appendGroup);
        listContainer.appendChild(inputGroup);
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