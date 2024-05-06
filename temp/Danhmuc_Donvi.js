function validateForm() {
    var inputs = document.querySelectorAll('.form-control'); // Lấy tất cả các input
    var invalidInputs = []; // Mảng chứa các input không hợp lệ

    // Duyệt qua tất cả các input
    inputs.forEach(function(input) {
        // Kiểm tra nếu input rỗng
        if (!input.value.trim()) {
            invalidInputs.push(input); // Thêm input không hợp lệ vào mảng
        }
    });

    // Hiển thị thông báo yêu cầu điền vào input nếu có input không hợp lệ
    invalidInputs.forEach(function(input) {
        input.parentNode.querySelector('.invalid-feedback').innerText = 'Vui lòng điền vào trường này'; // Thay đổi nội dung của thông báo lỗi
        input.parentNode.querySelector('.invalid-feedback').style.display = 'block'; // Hiển thị thông báo lỗi
    });

    // Nếu có input rỗng, không ẩn thông báo lỗi, ngược lại ẩn thông báo lỗi
    var isInvalid = invalidInputs.length > 0;
    var feedbackElements = document.querySelectorAll('.invalid-feedback');
    feedbackElements.forEach(function(element) {
        element.style.display = isInvalid ? 'block' : 'none';
    });

    // Nếu không có input nào rỗng, trả về true để cho phép submit form
    return !isInvalid;
}


//Close
    // Sử dụng sự kiện click cho các nút đóng modal
    $('.modal-header .close').click(function() {
        // Xóa các giá trị và loại bỏ lớp is-invalid cho tất cả các input trong modal
        $('#modal-them-moi').find('.form-control').val('').removeClass('is-invalid');
        $('#modal-chinh-sua').find('.form-control').val('').removeClass('is-invalid');
        // Ẩn thông báo lỗi cho tất cả các input
        $('#modal-them-moi').find('.invalid-feedback').hide();
        $('#modal-chinh-sua').find('.invalid-feedback').hide();
    });
