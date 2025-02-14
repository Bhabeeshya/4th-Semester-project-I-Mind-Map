<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Score Visualization</title>
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
    <h1>Anxiety Scores Visualization</h1>
    <div class="chart-container">
        <canvas id="scoreChart"></canvas>
    </div>

    <script>
        // Fetch anxiety scores from the PHP script
        fetch('get_anxiety_scores.php')
            .then(response => response.json())
            .then(scores => {
                // Count occurrences in each category
                const lowCount = scores.filter(score => score <= 21).length;
                const moderateCount = scores.filter(score => score > 21 && score <= 35).length;
                const highCount = scores.filter(score => score > 35).length;

                // Render the bar chart
                const ctx = document.getElementById('scoreChart').getContext('2d');
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Low Anxiety (0-21)', 'Moderate Anxiety (22-35)', 'High Anxiety (36+)'],
                        datasets: [{
                            label: 'Number of People',
                            data: [lowCount, moderateCount, highCount],
                            backgroundColor: ['#28a745', '#ffc107', '#dc3545'],
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
