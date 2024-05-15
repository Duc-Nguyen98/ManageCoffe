<!DOCTYPE html>
<html>

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <?php include '../../utils/database.php'; ?>

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
          var response = JSON.parse(this.responseText);
          var output = "<table><tr><th>ID</th><th>Name</th><th>Barcode</th><th>Inventory Export</th><th>Count Export</th><th>Price Export</th><th>Total</th></tr>";

          response.data.forEach(function (row) {
            output += "<tr>";
            output += "<td>" + row.id + "</td>";
            output += "<td>" + row.name + "</td>";
            output += "<td>" + row.barcode + "</td>";
            output += "<td><input type='number' id='inventory_export_" + row.id + "' min='0' name='inventory_export' value='" + row.inventory_export + "' disabled></td>";
            output += "<td><input type='number' id='count_export_" + row.id + "' min='0' name='count_export' value='" + row.count_export + "' oninput='calculateTotal(" + row.id + ", this)'></td>";
            output += "<td><input type='number' id='price_export_" + row.id + "' min='0' name='price_export' value='" + row.price_export + "' oninput='calculateTotal(" + row.id + ", this)'></td>";
            output += "<td><input type='number' id='total" + row.id + "' min='0' name='total' disabled value='" + row.total + "'></td>";
            output += "</tr>";
          });

          output += "</table>";
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
</head>

<body>

  <form>
    <select name="users" data-mdb-select-init data-mdb-filter="true" id="recipes" onchange="showUser(this.value)">
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

  <br>
  <div id="txtHint"></div>
  <br>
  <br>
  <div>
    <label for="value_count">Total Count Export:</label>
    <input type="number" value="0" min="0" id="value_count" disabled>
    <label for="value_count">Transport Ship:</label>
    <input type="number" value="0" min="0" id="ship" disabled>
    <label for="value_count">Voucher%:</label>
    <input type="number" value="0" min="0" max="100" id="voucher" disabled>
    <label for="value_total">Total Value:</label>
    <input type="number" value="0" min="0" id="value_total" disabled>
   
  </div>

</body>

</html>