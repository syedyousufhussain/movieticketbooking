<?php
// include('header.php');
include('connect.php'); // Ensure your database connection is included

// Check if movieID is passed in the URL
if (isset($_GET['bookID'])) {
    $bookID = intval($_GET['bookID']); // Sanitize input

    // Fetch the movie details
    $query = "SELECT * FROM `booking` WHERE `bk_id` = $bookID";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $movie = mysqli_fetch_assoc($result); // Fetch movie details
    } else {
        echo "<p>Movie not found.</p>";
        exit; // Stop script execution if movie is not found
    }
} else {
    echo "<p>No movie selected.</p>";
    exit; // Stop script execution if movieID is not provided
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Movie Ticket</title>
    <link rel="stylesheet" href="styles.css">
    <style>
    /* Main body styling */
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #1a1a1a;
    font-family: 'Arial', sans-serif;
    color: #ffffff;
}

/* Main container to stack items */
.main-container {
    display: flex;
    flex-direction: column; /* Stack items vertically */
    align-items: center;    /* Center horizontally */
    gap: 20px;              /* Add space between items */
}

/* Ticket container styling */
.ticket-container {
    width: 600px;
    background: linear-gradient(90deg, #d32f2f 65%, #ffffff 65%);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
    position: relative;
    overflow: hidden;
}

.ticket-container::before,
.ticket-container::after {
    content: '';
    position: absolute;
    width: 30px;
    height: 30px;
    background-color: #1a1a1a;
    border-radius: 50%;
    z-index: 1;
}

.ticket-container::before {
    top: -15px;
    left: 15px;
}

.ticket-container::after {
    bottom: -15px;
    right: 15px;
}

.ticket-details {
    flex: 1;
    padding-right: 20px;
    z-index: 2;
    color: #ffffff;
}

.ticket-details h2 {
    font-size: 1.8em;
    color: #ffd700;
    margin-bottom: 10px;
    text-transform: uppercase;
    font-weight: bold;
}

.ticket-details p {
    margin-bottom: 10px;
    font-size: 1.1em;
    color: #ffffff;
}

.ticket-details .ticket-price {
    font-size: 1.5em;
    font-weight: bold;
    color: #1a1a1a;
    background: linear-gradient(145deg, #ffd700, #ffc107);
    padding: 8px 20px;
    border-radius: 10px;
    display: inline-block;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.5);
}

.ticket-image {
    flex: 0.5;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 2;
    overflow: hidden;
}

.ticket-image img {
    max-width: 200px;
    height: auto;
    border-radius: 10px;
    border: 3px solid rgba(255, 215, 0, 0.7);
}

/* Print button container */
.print-button-container {
    text-align: center;
}

.print-btn {
    padding: 10px 30px;
    background: linear-gradient(145deg, #ffd700, #ffc107);
    color: #1a1a1a;
    font-size: 1.2em;
    font-weight: bold;
    border-radius: 8px;
    cursor: pointer;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
    transition: all 0.3s ease;
}

.print-btn:hover {
    background: linear-gradient(145deg, #ffc107, #ffd700);
    box-shadow: 0 12px 20px rgba(0, 0, 0, 0.6);
}

@media (max-width: 768px) {
    .ticket-container {
        flex-direction: column;
        height: auto;
        padding: 15px;
        text-align: center;
    }

    .ticket-details {
        padding-right: 0;
        margin-bottom: 20px;
    }

    .ticket-image img {
        max-width: 120px;
    }
}

/* Hide button in print mode */
@media print {
    .print-btn, .print-button-container {
        display: none;
    }
}

    </style>
</head>
<body>
    <div class="ticket-container">
        <!-- Ticket Details -->
        <div class="ticket-details">
            <br>
            <strong>Movie Name:</strong><h2><?php echo $movie['bk_moviename']; ?></h2>
            <p><strong>User Name:</strong><?php echo $movie['bk_person_name']; ?></p>
            <p><strong>Seat No:</strong> <?php echo $movie['bk_seat_no']; ?></p>
            <p><strong>Date:</strong> <?php echo $movie['bk_mvdate']; ?></p>
            <p><strong>Time:</strong> <?php echo $movie['bk_show_time']; ?></p>
            <p class="ticket-price"><?php echo 1200 * $movie['bk_num_people'] . " PKR"; ?></p>
        </div>
        <!-- Movie Image -->
<?php 
include('connect.php');
// echo $_SESSION['image'];
session_start();
$select = "SELECT * FROM `booking";
$result = mysqli_query($con, $query);

?>

        <div class="ticket-image">
            <!-- <img src="path/to/movie-image.jpg" alt="Movie Image"> -->
            <img src="../main/img/<?php echo $_SESSION['image']; ?>" alt="Movie Image">
        </div>

    </div>

    <!-- Print Button -->
     <br>
     <!-- Print Button -->
<!-- Print Button -->
<div class="print-button-container">
    <button class="print-btn" onclick="window.print()">Print Ticket</button>
</div>


    <!-- <button class="print-btn" onclick="window.print()">Print Ticket</button>
      -->
</body>
</html>
