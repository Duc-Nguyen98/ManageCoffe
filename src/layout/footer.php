
<footer class="text-center bg-body-tertiary fixed-bottom">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: #ffff">
            © 2020 Copyright:
            <a class="text-body" href="#">Manager - HNMU Coffee</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // chart 1
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6'],
            datasets: [{
                label: 'Số lượng Nhập',
                data: [12, 19, 3, 5, 2, 3], // Dữ liệu cho cột thứ nhất
                borderWidth: 1
            }, {
                label: 'Số lượng Xuất',
                data: [7, 11, 5, 8, 6, 4], // Dữ liệu cho cột thứ hai
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // chart 2
    const ctx2 = document.getElementById('myChart2');

    new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6'],
            datasets: [{
                label: 'Chi phí nhập hàng ',
                data: [80000, 10000, 50000, 150000, 120000, 100000], // Dữ liệu cho cột thứ nhất
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value, index, values) {
                            return value.toLocaleString('en-US', {
                                minimumFractionDigits: 0
                            }) + ' vnđ';
                        }
                    }
                }
            },
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return context.dataset.label + ': ' + context.formattedValue + ' vnđ';
                        }
                    }
                }
            }
        }
    });
</script>

</html>