<?php
if (!isset($_COOKIE['status'])) 
{
    header('location: login.php?err=bad_request');
}

if (isset($_GET['book'])) 
{
    $trainId = $_GET['book'];
    $con = mysqli_connect('localhost', 'root', '', 'webtech');

    // Fetch train details based on train_id
    $getTrainSql = "SELECT * FROM train WHERE id = '$trainId'";
    $trainResult = mysqli_query($con, $getTrainSql);

    if ($trainResult && mysqli_num_rows($trainResult) > 0) 
    {
        $trainDetails = mysqli_fetch_assoc($trainResult);

        // Display train details
        echo "<p>Train Name: {$trainDetails['trainName']}</p>";
        echo "<p>From Station: {$trainDetails['fromStation']}</p>";
        echo "<p>Start Time: {$trainDetails['startTime']}</p>";
        echo "<p>To Station: {$trainDetails['toStation']}</p>";
        echo "<p>Arrival Time: {$trainDetails['arrivalTime']}</p>";
        echo "<p>Date of Journey: {$trainDetails['dateOfJourney']}</p>";

        // You can continue to display other details or handle the booking logic
    } 
    else 
    {
        echo "Train details not found.";
    }

    mysqli_close($con);
} 
else 
{
    echo "Invalid request. Please go back to the search page.";
}
?>
