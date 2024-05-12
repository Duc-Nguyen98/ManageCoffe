<script>
    let isMessageShown = false; // Biến để kiểm tra xem thông báo đã được hiển thị hay chưa

    function generateToastScript(base_url, count) {
        const toast = new mdb.Toast(document.getElementById('toast'));
        const toastBody = document.getElementById('toastBody');
        const messageElement = document.createElement('div');
        messageElement.textContent = '';
        toastBody.appendChild(messageElement);

        const btnLuuThayDoi = document.getElementById('btnLuuThayDoi');
        btnLuuThayDoi.addEventListener('click', function() {
            if (!isMessageShown) { // Kiểm tra xem thông báo đã được hiển thị hay chưa
                toast.show();
                isMessageShown = true; // Đặt biến isMessageShown thành true sau khi hiển thị thông báo

                let countDown = count;

                const interval = setInterval(function() {
                    countDown -= 1;
                    if (countDown >= 0) {
                        messageElement.textContent = `Tự động chuyển trang sau : ${countDown} giây`;
                    } else {
                        clearInterval(interval);
                        window.location.href = `${base_url}client.php`;
                    }
                }, 1000);
            }
        });
    }
</script>