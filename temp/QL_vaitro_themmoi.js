document.addEventListener("DOMContentLoaded", function() {
    // Lấy ra checkbox "checkbox-all-role"
    var checkboxAll = document.getElementById("checkbox-all-role");
    
    // Lấy ra tất cả các checkbox trong .permission-group.permission-item
    var permissionItemCheckboxes = document.querySelectorAll(".permission-group .permission-item input[type='checkbox']");
    
    // Thêm sự kiện cho checkbox "checkbox-all-role"
    checkboxAll.addEventListener("change", function() {
        // Đặt thuộc tính checked cho tất cả các checkbox trong .permission-group.permission-item dựa trên trạng thái của "checkbox-all-role"
        permissionItemCheckboxes.forEach(function(checkbox) {
            checkbox.checked = checkboxAll.checked;
        });
    });

    // Thêm sự kiện cho tất cả các checkbox trong .permission-group.permission-item
    permissionItemCheckboxes.forEach(function(checkbox) {
        // Thêm sự kiện cho mỗi checkbox
        checkbox.addEventListener("change", function() {
            // Kiểm tra xem tất cả các checkbox trong .permission-group.permission-item có được check không
            var allChecked = true;
            permissionItemCheckboxes.forEach(function(checkbox) {
                if (!checkbox.checked) {
                    allChecked = false;
                }
            });

            // Nếu tất cả các checkbox trong .permission-group.permission-item được check, đặt thuộc tính checked cho checkbox "checkbox-all-role"
            checkboxAll.checked = allChecked;
        });
    });

    // Thêm sự kiện cho checkbox đầu tiên trong mỗi .permission-group
    var permissionGroups = document.querySelectorAll(".permission-group");
    permissionGroups.forEach(function(permissionGroup) {
        // Lấy ra checkbox đầu tiên trong .permission-group
        var firstCheckbox = permissionGroup.querySelector("div:first-child input[type='checkbox']");
        // Lấy ra tất cả các checkbox trong .permission-group.permission-item của permission-group hiện tại
        var permissionItemCheckboxes = permissionGroup.querySelector(".permission-item").querySelectorAll("input[type='checkbox']");
        
        // Thêm sự kiện cho checkbox đầu tiên
        firstCheckbox.addEventListener("change", function() {
            // Kiểm tra nếu checkbox đầu tiên trong .permission-group được check
            if (this.checked) {
                // Đặt thuộc tính checked cho tất cả các checkbox trong .permission-group.permission-item
                permissionItemCheckboxes.forEach(function(checkbox) {
                    checkbox.checked = true;
                });
            } else {
                // Bỏ checked cho tất cả các checkbox trong .permission-group.permission-item
                permissionItemCheckboxes.forEach(function(checkbox) {
                    checkbox.checked = false;
                });
            }
        });
        
        // Thêm sự kiện cho tất cả các checkbox trong .permission-group.permission-item
        permissionItemCheckboxes.forEach(function(checkbox) {
            // Thêm sự kiện cho mỗi checkbox
            checkbox.addEventListener("change", function() {
                // Kiểm tra xem có ít nhất một checkbox trong permission-group không được check
                var atLeastOneUnchecked = false;
                permissionItemCheckboxes.forEach(function(checkbox) {
                    if (!checkbox.checked) {
                        atLeastOneUnchecked = true;
                    }
                });

                // Nếu có ít nhất một checkbox trong permission-group không được check, checkbox đầu tiên trong .permission-group sẽ không được check
                firstCheckbox.checked = !atLeastOneUnchecked;
            });
        });
    });
});
