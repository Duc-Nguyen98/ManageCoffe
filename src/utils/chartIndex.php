<script type="text/javascript">
    // Data chart-xuất nhập
    const dataChartBarDoubleDatasetsExample = {
        type: 'bar',
        data: {
            labels: ['Desktop', 'Mobile', 'Tablet'],
            datasets: [{
                label: 'Users',
                data: [510, 653, 255],
            }, {
                label: 'Page views',
                data: [1251, 1553, 1355],
                backgroundColor: '#94DFD7',
                borderColor: '#94DFD7',
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
            labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday '],
            datasets: [{
                    label: 'Impressions',
                    yAxisID: 'y',
                    data: [2112, 2343, 2545, 3423, 2365, 1985, 987],
                    order: 2,
                },
                {
                    label: 'Impressions (absolute top) %',
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
    const optionsChartTooltipsFormattingExample = {
        options: {
            scales: {
                y: {
                    display: true,
                    position: 'left',
                },
                y1: {
                    display: true,
                    position: 'right',
                    grid: {
                        drawOnChartArea: false,
                    },
                    ticks: {
                        beginAtZero: true,
                    },
                },
            },
        },
    };

    new mdb.Chart(
        document.getElementById('chart-tooltips-formatting-example'),
        dataChartTooltipsFormattingExample,
        optionsChartTooltipsFormattingExample
    );

    // Data chart-thong ke
</script>