<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mind Map Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="sidebar">
        <h2>Mind Map</h2>
        <nav>
            <ul>
                <li><a href="../home_button.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="#"><i class="fas fa-book"></i> Resources</a></li>
                <li><a href="#"><i class="fas fa-file-alt"></i> Reports</a></li>
                <li><a href="./mood_tracker.php"><i class="fas fa-heart"></i> Mood Tracker</a></li>
                <li><a href="#"><i class="fas fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>

            </ul>
        </nav>
    </div>
    <div class="main-content">
        <header>
            <h1>Welcome to Mind Map Dashboard</h1>
        </header>
        <main>
            <div class="dashboard-container">
                <section class="card">
                    <h2><i class="fas fa-smile"></i> Mood Tracker</h2>
                    <!-- <img src="https://via.placeholder.com/150" alt="Mood Tracker Icon" class="card-icon"> -->
                    <p>Track your daily mood to monitor your mental health progress.</p>
                    <button>  <a href="./anxiety.php">Log Mood </a></button>
                </section>

                <section class="card">
                    <h2><i class="fas fa-file-alt"></i> Reports</h2>
                    <p>View detailed reports and analytics about your mood and progress.</p>
                    <button>  <a href="./report.php">View Reports</a></button>
                </section>

                <section class="card">
                    <h2><i class="fas fa-book-open"></i> Resources</h2>
                    <!-- <img src="https://via.placeholder.com/150" alt="Resources Icon" class="card-icon"> -->
                    <p>Access helpful articles, videos, and tools for mental health.</p>
                    <button>Explore</button>
                </section>
                <section class="card">
                    <h2><i class="fas fa-lightbulb"></i> Daily Tips</h2>
                    <!-- <img src="https://via.placeholder.com/150" alt="Tips Icon" class="card-icon"> -->
                    <p>"Stay positive and practice gratitude."</p>
                </section>
                <section class="card">
                    <h2><i class="fas fa-chart-line"></i> Your Progress</h2>
                    <!-- <img src="https://via.placeholder.com/150" alt="Progress Icon" class="card-icon"> -->
                    <p>Weekly Mood Score: 8.5/10</p>
                    <p>Overall Improvement: 75%</p>
                </section>
            </div>
        </main>
        <footer>
            <p>© 2024 Mind Map. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>



