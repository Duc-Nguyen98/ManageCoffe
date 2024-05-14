<script type="text/javascript">
    // Data chart-xuất nhập
    const dataChartBarDoubleDatasetsExample = {
        type: 'bar',
        data: {
            labels: ['Thứ hai', 'Thứ ba', 'Thứ tư', 'Thứ năm', 'Thứ sáu', 'Thứ bảy', 'Chủ nhật'],
            datasets: [{
                label: 'Số lượng nhập',
                data: [510, 653, 255, 510, 653, 255, 510],
            }, {
                label: 'Số lượng xuất',
                data: [1251, 1553, 1355, 1251, 1553, 1355, 1251],
                backgroundColor: '#DC4C64',
                borderColor: '#DC4C64',
            }, ],
        },
    };

    // Options
    const optionsChartBarDoubleDatasetsExample = {
        options: {
            scales: {
                y: {
                    stacked: false,
                    ticks: {
                        beginAtZero: true,
                    },
                },
                x: {
                    stacked: false,
                },
            },
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            let label = context.dataset.label || '';
                            if (label) {
                                label += ': ';
                            }
                            if (context.parsed.y !== null) {
                                label += context.parsed.y + ' SL';
                            }
                            return label;
                        }
                    }
                }
            }
        },
    };


    new mdb.Chart(
        document.getElementById('chart-bar-double-datasets-example'),
        dataChartBarDoubleDatasetsExample,
        optionsChartBarDoubleDatasetsExample
    );

    // Data chart-xuất nhập

    // Data chart-thong ke
    const dataChartTooltipsFormattingExample = {
        type: 'bar',
        data: {
            labels: ['Thứ hai', 'Thứ ba', 'Thứ tư', 'Thứ năm', 'Thứ sáu', 'Thứ bảy', 'Chủ nhật'],
            datasets: [{
                    label: 'Doanh thu theo tuần',
                    yAxisID: 'y',
                    data: [2112, 2343, 2545, 3423, 2365, 1985, 987],
                    order: 2,
                },
                {
                    label: 'Tăng trưởng (phần trăm) %',
                    yAxisID: 'y1',
                    data: [1.5, 2, 0.5, 3, 1.2, 4, 3.4],
                    type: 'line',
                    order: 1,
                    backgroundColor: 'rgba(66, 133, 244, 0.0)',
                    borderColor: '#94DFD7',
                    borderWidth: 2,
                    pointBorderColor: '#94DFD7',
                    pointBackgroundColor: '#94DFD7',
                    lineTension: 0.0,
                },
            ],
        },
    };

    // Options
    // Options
    const optionsChartTooltipsFormattingExample = {
        options: {
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            let label = context.dataset.label || '';
                            if (label) {
                                label += ': ';
                            }
                            if (context.dataset.label === 'Doanh thu theo tuần') {
                                label += context.parsed.y + ' ₫'; // Đơn vị: Việt Nam đồng
                            } else if (context.dataset.label === 'Tăng trưởng (phần trăm) %') {
                                label += context.parsed.y + ' %'; // Đơn vị: %
                            } else {
                                label += context.parsed.y;
                            }
                            return label;
                        }
                    }
                }
            }
        },
    };


    new mdb.Chart(
        document.getElementById('chart-tooltips-formatting-example'),
        dataChartTooltipsFormattingExample,
        optionsChartTooltipsFormattingExample
    );

    // Data chart-thong ke
</script>