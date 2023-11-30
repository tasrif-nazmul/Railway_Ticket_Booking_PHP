<?php
if (!isset($_COOKIE['status'])) {
    header('location: login.php?err=bad_request');
    exit; // Add an exit to stop further execution
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Trains</title>
</head>
<body>

<h2>Available Trains</h2>

<?php
// Check if $result is set and is an array or an object
if ($resul) {
    foreach ($result as $train) {
        ?>
        <div>
            <h3>Train Name: <?php echo $train['trainName']; ?></h3>
            <p>From Station: <?php echo $train['fromStation']; ?></p>
            <p>Start Time: <?php echo $train['startTime']; ?></p>
            <p>Destination: <?php echo $train['toStation']; ?></p>
            <p>Arrival Time: <?php echo $train['arrivalTime']; ?></p>
            <p>Date of Journey: <?php echo date('d-M-Y', strtotime($train['dateOfJourney'])); ?></p>
            <!-- Add more details as needed -->
        </div>
        <hr>
        <?php
    }
} else {
    // Handle the case when $result is not set or is not an array/object
    echo "<p>No available trains found.</p>";
}
?>

<!-- Add any additional content or scripts here -->

</body>
</html>
