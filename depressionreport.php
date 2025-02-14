<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Depression Scores Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        .chart-container {
            width: 80%;
            max-width: 600px;
            margin: 0 auto;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Depression Scores Visualization</h1>
    <div class="chart-container">
        <canvas id="depressionChart"></canvas>
    </div>

    <script>
        // Fetch depression scores from the PHP script
        fetch('get_depression_scores.php')
            .then(response => response.json())
            .then(scores => {
                // Count occurrences in each category
                const minimalCount = scores.filter(score => score >= 0 && score <= 4).length;
                const mildCount = scores.filter(score => score >= 5 && score <= 9).length;
                const moderateCount = scores.filter(score => score >= 10 && score <= 14).length;
                const moderatelySevereCount = scores.filter(score => score >= 15 && score <= 19).length;
                const severeCount = scores.filter(score => score >= 20).length;

                // Render the bar chart
                const ctx = document.getElementById('depressionChart').getContext('2d');
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [
                            'Minimal (0-4)',
                            'Mild (5-9)',
                            'Moderate (10-14)',
                            'Mod. Severe (15-19)',
                            'Severe (20-27)'
                        ],
                        datasets: [{
                            label: 'Number of People',
                            data: [minimalCount, mildCount, moderateCount, moderatelySevereCount, severeCount],
                            backgroundColor: ['#28a745', '#ffc107', '#fd7e14', '#dc3545', '#6f42c1'],
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                display: false
                            },
                            tooltip: {
                                callbacks: {
                                    label: function(tooltipItem) {
                                        return `Count: ${tooltipItem.raw}`;
                                    }
                                }
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true,
                                title: {
                                    display: true,
                                    text: 'Number of People'
                                }
                            }
                        }
                    }
                });
            })
            .catch(error => console.error('Error:', error));
    </script>
</body>
</html>
