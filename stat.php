<?php include 'upload.php' ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graph Example</title>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: aliceblue;
        }

        canvas {
            max-width: 600px;
            margin: 20px;
            max-height: 650px;
        }
    </style>
</head>
<body>

    <canvas id="myChart"></canvas>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Chart.register(ChartDataLabels); 

            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Files', 'Downloads'],
                    datasets: [{
                        label: 'WEB PAGE STATS',
                        data: [<?php echo $totalFiles; ?>, <?php echo $totalDownloads; ?>],
                        backgroundColor: 'rgb(255,206,45)',
                        borderColor: 'rgb(254,86,9)',
                        borderWidth: 1
                    }]
                },
                options: {
                    plugins: {
                        datalabels: {
                            anchor: 'end',
                            align: 'end',
                            font: {
                                weight: 'bold'
                            },
                            color: 'black',
                            formatter: function (value, context) {
                                return value; 
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 440
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>
