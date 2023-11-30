<?php
if (!isset($_COOKIE['status'])) {
    header('location: login.php?err=bad_request');
}
?>

<html>

<head>
    <title>Ticket Booking</title>
    <link rel="stylesheet" href="../assects/css/user/bookTickets.css">
</head>

<body>
    <form action="" method="post">
        <div class="fullBody">
            <div class="navbar">
                <div class="nav">
                    <div class="logo">
                        <a href="home.php">Railway E-ticket Service</a>
                    </div>

                    <div class="link">
                        <a href="home.php">Home</a>
                        <a href="userProfile.php">
                            <?php
                            $username = $_COOKIE['username'];
                            $con = mysqli_connect('localhost', 'root', '', 'webtech');
                            $sql = "SELECT Name FROM users WHERE Username='{$username}'";
                            $result = mysqli_query($con, $sql);
                            if ($result) {
                                while ($row = $result->fetch_assoc()) {
                                    echo $row['Name'];
                                }
                            }
                            ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="error">
                    <?php
                    if (isset($_GET['err'])) {
                        if ($_GET['err'] == 'null') {
                            echo "Must be filled all info....";
                        }
                        if ($_GET['err'] == 'same') {
                            echo "From and To station must be different....";
                        }
                        if ($_GET['err'] == 'dontFound') {
                            echo "Train is not available on this day";
                        }
                    }
                    ?>
                </div>

                <div class="content1">
                    <label for="from">From Station:</label>
                    <select name="from" id="from">
                        <option value>Select From Station</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Chottogram">Chottogram</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Maymensingh">Maymensingh</option>
                    </select><br>

                    <label for="to">To Station:</label>
                    <select name="to" id="to">
                        <option value>Select To Station</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Chottogram">Chottogram</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Maymensingh">Maymensingh</option>
                    </select><br>

                    <label for="doj">Date of Journey:</label>
                    <input type="date" name="doj" id="doj" value=""><br>

                    <input type="submit" name="btn" value="Search Train" />
                </div>

                <?php
                if (isset($_POST['btn'])) {
                    $from = $_POST['from'];
                    $to = $_POST['to'];
                    $doj = $_POST['doj'];

                    if ($from != "Select From Station" && $to != "Select To Station" && $doj != "") 
                    {
                        $con = mysqli_connect('localhost', 'root', '', 'webtech');
                        $sql = "SELECT * FROM train WHERE fromStation='{$from}' AND toStation='{$to}' AND dateOfJourney='{$doj}'";
                        $result = mysqli_query($con, $sql);

                        if ($result && mysqli_num_rows($result) > 0) 
                        {
                            while ($row = mysqli_fetch_assoc($result)) 
                            {
                                echo "<p>Train Name: {$row['trainName']}</p>";
                                echo "<p>From Station: {$row['fromStation']}</p>";
                                echo "<p>Start Time: {$row['startTime']}</p>";
                                echo "<p>To Station: {$row['toStation']}</p>";
                                echo "<p>Arrival Time: {$row['arrivalTime']}</p>";
                                echo "<p>Date of Journey: {$row['dateOfJourney']}</p>";

                                // echo "<form action='selectSit.php' method='get'>";
                                // echo "<input type='hidden' name='train_id' value='{$row['id']}' />";
                                // echo "<input type='submit' name='btn_book' value='Book' id='bookButton' />";
                                // echo "</form>";
                                ?>
                                <a href='selectSit.php?book=<?php echo $row['id']; ?>'>Book</a>
                                <?php
                                echo "<hr>";
                            }
                        } 
                        else 
                        {
                            echo "No trains found for the selected criteria.";
                        }

                        mysqli_close($con);
                    } 
                    else 
                    {
                        echo "Please select valid values for From Station, To Station, and Date of Journey.";
                    }
                }
                ?>
            </div>
        </div>
    </form>
</body>

</html>
