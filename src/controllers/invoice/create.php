<?php include '../../layout/header.php'; ?>
<?php include '../../utils/formatCurrency.php'; ?>
<?php include '../../utils/barCode.php'; ?>

<?php include '../../utils/database.php'; ?>


<main style="margin-top: 58px;">
  <div class="container-fluid py-4 my-5">
    <div class="card text-center">
      <div class="card-header text-start">
        <h5>Tạo mới hóa đơn - #IVP</h5>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-12">
            <form>
              <select name="users" data-mdb-select-init data-mdb-filter="true" id="recipes"
                onchange="showUser(this.value)">
                <?php
                $query = "SELECT id,name,status FROM `recipe`";
                $result = mysqli_query($conn, $query);
                if ($result && mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    $valueOption = $row['id'];
                    $name = $row['name'];
                    $status = $row['status'];
                    echo "<option value='$valueOption'>$name</option>";
                  }
                } else {
                  echo "<option value=''>Không có danh mục</option>";
                }
                ?>
              </select>
              <label class="form-label select-label">Lựa chọn công thức</label>
            </form>
          </div>
          <div class="col-12 my-3">
            <div id="txtHint">
            </div>
          </div>
          <div class="row mt-4 py-4 text-end">
            <div class="row my-1">
              <div class="col-10 ">
                <h6>Tổng số lượng: </h6>
              </div>
              <div class="col-2 ">
                <div class="input-group mb-3">
                  <input type="number" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon2"
                    id="value_count" value="0" disabled />
                  <span class="input-group-text" id="basic-addon2">SP</span>
                </div>
              </div>
            </div>
            <div class="row my-1">
              <div class="col-10 ">
                <h6>Chi phí vận chuyển: </h6>
              </div>
              <div class="col-2 ">
                <div class="input-group mb-3">
                  <input type="number" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon2"
                    id="ship" value="0" disabled />
                  <span class="input-group-text" id="basic-addon2">VNĐ</span>
                </div>
              </div>
            </div>
            <div class="row my-1">
              <div class="col-10 ">
                <h6>Giảm giá: </h6>
              </div>
              <div class="col-2 ">
                <div class="input-group mb-3">
                  <input type="number" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon2"
                    id="voucher" value="0" disabled />
                  <span class="input-group-text" id="basic-addon2">%</span>
                </div>
              </div>
            </div>
            <div class="row my-1">
              <div class="col-10 ">
                <h6>Thành tiền: </h6>
              </div>
              <div class="col-2 ">
                <div class="input-group mb-3">
                  <input type="number" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon2"
                    id="value_total" value="0" disabled />
                  <span class="input-group-text" id="basic-addon2">VNĐ</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer text-muted d-flex justify-content-between pt-4">
          <a href="<?= $base_url ?>invoice.php" type="button" class="btn btn-secondary me-2" data-mdb-ripple-init>Quay
            về</a>
          <button id="btnLuuThayDoi" type="button" class="btn btn-primary me-2" data-mdb-ripple-init
            onclick="submitData2('create')">Lưu thay đổi</button>
        </div>
      </div>
    </div>
</main>



<script>
  function showUser(str) {
    if (str == "") {
      document.getElementById("txtHint").innerHTML = "";
      document.getElementById("value_count").value = 0;
      document.getElementById("value_total").value = 0;
      return;
    }
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        var i = 1;
        var response = JSON.parse(this.responseText);
        var output = `<table class="table ">
                <thead>
                    <tr class="table-info">
                        <th scope="col">#</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Mã vạch</th>
                        <th scope="col">SL khả dụng</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Giá bán</th>
                        <th scope="col">Thành tiền</th>
                    </tr>
                </thead>
                <tbody>`;

        response.data.forEach(function (row) {
          output += `<tr>
                <td><strong>${i++}</strong></td>
                <td><strong>${row.name}</strong></td>
                <td><strong>${row.barcode}</strong></td>
                <td>
                    <div class="form-outline mb-3" data-mdb-input-init>
                        <input type="number" class="form-control" id="inventory_export_${row.id}" min="0" name="inventory_export" value="${row.inventory_export}" disabled />
                    </div>
                </td>
                <td>
                    <div class="form-outline mb-3" data-mdb-input-init>
                        <input type="number" class="form-control" id="count_export_${row.id}" min="0" name="count_export" value="${row.count_export}" oninput="calculateTotal(${row.id}, this)" />
                    </div>
                </td>
                <td>
                    <div class="form-outline mb-3" data-mdb-input-init>
                        <input type="number" class="form-control" id="price_export_${row.id}" min="0" name="price_export" value="${row.price_export}" oninput="calculateTotal(${row.id}, this)" />
                    </div>
                </td>
                <td>
                    <div class="form-outline mb-3" data-mdb-input-init>
                        <input type="number" class="form-control" id="total${row.id}" min="0" name="total" disabled value="${row.total}" />
                    </div>
                </td>
               </tr>`;
        });

        output += "</tbody></table>";

        document.getElementById("txtHint").innerHTML = output;
        document.getElementById("value_count").value = response.value_count;
        document.getElementById("value_total").value = response.value_total;

        // Gọi hàm để lấy giá trị sau khi bảng được cập nhật
        getInputValues();
      }
    }
    xmlhttp.open("GET", "family.php?q=" + str, true);
    xmlhttp.send();
  }

  function calculateTotal(id, element) {
    var countExportInput = document.getElementById('count_export_' + id);
    var inventoryExportInput = document.getElementById('inventory_export_' + id);
    var priceExportInput = document.getElementById('price_export_' + id);
    var totalInput = document.getElementById('total' + id);

    var inventoryExport = parseFloat(inventoryExportInput.value) || 0;
    var countExport = parseFloat(countExportInput.value) || 0;
    var priceExport = parseFloat(priceExportInput.value) || 0;

    // Adjust inventoryExport based on change in countExport
    var previousCountExport = parseFloat(element.getAttribute('data-previous')) || 0;
    var newCountExport = previousCountExport + (countExport - previousCountExport);

    // Ensure countExport does not exceed available inventory
    if (newCountExport > inventoryExport + previousCountExport) {
      countExport = previousCountExport;
      countExportInput.value = countExport;
    } else {
      inventoryExport = inventoryExport + previousCountExport - countExport;
      inventoryExportInput.value = inventoryExport;
    }

    // Update previous count value for next change detection
    element.setAttribute('data-previous', countExport);

    // Calculate total
    var total = countExport * priceExport;
    totalInput.value = total;

    // Gọi hàm để cập nhật lại các giá trị
    getInputValues();
  }
  function getInputValues() {
    // Lấy tất cả các hàng trong bảng
    var totalRecipe = 0;
    var totalCount = 0;
    var totalPrice = 0;
    var totalValue = 0;
    var rows = document.querySelectorAll("#txtHint table tr");

    rows.forEach(function (row, index) {
      if (index === 0) return; // Bỏ qua hàng tiêu đề

      var id = row.cells[0].innerText;
      var inventoryExport = parseFloat(document.getElementById('inventory_export_' + id).value) || 0;
      var countExport = parseFloat(document.getElementById('count_export_' + id).value) || 0;
      var priceExport = parseFloat(document.getElementById('price_export_' + id).value) || 0;
      var total = parseFloat(document.getElementById('total' + id).value) || 0;

      console.log('ID:', id, 'Inventory Export:', inventoryExport, 'Count Export:', countExport, 'Price Export:', priceExport, 'Total:', total);
      totalCount += countExport;
      totalPrice += priceExport;
      totalValue += total;

    });

    document.getElementById("value_count").value = totalCount;
    document.getElementById("value_total").value = totalValue;
  }



</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/Duc-Nguyen98/ManageCoffe/src/js/mdb.umd.min.js"></script>
<?php include '../../layout/footer.php'; ?>