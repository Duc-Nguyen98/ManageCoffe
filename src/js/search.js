document.addEventListener("DOMContentLoaded", function() {
    // Lấy tham chiếu đến input search
    var searchInput = document.getElementById("search-input");

    // Thêm sự kiện input vào input search
    searchInput.addEventListener("input", function() {
        // Lấy giá trị nhập vào từ ô tìm kiếm
        var searchString = searchInput.value.toLowerCase();

        // Lấy danh sách các hàng trong bảng
        var rows = document.querySelectorAll("#table tbody tr");

        // Lặp qua từng hàng trong bảng để tìm kiếm
        rows.forEach(function(row) {
            // Lấy nội dung của ô ID trong hàng
            var idCell = row.querySelector("td:nth-child(2)"); // Thay đổi số 2 thành vị trí cột ID trong bảng

            // Kiểm tra xem ID có chứa chuỗi tìm kiếm không
            if (idCell.textContent.toLowerCase().includes(searchString)) {
                row.style.display = ""; // Hiển thị hàng nếu ID tìm thấy
            } else {
                row.style.display = "none"; // Ẩn hàng nếu ID không tìm thấy
            }
        });
    });
});
